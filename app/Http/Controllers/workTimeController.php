<?php

namespace App\Http\Controllers;

use App\Models\WorkTime;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class workTimeController  extends Controller
{
    use GeneralTrait;
    public function add(Request $request)
    {
        WorkTime::create([
            'doctor_id' => $request->doctor_id,
            'employee_id' => $request->employee_id,
            'type' => $request->type,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
        ]);
        return $this->returnSuccessMessage('Successfully Added');

    }
    public function show($work_time_id)
    {
        $data = WorkTime::find($work_time_id);
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function edit(Request $request, $work_time_id)
    {

        $work_time = WorkTime::find($work_time_id);
        $work_time->update([
            'doctor_id' => $request->doctor_id,
            'employee_id' => $request->employee_id,
            'type' => $request->type,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
        ]);

        return $this->returnSuccessMessage('Successfully Updated');
    }
    public function destroy($work_time_id)
    {
        $data = WorkTime::find($work_time_id);
        if ($data) {
            $data->delete();
            return $this->returnSuccessMessage('Successfully deleted');
        } else {
            return $this->returnError('401', 'Record not found');
        }
    }
}
