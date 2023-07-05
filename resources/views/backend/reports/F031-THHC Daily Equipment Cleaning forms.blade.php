<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAWAZUN HOME HEALTH CARE DEPARTMENT</title>
    <!-- Add the Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Add custom styles */
        body {
            background: linear-gradient(to bottom right, #acebf8, #6048ea);
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
<body>
    <div class="container " id="content">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="jumbotron" id="content">
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="dropdown d-flex justify-content-center">  
                                <p>Doctor name:</p>
                                <select class="form-control col-md-4">
                                    <option value=""></option>

                                    @foreach($doctors as $doctor)
                                        <option value="{{$doctor}}">{{$doctor}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                            <div class="col-md-6 mb-5">
                                <div class="dropdown">
                                    <div class="d-flex justify-content-center">
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
                    
                    <div class="text-center pb-2">
                        <h1>TAWAZUN HOME HEALTH CARE DEPARTMENT</h1>
                    </div>
                    <div class="text-center pb-2">
                        <h3><u>Accu-chek glucometer</u></h3>
                    </div>
                    <div class="row py-1">
                        <label class="col-md-2">EQUIPMENT :</label>
                        <input type="text" class="form-control col-md-3">
                    </div>
                    <div class="row py-1">
                        <label class="col-md-2">SERIAL NO.</label>
                        <input type="text" class="form-control col-md-3">
                    </div>
                    <div class="row py-1">
                        <label class="col-md-2 pb-4">MONTH OF :</label>
                        <input type="text" class="form-control col-md-3">
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border">DATE</th>
                                <th class="border border-right">CLEANING DONE (TIME)</th>
                                <th class="border border-right">SIGN AND BADGE</th>
                                <th class="border border-right">REMARKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (range(1, 30) as $index)
                            <tr>
                                <td class="border">{{$index}}</td>
                                <td class="border border-right"><input type="text" class="form-control"></td>
                                <td class="border border-right"><input type="text" class="form-control"></td>
                                <td class="border border-right"><input type="text" class="form-control"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button id="submit-pdf" class="mt-5">Dawnload PDF</button> 
                </div>
            </div>
        </div>
    </div>

    <script>
        const button = document.querySelector('#submit-pdf');
        button.addEventListener('click', function(event) {
            event.preventDefault();
            window.jsPDF = window.jspdf.jsPDF;
            var element = document.getElementById('content');
            html2canvas(element, {
                scale: .75,
                letterRendering: true,
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var imgData = canvas.toDataURL('image/jpeg', 1.0);
                var pdf = new jsPDF('p', 'pt', 'a1');
                pdf.addImage(imgData, 'JPEG', 0, 0, canvas.width, canvas.height);
                pdf.save('TAWAZUN.pdf');

                // Create a Blob object from the PDF data
                var blob = new Blob([pdf.output('blob')], { type: 'application/pdf' });

                // Create a FormData object and append the PDF data
                var formData = new FormData();
                formData.append('pdf', blob, 'TAWAZUN.pdf');

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