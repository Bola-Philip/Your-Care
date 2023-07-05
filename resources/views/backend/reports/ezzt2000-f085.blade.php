<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>F085</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <form method="post" action="{{route('report.store')}}">
        @csrf
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Text</th>
                        <th>Text</th>
                        <th>Text</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label class="form-label">Orientee Name</label></td>
                        <td><input class="form-control" type="text" style="margin-left: 10px;margin-right: 1px;"></td>
                        <td>Employee</td>
                        <td><input class="form-control" type="text"></td>
                        <td>Date of Hire</td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td><label class="form-label" style="padding-top: 14px;">Assigned preceptor</label></td>
                        <td><input class="form-control" type="text" style="margin-right: 6px;margin-left: 10px;margin-top: 11px;"></td>
                        <td style="padding-left: 19px;padding-top: 16px;">Unit</td>
                        <td><input class="form-control" type="text" style="margin-top: 11px;"></td>
                        <td style="padding-left: 19px;margin-top: -1px;padding-top: 14px;">Date</td>
                        <td><input class="form-control" type="text" style="margin-top: 11px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Instructions:</h2>
        <ul>
            <li class="fs-5">This form shall be filled by the preceptor and discussed with the Orientee whose comments should be added.</li>
            <li class="fs-5">Experienced staff shall be oriented for 6 weeks.</li>
            <li class="fs-5">Evaluate clinical performance by using the following legend:</li>
        </ul>
        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Evaluate clinical " value="Excellent"><label class="form-check-label" for="formCheck-1">Excellent</label></div>
        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="Evaluate clinical " value="Satisfactory"><label class="form-check-label" for="formCheck-2">Satisfactory</label></div>
        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Evaluate clinical " value="Needs Improvement"><label class="form-check-label" for="formCheck-3">Needs Improvement</label></div>
        <div class="table-responsive" style="text-align: center;">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="table-info" colspan="2">Evaluation Criteria&nbsp;</td>
                        <td>Date:<input class="form-control" type="date" style="margin-left: 7px;"></td>
                        <td>Date:<input class="form-control" type="date" style="margin-left: 16px;"></td>
                        <td>Date:<input class="form-control" type="date" style="margin-left: 8px;padding-left: 0px;"></td>
                    </tr>
                    <tr>
                        <td>Text</td>
                        <td>Knowledge</td>
                        <td><input class="form-control m-auto" type="text" style="margin-top: 6px;margin-left: 6px;margin-right: 6px;margin-bottom: 6px;"></td>
                        <td><input class="form-control mx-auto" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Clinical skills</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>professional behavior</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>patient performance</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Safe performance</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Time management</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Collaboration</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>level of involvement in learning</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Confident</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Eager</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Argumentative</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Coping</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td>Arrives to work on time</td>
                        <td>Text</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Orientee signature</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Preceptor signature</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2">THHC Manager signature</td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive" style="text-align: center;">
            <table class="table">
                <tbody>
                    <tr class="table-info">
                        <td class="table-info">Objectives(Identified on the 1st day by CBO review)</td>
                        <td class="table-info">Goals achieved</td>
                        <td class="table-info">Areas of improvement for orientee</td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                    </tr>
                    <tr class="table-info">
                        <td>Objectives (2nd week)</td>
                        <td>Goals achieved</td>
                        <td>Areas of improvement for orientee</td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control" style="color: var(--bs-body-color);"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                    </tr>
                    <tr class="table-info">
                        <td>Objectives (on the 4th week)</td>
                        <td>Goals achieved</td>
                        <td>Areas of improvement for orientee</td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                    </tr>
                    <tr class="table-info">
                        <td>Objectives (on the 6th week)</td>
                        <td>Goals achieved</td>
                        <td>Areas of improvement for orientee</td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                        <td><textarea class="form-control"></textarea></td>
                    </tr>
                    <tr class="table-info"></tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive" style="text-align: center;">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Has the orientee completed competencies and can work independently</td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="answer" value="yes"><label class="form-check-label" for="formCheck-10">Yes</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="answer" value="no"><label class="form-check-label" for="formCheck-4">No</label></div>
                        </td>
                    </tr>
                    <tr>
                        <td>if the answer is No for the above question</td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5" name="reason"><label class="form-check-label" for="formCheck-5">Assign new preceptor</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8" name="reason"><label class="form-check-label" for="formCheck-8">Extend the orientation period (define specific period):</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7" name="reason"><label class="form-check-label" for="formCheck-7">Start additional evaluation form</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6" name="reason"><label class="form-check-label" for="formCheck-6">Specify the learning needs for the extended period</label></div>
                        </td>
                    </tr>
                    <tr>
                        <td>learning needs for the extended orientation period:</td>
                        <td><textarea class="form-control" name="needs"></textarea> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive" style="text-align: center;">
            <table class="table">
                <tbody>
                    <tr class="table-info" style="text-align: center;color: var(--bs-table-color);">
                        <td><span style="color: rgb(0, 0, 0); background-color: rgb(207, 244, 252);">Orientee signature</span></td>
                        <td><span style="color: rgb(0, 0, 0); background-color: rgb(207, 244, 252);">Preceptor</span></td>
                        <td><span style="color: rgb(0, 0, 0); background-color: rgb(207, 244, 252);">THHC Head</span></td>
                        <td><span style="color: rgb(0, 0, 0); background-color: rgb(207, 244, 252);">Clinical Educator</span></td>
                    </tr>
                    <tr>
                        <td><canvas id="signature-canvas" width="500" height="200" style="border:1px solid #000000;"></canvas></td>
                        <script>
                            var canvas = document.getElementById("signature-canvas");
                            var ctx = canvas.getContext("2d");
                            var isDrawing = false;
                            var lastX = 0;
                            var lastY = 0;
                            
                            canvas.addEventListener("mousedown", function(event) {
                              isDrawing = true;
                              lastX = event.offsetX;
                              lastY = event.offsetY;
                            });
                            
                            canvas.addEventListener("mousemove", function(event) {
                              if (isDrawing) {
                                ctx.beginPath();
                                ctx.moveTo(lastX, lastY);
                                ctx.lineTo(event.offsetX, event.offsetY);
                                ctx.stroke();
                                lastX = event.offsetX;
                                lastY = event.offsetY;
                              }
                            });
                            
                            canvas.addEventListener("mouseup", function(event) {
                              isDrawing = false;
                            });
                          </script>
                <br>
                <input>
                        </td>
                        <td><input class="form-control" type="text" name="Preceptor"><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text" name="THHC Head"><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text" name="Clinical Educator"><input class="form-control" type="text"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <input class="btn btn-primary" type="submit" class="btn btn-primary" onclick="convertToPDF()">
        <script>
            function convertToPDF() {
                html2canvas(document.body).then(function(canvas) {
                    var imgData = canvas.toDataURL('image/png');
                    var doc = new jsPDF();
                    doc.addImage(imgData, 'PNG', 0, 0);
                    doc.save('form.pdf');
                });
            }
        </script>
    </form>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>