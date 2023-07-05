<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <title>F057-THHC Consent to Photograph and or Video Record</title>
    <!-- Add the Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://unpkg.com/signature_pad"></script>
    <style>
        /* Add custom styles */
        body {
            background: linear-gradient(to bottom right, #4CAF50, #008CBA);
            color: #fff;
        }
        .jumbotron {
            background-color: rgba(255,255,255,0.5);
            color: #000;
        }
        .h-screen {
            height: 100%;
        }
    </style>
</head>
<body id="body">
    <div class="container " id="content">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="navbar navbar-expand-lg navbar-light bg-none">
                    <a class="navbar-brand" href="#">THHC Consent to Photograph and or Video Record</a>
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="dropdown">
                                <div>
                                    <p>Doctor name:</p>
                                    <select class="form-control col-md-4">
                                        <option value=""></option>

                                        @foreach($doctors as $doctor)
                                            <option value="{{$doctor}}">{{$doctor}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6 mb-5">
                                <div class="dropdown">
                                    <div>
                                        <p>Patient name:</p>
                                        <select class="form-control col-md-4">
                                            <option value=""></option>

                                            @foreach($patients as $patient)
                                                <option value="{{$patient}}">{{$patient}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <p>I consent to be photographed in either of the following; video or still photography, in digital or any other format and any other means of recording or reproducing images and authorize the use or disclosure of such photograph(s) in order to assist scientific, treatment, educational, public relations, marketing, news media and charitable goals. 
                                I hereby waive any right to compensation for such uses by reason of the foregoing authorization. 
                                I hereby hold the tawazun home health care, its employees, my physician(s) and any other person participating in my care harmless from and against any claim for compensation resulting from the activities authorized by this agreement. 
                            </p>
                        </div>
                            <div class="col-md-6 text-right" dir="rtl">
                                <p dir="rtl" style="font-family: Arial, sans-serif;">
                                   أﻋطﻲ ﻣواﻓﻘﺗﻲ ﻋﻠﻰ ﺗﺻوﯾري  ﺑﺈﺣدى اﻟطرﯾﻘﺗﯾن اﻟﺗﺎﻟﯾﺗﯾن؛ ﺗﺻوﯾر اﻟﻔﯾدﯾو أو اﻟﺗﺻوﯾر اﻟﻔوﺗوﻏراﻓﻲ، ﺳوآءا اﻟﺗﺻوﯾر اﻟرﻗﻣﻲ أو ﻏﯾره ﺑﺄي وﺳﯾﻠﺔ أﺧرى ﻟﻠﺗﺳﺟﯾل أو إﻋﺎدة إﻧﺗﺎج اﻟﺻور و اواﻓق ﻋﻠﻰ اﺳﺗﻌﻣﺎل ھذه اﻟﺻور أو اﻟﺗﺳﺟﯾﻼت ﻓﻲ الأعلانات أو المواضيع التعليمية ، العلمية  ،  اﻟﻌﻼﺟﯾﺔ، اﻟﻌﻼﻗﺎت اﻟﻌﺎﻣﺔ واﻟﺗﺳوﯾق ووﺳﺎﺋل اﻹﻋﻼم أو اﻷھداف اﻟﺧﯾرﯾﺔ.
                                    ﺑﻣوﺟب ھذا أﻧﺎ أدرك أﻧﮫ ﻟﯾس ﻟﻲ اﻟﺣق ﻓﻲ اﻟﻣطﺎﻟﺑﺔ ﺑﺄي ﺗﻌوﯾض ﻓﻲ ﺣﺎل اﺳﺗﻌﻣﺎل ھذه اﻟﺻور أو اﻟﺗﺳﺟﯾﻼت.
                                    ﺑﻣوﺟب ھذا اﻻﺗﻔﺎق اﻧﺎ اﺧﻠﻲ ﻣﺳؤوﻟﯾﺔ قسم توازن للرعاية الطبية المنزلية وﻣوظﻔﯾﮫ واﻷطﺑﺎء وأي ﺷﺧص آﺧر ﻣﺷﺎرك ﻓﻲ رﻋﺎﯾﺗﻲ ﻣن أي ﻣطﺎﻟﺑﺔ ﺑﺎﻟﺗﻌوﯾض ﻋن اﻷﻧﺷطﺔ اﻟﺗﻲ أذﻧت ﺑﮭﺎ ﻓﻲ ھذا اﻻﺗﻔﺎق. 
    
                                </p>
                            </div>
                    </div>


                    {{-- patient --}}


                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="">
                                <label >Signature of Patient/Legal Guardian/Responsible Family member: </label>
                                <canvas id="signatureCanvas" width="300" height="70" class="border"></canvas>
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class=" text-right">
                                        <label class="text-right" >توقيع المريض/ولي الأمر: </label><br>
                                        <canvas id="signatureCanvas_ar" width="300" height="70" class="border float-start"></canvas>
                                    </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="date" class="col-md-4">Date and Time:  </label>
                                <input type="date" class="form-control col-md-6" id="date">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4 ">
                                    <label for="date" class="col-md-4 text-right">التاريخ والوقت:  </label>
                                    <input type="date" class="form-control col-md-6" id="date_ar">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="id_no" class="col-md-4">ID Number: </label>
                                <input type="text" class="form-control col-md-6" id="id_no">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4 ">
                                    <label for="id_no" class="col-md-4 text-right">رﻗم اﻟﮭوﯾﺔ: </label>
                                    <input type="text" class="form-control col-md-6" id="id_no_ar">
                                </div>
                            </div>
                    </div>


                    {{-- witness 1 --}}


                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <p class="font-weight-bold pt-1 ">Witness 1:</p>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <p class="row font-weight-bold text-right">الشاهد 1:</p>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="">
                                <label>Signature: </label>
                            <br>
                                <canvas id="signature_witnesFirst" width="300" height="70" class="border"></canvas>
                            </div><br>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="text-right">
                                    <label>اﻟﺗوﻗﯾﻊ: </label><br>
                                    <canvas id="signature_witnesFirst_ar" width="300" height="70" class="border block"></canvas>
                                </div><br><br>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row ">
                                <label for="wintness_name" class="col-md-4">Name: </label>
                                <input type="text" class="form-control col-md-6"  id="wintness_name">
                            </div>
                        </div>
                            <div class="col-md-6 text-right" dir="rtl">
                                <div class="row ">
                                    <label for="wintness_name" class="col-md-4 text-right">اﻻﺳم: </label>
                                    <input type="text" class="form-control col-md-6" id="wintness_name_ar">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="wintness_date" class="col-md-4">Date:  </label>
                                <input type="date" class="form-control col-md-6"  id="wintness_date">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4 ">
                                    <label for="wintness_date" class="col-md-4 text-right">اﻟﺗﺎرﯾﺦ:  </label>
                                    <input type="date" class="form-control col-md-6" id="wintness_date_ar">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="wintness_id" class="col-md-4">ID Number:  </label>
                                <input type="text" class="form-control col-md-6" id="wintness_id">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4">
                                    <label for="wintness_id" class="col-md-4 text-right">الرﻗم اﻟوظيفي:  </label>
                                    <input type="text" class="form-control col-md-6" id="wintness_id_ar">
                                </div>
                            </div>
                    </div>



                    {{-- witness 2 --}}


                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <p class="font-weight-bold pt-4 ">Witness 2:</p>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <p class="row font-weight-bold pt-4 ">الشاهد 2:</p>
                            </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="">
                                <label class="">Signature: </label>
                            <br>
                                <canvas id="signature_witnesSecond" width="300" height="70" class="border"></canvas>
                            </div><br>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="text-right">
                                    <label class="text-right" >اﻟﺗوﻗﯾﻊ: </label><br>
                                    <canvas id="signature_witnesSecond_ar" width="300" height="70" class="border"></canvas>
                                </div><br><br>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="wintness_name_2" class="col-md-4">Name: </label>
                                <input type="text" class="form-control col-md-6" id="wintness_name_2">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-3">
                                    <label for="wintness_name_2" class="col-md-4 text-right">اﻻﺳم: </label>
                                    <input type="text" class="form-control col-md-6" id="wintness_name_2_ar">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="wintness_date_2" class="col-md-4">Date:  </label>
                                <input type="date" class="form-control col-md-6" id="wintness_date_2">
                            </div>
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4">
                                    <label for="wintness_date_2" class="col-md-4 text-right">اﻟﺗﺎرﯾﺦ:  </label>
                                    <input type="date" class="form-control col-md-6" id="wintness_date_2_ar">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" dir="ltr">
                            <div class="row pt-4">
                                <label for="wintness_id_2" class="col-md-4">ID Number:  </label>
                                <input type="text" class="form-control col-md-6" id="wintness_id_2">
                            </div>  
                        </div>
                            <div class="col-md-6" dir="rtl">
                                <div class="row pt-4">
                                    <label for="wintness_id_2" class="col-md-4 text-right">الرﻗم اﻟوظيفي:  </label>
                                    <input type="text" class="form-control col-md-6" id="wintness_id_2_ar">
                                </div>  
                            </div>
                    </div>

                    
                    <button id="submit-pdf" class="mt-5">Dawnload PDF</button>      
                </div>
                
                
            </div>
        </div>
    </div>
    
    <script type="text/javascript">

        // handel signaturPad 

        const signaturePad = new SignaturePad(document.getElementById('signatureCanvas'));
        const signaturePad_witnesFirst = new SignaturePad(document.getElementById('signature_witnesFirst'));
        const signaturePad_witnesSecond = new SignaturePad(document.getElementById('signature_witnesSecond'));

        const signaturePad_ar = new SignaturePad(document.getElementById('signatureCanvas_ar'));
        const signaturePad_witnesFirst_ar = new SignaturePad(document.getElementById('signature_witnesFirst_ar'));
        const signaturePad_witnesSecond_ar = new SignaturePad(document.getElementById('signature_witnesSecond_ar'));
        
        // handel button click 

        const button = document.querySelector('#submit-pdf');
        
        button.addEventListener('click', function(event) {
            event.preventDefault();
            window.jsPDF = window.jspdf.jsPDF;
            var element = document.getElementById('content');
            html2canvas(element, {
                scale: .50,
                letterRendering: true,
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var imgData = canvas.toDataURL('image/jpeg', 1.0);
                var pdf = new jsPDF('p', 'pt', 'a4');
                pdf.addImage(imgData, 'JPEG', 0, 0, canvas.width, canvas.height);
                pdf.save('myfile.pdf');

                // Create a Blob object from the PDF data
                var blob = new Blob([pdf.output('blob')], { type: 'application/pdf' });

                // Create a FormData object and append the PDF data
                var formData = new FormData();
                formData.append('pdf', blob, 'myfile.pdf');

                // Send the PDF data through an AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/report.store');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        console.log('PDF data sent successfully:', xhr.responseText);
                    }
                };
                xhr.send(formData);
            }).catch(function(error) {
                console.log('Error:', error);
            });
        });
	
		
      </script>

      <!--JavaScript library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
</body>
</html>