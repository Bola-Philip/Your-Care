<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use App\Models\Center;
use App\Models\Doctor;
use App\Models\Favorite;
use App\Models\Lab;
use App\Models\Patient;
use App\Models\PatientDisease;
use App\Models\PatientDiseaseMedia;
use App\Models\Pharmacy;
use App\Models\Rate;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Dotenv\Store\File\Paths;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
    }
    public function show($id)
    {
        try {
            $patient = Patient::find($id);
            if ($patient) {
                return $this->returnData('patient', $patient);
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('patient')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        $patient_image = $this->saveImage($request->image, 'images/patients');
        try {
            $rules = [
                "email" => "required|string|unique:patients",
                "password" => "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->image)
                    $patient_image = $this->saveImage($request->image, 'images/patients');
                else $patient_image = 0;
                $patient = Patient::create([
                    'center_id' => $request->center_id,
                    'insurance_company_id' => $request->insurance_company_id,
                    'image_path' => $patient_image,
                    'name' => $request->name,
                    'username' => $request->username,
                    'birth_date' => $request->birth_date,
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'address' => $request->address,
                    'length' => $request->length,
                    'weight' => $request->weight,
                    'bloodType' => $request->bloodType,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);

                $patient->token = auth('patient')->login($patient);

                return $this->returnData('Patient', $patient, 'Here Is Your Token');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function edit(Request $request, $id)
    {
        $patient_image = $this->saveImage($request->image, 'images/patients');


        // $patient_id = auth('patient')->user()->id;
        $patient = Patient::find($id);
        $patient->update([
            'center_id' => $request->center_id,
            'insurance_company_id' => $request->insurance_company_id,
            'image' => $patient_image,
            'name' => $request->name,
            'username' => $request->username,
            'birth_date' => $request->birth_date,
            'ssn' => $request->ssn,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'length' => $request->length,
            'weight' => $request->weight,
            'bloodType' => $request->bloodType,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
        ]);
        $patient->token = auth('patient')->refresh();
        return $this->returnData("patient", $patient, "Patient has been successfully edited");
    }

    public function addDisease(Request $request)
    {
        try {
            $patient_id = auth('patient')->user()->id;
            $patient = Patient::find($patient_id);
            if ($patient) {
                $disease = PatientDisease::create([
                    'patient_id' => $patient_id,
                    'disease_title' => $request->title,
                    'disease_description' => $request->description
                ]);
                if ($request->media)
                    $media_file = $this->saveImage($request->media, 'images/patients/DiseaseMedia');
                else $media_file = 0;
                $disease_media = PatientDiseaseMedia::create([
                    'disease_id' => $patient_id,
                    'media_path' => $media_file,
                    'detection_date' => $request->detection_at,
                ]);

                return $this->returnData('disease', [$disease, $disease_media], 'Disease successfully added');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function addDiseaseMedia($id, Request $request)
    {
        try {
            $disease = PatientDisease::find($id);
            if ($disease) {
                if ($request->media)
                    $media_file = $this->saveImage($request->media, 'images/patients/DiseaseMedia');
                else $media_file = 0;
                $disease_media = PatientDiseaseMedia::create([
                    'media_path' => $media_file,
                    'detection_date' => $request->detection_at,
                ]);

                return $this->returnData('disease', $disease_media, 'Media successfully added');
            } else {
                return $this->returnError(404, "The requested disease does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function myData()
    {
        $data = auth('patient')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }

    public function bookingRequest(Request $request, $doctor_id)
    {
        $booking = BookingRequest::create([
            'center_id' => auth('patient')->user()->center_id,
            'patient_id' => auth('patient')->user()->id,
            'doctor_id' => $doctor_id,
            'title' => $request->title,
            'service_description' => $request->service_description,
            'rating' => $request->rating,
        ]);
        return $this->returnData('Your Booking', $booking, 'Your request successfully added');
    }

    public function myReport($id)
    {
        try {
            $reports = Patient::find($id);
            return $this->returnData('Your Reports', $reports->reports(), 'Here Is Your Data');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('patient')->refresh());
    }
    public function logout()
    {
        auth('patient')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('patient')->factory()->getTTL() * 60
        ]);
    }

    public function destroy()
    {
        Patient::destroy(auth('patient')->user()->id);
        return $this->returnSuccessMessage('Your account successfully deleted');
    }

    public function delete($id)
    {
        try {
            $patient = Patient::find($id);
            if ($patient) {
                Patient::destroy($id);
                return $this->returnSuccessMessage('Patient successfully deleted');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

 // =======================================Favorites==================================================

     // ================Add Center To Favorite==========

    public function addCenterToFavorite($id)
    {
        try {
            $center = Center::find($id);
            if ($center) {
                Favorite::create([
                    'patient_id' => auth('patients')->user()->id,
                    'center_id' => $id,
                    'favorite' => true,
                ]);
                return $this->returnSuccessMessage('Center successfully added to favorite');
            } else {
                return $this->returnError(404, "The requested center does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================Add Doctor To Favorite==========

    public function addDoctorToFavorite($id)
    {
        try {
            $doctor = Doctor::find($id);
            if ($doctor) {
                Favorite::create([
                    'patient_id' => auth('patients')->user()->id,
                    'doctor_id' => $id,
                    'favorite' => true,
                ]);
                return $this->returnSuccessMessage('Doctor successfully added to favorite');
            } else {
                return $this->returnError(404, "The requested doctor does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================Add Pharmacy To Favorite==========

    public function addPharmacyToFavorite($id)
    {
        try {
            $pharmacy = Pharmacy::find($id);
            if ($pharmacy) {
                Favorite::create([
                    'patient_id' => auth('patients')->user()->id,
                    'pharmacy_id' => $id,
                    'favorite' => true,
                ]);
                return $this->returnSuccessMessage('Pharmacy successfully added to favorite');
            } else {
                return $this->returnError(404, "The requested pharmacy does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================Add Lab To Favorite==========

    public function addLabToFavorite($id)
    {
        try {
            $lab = Lab::find($id);
            if ($lab) {
                Favorite::where([
                    'patient_id' => auth('patients')->user()->id,
                    'lab_id' => $id,
                    'favorite' => true,
                ]);
                return $this->returnSuccessMessage('Lab successfully added to favorite');
            } else {
                return $this->returnError(404, "The requested lab does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================remove Center From Favorite==========

    public function removeCenterFromFavorite($id)
    {
        try {
            $center = Center::find($id);
            if ($center) {
                Favorite::where([
                    'patient_id' => auth('patients')->user()->id,
                    'center_id' => $id,
                ])->destroy();
                return $this->returnSuccessMessage('Center successfully removed from favorite');
            } else {
                return $this->returnError(404, "The requested center does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================remove Doctor From Favorite==========

    public function removeDoctorFromFavorite($id)
    {
        try {
            $doctor = Doctor::find($id);
            if ($doctor) {
                Favorite::where([
                    'patient_id' => auth('patients')->user()->id,
                    'doctor_id' => $id,
                ])->destroy();
                return $this->returnSuccessMessage('Doctor successfully removed from favorite');
            } else {
                return $this->returnError(404, "The requested doctor does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================remove Pharmacy From Favorite==========

    public function removePharmacyFromFavorite($id)
    {
        try {
            $pharmacy = Pharmacy::find($id);
            if ($pharmacy) {
                Favorite::where([
                    'patient_id' => auth('patients')->user()->id,
                    'pharmacy_id' => $id,
                ])->destroy();
                return $this->returnSuccessMessage('Pharmacy successfully removed from favorite');
            } else {
                return $this->returnError(404, "The requested pharmacy does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ================remove Lab From Favorite==========

    public function removeLabFromFavorite($id)
    {
        try {
            $lab = Lab::find($id);
            if ($lab) {
                Favorite::where([
                    'patient_id' => auth('patients')->user()->id,
                    'lab_id' => $id,
                ])->destroy();
                return $this->returnSuccessMessage('Lab successfully removed from favorite');
            } else {
                return $this->returnError(404, "The requested lab does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

     // =======================================Rates=================================================

     // ================Add  Rate To Center =========

     public function addRateToCenter($id, $rate)
     {
         try {
             $center = Center::find($id);
             if ($center) {
                Rate::create([
                     'patient_id' => auth('patients')->user()->id,
                     'center_id' => $id,
                    'rate'=>$rate,
                    ]);
                 return $this->returnSuccessMessage('Center successfully added to your rated list');
             } else {
                 return $this->returnError(404, "The requested center does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================Add Rate To Doctor =========

     public function addRateToDoctor($id, $rate)
     {
         try {
             $doctor = Doctor::find($id);
             if ($doctor) {
                Rate::create([
                     'patient_id' => auth('patients')->user()->id,
                     'doctor_id' => $id,
                    'rate'=>$rate,
                    ]);
                 return $this->returnSuccessMessage('Doctor successfully added to your rated list');
             } else {
                 return $this->returnError(404, "The requested doctor does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================Add Rate To Pharmacy =========

     public function addRateToPharmacy($id, $rate)
     {
         try {
             $pharmacy = Pharmacy::find($id);
             if ($pharmacy) {
                Rate::create([
                     'patient_id' => auth('patients')->user()->id,
                     'pharmacy_id' => $id,
                    'rate'=>$rate,
                    ]);
                 return $this->returnSuccessMessage('Pharmacy successfully added to your rated list');
             } else {
                 return $this->returnError(404, "The requested pharmacy does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================Add Rate To Lab =========

     public function addRateToLab($id, $rate)
     {
         try {
             $lab = Lab::find($id);
             if ($lab) {
                Rate::where([
                     'patient_id' => auth('patients')->user()->id,
                     'lab_id' => $id,
                    'rate'=>$rate,
                    ]);
                 return $this->returnSuccessMessage('Lab successfully added to your rated list');
             } else {
                 return $this->returnError(404, "The requested lab does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================remove Rate From Center ===========

     public function removeRateFromCenter($id)
     {
         try {
             $center = Center::find($id);
             if ($center) {
                Rate::where([
                     'patient_id' => auth('patients')->user()->id,
                     'center_id' => $id,
                 ])->destroy();
                 return $this->returnSuccessMessage('Center successfully removed from your rated list');
             } else {
                 return $this->returnError(404, "The requested center does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================remove Rate From Doctor ===========

     public function removeRateFromDoctor($id)
     {
         try {
             $doctor = Doctor::find($id);
             if ($doctor) {
                Rate::where([
                     'patient_id' => auth('patients')->user()->id,
                     'doctor_id' => $id,
                 ])->destroy();
                 return $this->returnSuccessMessage('Doctor successfully removed from your rated list');
             } else {
                 return $this->returnError(404, "The requested doctor does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================remove Rate From Pharmacy ===========

     public function removeRateFromPharmacy($id)
     {
         try {
             $pharmacy = Pharmacy::find($id);
             if ($pharmacy) {
                Rate::where([
                     'patient_id' => auth('patients')->user()->id,
                     'pharmacy_id' => $id,
                 ])->destroy();
                 return $this->returnSuccessMessage('Pharmacy successfully removed from your rated list');
             } else {
                 return $this->returnError(404, "The requested pharmacy does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }

     // ================remove Rate From Lab ===========

     public function removeRateFromLab($id)
     {
         try {
             $lab = Lab::find($id);
             if ($lab) {
                Rate::where([
                     'patient_id' => auth('patients')->user()->id,
                     'lab_id' => $id,
                 ])->destroy();
                 return $this->returnSuccessMessage('Lab successfully removed from your rated list');
             } else {
                 return $this->returnError(404, "The requested lab does not exist !");
             }
         } catch (\Exception $ex) {
             return $this->returnError($ex->getCode(), $ex->getMessage());
         }
     }
}
