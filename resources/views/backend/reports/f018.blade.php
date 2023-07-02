<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F018-THHC ORIENTATION CHECKLIST</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body{
            background: #b4b4b4a0;
        }

        .report-logo{
            max-width: 400px
        }

        .report-header h4{
            letter-spacing: 2px;
        }

        .report-body-header-titled{
            background: #44a8b5;
            font-weight: 600
        }

        table{
            width:100%;
        }
        table tr,td,th{
            border:1px solid black;
            padding:10px;
            vertical-align: top;
        }
        table tr{
            height:50px;
        }


        #first-signature-pad,
        #second-signature-pad{
            width: 100%;
            max-width: 300px;
        }



    </style>

</head>
<body>



    <div class="report-form container my-5 py-3 bg-light shadow">

        <div class="report-header d-flex align-items-center" id="reportHeader">
            <img src="{{ asset('assets/reports/logo.png') }}" class="report-logo" />
            <h4>
                ORIENTATION CHECKLIST
            </h4>
        </div>

        <div id="reportContent">

            <table class="">
                <tbody>
                    <tr>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-3"><label for="doctorName">Staff Name:</label></div>
                                <div class="col-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td class="">
                            <div class="row align-items-center">
                                <div class="col-3"><label for="doctorID">I.D #:</label></div>
                                <div class="col-9">
                                    <input type="text" name="doctorID" id="doctorID" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                        <div class="row">
                                <div class="col-3"><label for="reportDate">Date:</label></div>
                                <div class="col-9">
                                    <input type="date" name="reportDate" id="reportDate" class="form-control">
                                </div>
                        </div>
                        </td>
                        <td class="">
                            <div class="row">
                                <div class="col-3"><label for="joiningDate">Joining Date</label></div>
                                <div class="col-9">
                                    <input type="date" name="joiningDate" id="joiningDate" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="direction my-4">
                <p>
                    <strong>Directions: </strong>
                    if the orientation topic was given, write your initials (signature) and date at the right side of the checklist. [N/A] indicates the item is not applicable to you. All aspect should be covered during orientation period.
                </p>
            </div>

            <div class="instructions my-4">
                <p>
                    <strong>Instructions: </strong>This form must be completed upon new staff arrival by the THHC manager or representative.
                </p>
            </div>

            <table class="">
                <thead>
                    <tr class="report-body-header-titled text-light">
                        <td class=" text-uppercase text-center">item</td>
                        <td class=" text-uppercase text-center">completed by</td>
                        <td class=" text-uppercase text-center">comments</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">Job specific orientation (Review of Job Description), Privileges  </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">THHC Mission, Vision & goal</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td class="">Introducing team members roles and responsibilities  </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Organizational structure, Chain of command and Unit communications</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">THHC tour, Nursing station, Storage room, Staff room, Pantry, </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Bathrooms, etc..</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Shared governance; Councils and committees unit representative  </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Scope of service </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">THHC Manual</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Customer service / person centered care initiatives  </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Telephone directory/ answering phone calls, Telephone bravo number in the THHC</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Dress code </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Duty roster, schedule and allocation, Absenteeism/sick leave and vacation </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Assigned duties as Orientee and preceptor-ship process,</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Daily routine and responsibilities </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Perform duties according to job Description & privilege   </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Annual and mandatory competencies </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Orientation process/evaluation/performance appraisal  </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Emergency codes and appropriate responses</td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            THHC Fire safety
                                <ul>
                                    <li>Location of fire extinguishers, fire hose, fire alarms, assembly area and fire exit </li>
                                    <li>Review of RACE and PASS </li>
                                    <li>Where to report faulty systems </li>
                                    <li>Understand no smoking policy</li>
                                </ul>
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Identify electrical safety</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Unit Disaster response plan</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            Quality, patient safety, Care, and risk management:
                                <ul>
                                    <li>Patient rights and responsibilities</li>
                                    <li>Ethics and professional conduct </li>
                                    <li>Patient safety concept </li>
                                    <li>Reporting critical results </li>
                                    <li>Unit KPI </li>
                                    <li>Informed consent</li>
                                    <li>Antibiotic stewardship</li>
                                    <li>Adverse and sentinel event </li>
                                    <li>Reporting system Risk management plan</li>
                                </ul>
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" name="" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Safety daily unit quality checking’s (O2, Room temp, refrigerator, POCT equipment, Staff Bags)</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Successfully demonstrate safe use of medical equipment (check equipment list)</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Hazardous materials in the unit, Material safety data sheets - MSDS </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Outline unit protocols and Unit forms, Infection control / Q.I forms</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">THHC and related policies and procedures including clinical guide lines. </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">OVR /SRS system and communication </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Information management system downtime and security</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Utilizing Computer and HIS</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Unit Performance improvement projects</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Quality indicators</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Microsoft outlook (responsibility for checking emails)</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Accreditations standard awareness (JCIA, CBAHI, etc.)</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Confidentiality and privacy</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Patient satisfaction survey</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Visiting and patient experience</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Consumables and charging processes</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">HIS orientation</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            Documentation in EMR (form in case of down time)
                            <ul>
                                <li>Patient identification.</li>
                                <li>EMR overview. </li>
                                <li>EMR documentations. </li>
                                <li>How to order (Physician). </li>
                                <li>How to review physician order</li>
                                <li>Consultation and referral process.</li>
                                <li> Admission & Discharge process. </li>
                                <li>Downtime procedure. </li>
                                <li>Recovery phase after downtime. </li>
                                <li>How to request laboratory and radiology test</li>
                                <li>Double check Patient File # before entering prescription. </li>
                                <li>Double check the allergy status of the patient to any drugs. </li>
                                <li>How to discontinue prescription that was entered mistakenly. </li>
                                <li>How to replace medication by another one.</li>
                                <li>Verbal & Telephone Orders</li>
                                <li>Prohibited Abbreviations</li>
                                <li>Approved Abbreviations</li>
                            </ul>
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Referral to hospitals</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            THHC Equipment Orientation
                            <ul>
                                <li>Understand how to handle or report faulty equipment and how to order materials needed  </li>
                                <li>Safe lifting technique </li>
                                <li>Proper usage of unit equipment  </li>
                            </ul>
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">THHC Operational Plan</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Infection control practices and Hygiene</td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            Insurance Company:
                        <ul>
                                <li>Types of different company patients, class, and approval limit.</li>
                                <li>How to write Full UCAF or Medical Report justifying all requested services for outpatient or inpatient.</li>
                                <li>Covered & uncovered services according to patient’s company or class.</li>
                                <li>Direct contact with insurance doctor or approval office for any inquiries at any time</li>
                        </ul>
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                        <td class="">
                            <input type="text" id="" class="form-control">
                        </td>
                    </tr>
                </tbody>
            </table>


            <p class="terms my-4">
                I have been oriented to the Tawazun home health care and have been given the opportunity to ask questions on the above material. I understand the material presented to me.
            </p>


            <div class="row employee-signature my-4">
                <div class="col-6 row h-100">
                    <div class="col-6 h-100">Employee signature:</div>
                    <div class="col-6 h-100">
                        {{-- <input type="text" class="form-control"> --}}
                        <div class="singture-container">
                            <canvas id="first-signature-pad">
                        </div>
                        <button class="btn btn-danger" onclick="firstSignaturePad.clear()">Clear</button>
                    </div>

                </div>
                <div class="col-4 row align-items-center">
                    <div class="col-3">Date:</div>
                    <div class="col-9"><input type="date" class="form-control"></div>
                </div>
            </div>

            <p>Orientation of the new employee to the information listed above has been completed satisfactorily.  </p>

            <div class="employee-signature row my-4">
                <div class="col-6 align-items-center">
                    <div class="row">
                        <div class="col-6">Preceptor/Trainer Singture</div>
                        <div class="col-6">
                            {{-- <input type="text" class="form-control"> --}}
                            <div class="singture-container">
                                <canvas id="second-signature-pad">
                            </div>
                            <button class="btn btn-danger" onclick="secondSignaturePad.clear()">Clear</button>
                        </div>
                    </div>
                </div>
                <div class="col-4 row align-items-center">
                    <div class="row">
                        <div class="col-3">Date:</div>
                        <div class="col-9"><input type="date" class="form-control"></div>
                    </div>
                </div>
            </div>

            <div class="employee-signature row my-4">
                <div class="col-6 align-items-center">
                    <div class="row">
                        <div class="col-6">Director/Manager/ supervisor Signature</div>
                        <div class="col-6"><input type="text" class="form-control"></div>
                    </div>
                </div>
                <div class="col-4 row align-items-center">
                    <div class="row">
                        <div class="col-3">Date:</div>
                        <div class="col-9"><input type="date" class="form-control"></div>
                    </div>
                </div>
            </div>
            <table class="">
                <thead>
                    <tr>
                        <th>STAFF NAME & SIGNATURE</th>
                        <th>THHC MANAGER NAME & SIGNATURE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id=""></td>
                        <td><input type="text" class="form-control" id=""></td>
                    </tr>
                </tbody>
            </table>

            <div id="reportFooter" class="d-flex justify-content-end p-5 text-muted">F018-THHC ORIENTATION CHECKLIST</div>
        </div>



        <div class="my-3">
            <button class="btn btn-primary" onclick="toPDF()">PDF</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

    <script>

        function toPDF() {
            const { jsPDF } = window.jspdf;

            const reportHeader=document.getElementById("reportHeader");
            const reportBody=document.getElementById("reportContent");

            const doc=new jsPDF('p', 'px', [reportBody.offsetWidth+50,(reportBody.offsetHeight/reportBody.offsetWidth)+(reportBody.offsetWidth/2.16)]);

            doc.html(reportHeader,{
                callback: function (doc) {
                    doc.html(reportBody,{
                        callback: function (doc) {

                            var blob = doc.output('blob');
                            var formData = new FormData();
                            formData.append('pdf', blob);

                            $.ajax(
                            {
                                url:"{{route('report.store')}}",
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: formData,
                                cache       : false,
                                contentType : false,
                                processData : false,
                                success: function(data){
                                    alert('The file has been stored successfully');
                                    window.open(doc.output('bloburl'));
                                },
                                error: function(data){
                                    console.log(data);
                                    alert('File storage failed. Please try again !!!')
                                }
                            });

                        },
                        margin: [20,20,20,20],
                        autoPaging: 'text',
                        html2canvas: {
                            allowTaint: true,
                            dpi: 300,
                            letterRendering: true,
                            logging: true,
                            scale: 0.43,
                        },
                        x:0,
                        y:reportHeader.offsetHeight/2,
                    });
                },
                margin: [10,20,20,20],
                autoPaging: 'text',
                html2canvas: {
                    allowTaint: true,
                    dpi: 300,
                    letterRendering: true,
                    logging: true,
                    scale: 0.43,
                },
                x:0,
                y:0,
            });

        }

    </script>



    <script>

        const firstSignaturePad = new SignaturePad(
            document.querySelector("#first-signature-pad"),{
                backgroundColor: "#e5e5e5",
            });
        const secondSignaturePad = new SignaturePad(
            document.querySelector("#second-signature-pad"),{
                backgroundColor: "#e5e5e5",
            });


    </script>


</body>
</html>
