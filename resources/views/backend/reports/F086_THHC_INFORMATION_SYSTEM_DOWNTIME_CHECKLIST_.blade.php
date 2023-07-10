<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>F086-THHC INFORMATION SYSTEM DOWNTIME CHECKLIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> v
    <style>
        body{
            background: #b4b4b4a0;
        }
        .report-logo{
            max-width: 400px
        }
        table th,td{
            min-width: 80px;
            height:50px;
        }
    </style>

</head>
<body>

    <div class="container p-5 my-5 bg-light shadow rounded">

        <div id="reportForm">

            <div class="report-header d-flex align-items-center" id="reportHeader">
                <img src="{{ asset('assets/reports/logo.png') }}" class="report-logo" />
                <h4>
                    INFORMATION SYSTEM DOWNTIME CHECKLIST
                </h4>
            </div>

            {{-- <div class="page-break"></div> --}}

            <div id="reportDate" class="mt-5">
                <div class="d-flex align-items-center">
                    <div class="me-2"><label for="reportDate">Date: </label></div>
                    <input type="date" class="form-control" id="reportDate">
                </div>
            </div>

            <div id="reportSystemPlane" class="mt-5">
                <div class="d-flex align-items-center">
                    <label for="reportDate" class="me-2">System/Section down:</label>
                    <input type="radio" name="systemType" id="">&nbsp;€ planed
                    <span class="mx-2">or</span>
                    <input type="radio" name="systemType" id="">&nbsp;unplaned
                </div>
            </div>

            <div class="d-flex align-items-center mt-5">
                <label for="" class="me-2" style="min-width:250px">Departments/People affected:</label>
                <input type="text" class="form-control">
            </div>

            <div id="reportFirstRadiolist" class="mt-5">
                <table class="">
                    <thead>
                        <tr>
                            <th>YES</th>
                            <th>NO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="first_radiolist_first_statement" id=""></td>
                            <td><input type="radio" name="first_radiolist_first_statement" id=""></td>
                            <td>Downtime procedure was initiated effectively</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="first_radiolist_second_statement" id=""></td>
                            <td><input type="radio" name="first_radiolist_second_statement" id=""></td>
                            <td>Alternate documentation and downtime process was effective</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="first_radiolist_third_statement" id=""></td>
                            <td><input type="radio" name="first_radiolist_third_statement" id=""></td>
                            <td>Hard copy of schedule was available for next few days</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="first_radiolist_fourth_statement" id=""></td>
                            <td><input type="radio" name="first_radiolist_fourth_statement" id=""></td>
                            <td>Hard copy of forms was available </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="first_radiolist_fifth_statement" id=""></td>
                            <td><input type="radio" name="first_radiolist_fifth_statement" id=""></td>
                            <td>Alternate communication was implemented effectivel</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex align-items-center mt-4">
                    <label for="" class="me-2 text-decoration-underline" style="min-width:250px">Comments:</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div id="reportSecondRadiolist" class="mt-5">
                <table class="">
                    <thead>
                        <tr>
                            <th>YES</th>
                            <th>NO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="second_radiolist_first_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_first_statement" id=""></td>
                            <td>All information was captured and/or saved appropriately </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_second_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_second_statement" id=""></td>
                            <td>There was a defined process for newly scheduled patients </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_third_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_third_statement" id=""></td>
                            <td>Patient registrations and authorizations were performed  </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_fourth_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_fourth_statement" id=""></td>
                            <td>Correct data was documented in hard copy by business staff </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_fifth_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_fifth_statement" id=""></td>
                            <td>Correct data was documented in hard copy by clinical staff</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_sixth_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_sixth_statement" id=""></td>
                            <td>Insurance card photocopies were made for later scanning </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex align-items-center mt-4">
                    <label for="" class="me-2 text-decoration-underline" style="min-width:250px">Comments:</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div id="reportSecondRadiolist" class="mt-5">
                <table class="">
                    <thead>
                        <tr>
                            <th>YES</th>
                            <th>NO</th>
                            <th class="text-center">“THIS WAS A TEST”</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="second_radiolist_first_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_first_statement" id=""></td>
                            <td>Reinstatement of system was effective and completed in a timely manner.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_second_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_second_statement" id=""></td>
                            <td>Physician office interactions were appropriate (case confirmation)</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="second_radiolist_third_statement" id=""></td>
                            <td><input type="radio" name="second_radiolist_third_statement" id=""></td>
                            <td>All needed patient data was transferred to software after downtime</td>
                        </tr>

                    </tbody>
                </table>
                <div class="d-flex align-items-center mt-4">
                    <label for="" class="me-2 text-decoration-underline" style="min-width:250px">Comments:</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="d-flex align-items-center mt-4">
                <label for="" class="me-2 text-decoration-underline" style="min-width:250px">Action plane:</label>
                <input type="text" class="form-control">
            </div>

            <div class="d-flex align-items-center mt-4">
                <label for="" class="me-2 text-decoration-underline" style="min-width:250px">Signed:</label>
                <input type="text" class="form-control">
            </div>

            <div id="reportFooter" class="mt-4 p-4 d-flex justify-content-end w-100 text-muted">
                F086-THHC INFORMATION SYSTEM DOWNTIME CHECKLIST
            </div>

        </div>

        <div class="my-3">
            <button class="btn btn-primary" onclick="toPDF()">jsPDF</button>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>

        function toPDF(){
            const { jsPDF } = window.jspdf;

            const reportBody=document.getElementById("reportForm");

            const doc=new jsPDF('p','px',[reportBody.offsetWidth+50,(reportBody.offsetHeight/reportBody.offsetWidth)+(reportBody.offsetWidth/2.16)]);

            doc.html(reportBody, {
                callback: function(doc) {
                    var blob = doc.output('blob');
                            var formData = new FormData();
                            formData.append('pdf', blob);

                            $.ajax('/report/story',
                            {
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
                margin:[0 ,20,20,20],
                html2canvas: {
                    allowTaint: true,
                    dpi: 300,
                    letterRendering: true,
                    logging: true,
                    scale: 0.43,
                },
                autoPaging: 'text',
                x: 15,
                y: 15,
                width:reportBody.offsetWidth
            });
        }
    </script>

</body>
</html>











