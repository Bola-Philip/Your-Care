<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>

    * {
        font-weight: bold ;
    }

    label {
        font-size: 15px ;
        margin: 0px !important ;
    }
    input {
        outline: none  !important;
    }
    .container {
        background:  whitesmoke ;
        max-width: 100% ;
    }
    header {
        display: flex ;
        justify-content: flex-start ;
        align-items: center ;
        gap: 50px;
    }
    header h5 {
        /* margin: 0px 10%; */
        font-size: 15px
    }
    header img {
        width: 23%;
         /* margin-left: 6%;  */
    }

    header div select {
        width:  100% !important;
    }


    .hr {
        width: 72%;
        background: black;
        height: 5px ;
        margin: 0px auto;
    }

    .data_container {
        /* margin: 19px 14%; */
        /* margin: 19px 8%; */
        width: 97%;
    margin: 0px auto;
    }

    form {
         /*  margin: 18px 16%; */
    }

    form input {
        border: none !important ;
        border-bottom: 2px dashed black !important ;
        background-color: transparent !important ;
        /* height: 23px; */
      
    }


    table input {
        border: none !important ;
        background-color: transparent !important ;
    }
    table input:not(.BODGE , .NAME ) {
        width: 100%  ;
        font-size: 11px ;
        text-align: center;

    }
    .BODGE  {
        width:  100%;
    }
    .NAME {
        width: 100%;
    }
    .BODGE , .NAME {

    font-size: 11px;
    text-align: center;
    }

    


    table {
        width: 100%;
        margin: 0px auto ;
        border-collapse: collapse ; 
    }


    table thead {
        background : #3ac2ba ;
    }
    table thead  th  ,    table tbody td  {
        text-align: center  ;
    }
 
    table thead  th ,  table tbody td {
      
        padding: 2px 5px   ;
        border : 1px solid black ;
    }

    .td_name {
        width: 130px;
    }
    .td_bodge {
        width: 90px;
    }
    td:not(.td_name  ,  .td_bodge  ) {
        width: 45px;
    }
    .d-c {
        text-align: left  ;
        width: 308px ;
    }

    .year-field {
        width: 51px;
        height: 49px;
        background: transparent;
        border: none;
        outline: none;
    }

    .comment-field {
        width : 80% ;
        background: transparent;
        border: none;
        outline: none;
        resize : none 
    }

    .btn-Export-Pdf {
        display: block ;
        position: absolute;
         right: 10px;
         top: 20px;
        transition: 0.3s ;
    }
    .btn-Export-Pdf:hover {
        scale: 1.2 ;
        rotate: 10deg ;
        background : #ff00c4;
    }
</style>

  
<link rel="preload" href="{{ asset('images/logo.png')  }}" as="image">

<body>


        <div class="container" id = "myDiv">
                <button class="btn btn-primary btn-Export-Pdf">Export PDF</button>

                <header>
                    <img src="{{ asset('images/logo.png')  }}" alt="">

                    <div>
                            <label for="select_doctor"> doctor name</label>
                            <select class="form-select" aria-label="Default select example" id="select_doctor">
                                <option selected>Select a  Doctor</option>
                                    @foreach ($doctors  as $doctor)
                                         <option value="{{ $doctor }}"> {{ $doctor }}</option>
                                    @endforeach
                             </select>
                    </div>
                 
                    <h5> VACATION PLAN FORM </h5>
                    <div>
                        <label for="select_patiant"> patient name</label>
                        <select class="form-select" aria-label="Default select example" id="select_patiant">
                            <option selected>Select a  patient</option>
                            @foreach ($patients  as $patient)
                                 <option value="{{ $patient }}"> {{ $patient }}</option>
                            @endforeach
                     </select>
                </div>
                  
            </header>
                <br>
                <div class="hr" > </div>

                    <div class="data_container">
                        <form>

                            <div class="mb-1">
                                <label  class="form-label">YEAR : </label>
                                <input type="number" id="year-input" name="year" min="1900" max="2100" pattern="\d{4}" placeholder="YYYY">
                           </div>
                          </form>
                          <table id="table">
                            <thead>
                                    <tr>
                                        <th> BADGE  </th>
                                        <th>  NAME </th>

                                        <th> JAN</th>
                                        <th> FEB</th>
                                        <th>MAR </th>
                                        <th> APR </th>

                                        <th> MAY</th>
                                        <th> JUN </th>
                                        <th> JUL </th>
                                        <th>  AUG</th>

                                        <th> SEP </th>
                                        <th>  OCT</th>
                                        <th> NOV </th>
                                        <th>  DEC</th>
                                    
                                    </tr>
                            </thead>
                          
                            <tbody>
                                @for ( $i = 1 ; $i <= 25 ; $i++)
                                        <tr>
                                            <td class="td_bodge"> <input type="text" class="BODGE"> </td>
                                            <td class="td_name"> <input type="text" class="NAME">  </td>
                                            <td> <input type="text"> </td>
                                            <td> <input type="text">  </td>

                                            <td> <input type="text">  </td>
                                            <td> <input type="text"> </td>
                                            <td> <input type="text">  </td>
                                            <td> <input type="text">  </td>

                                            <td> <input type="text"> </td>
                                            <td> <input type="text">  </td>
                                            <td> <input type="text">  </td>
                                            <td> <input type="text">  </td>

                                            <td> <input type="text"> </td>
                                            <td> <input type="text"> </td>
                                      
                                        </tr>
                                 @endfor            
                            </tbody>
                      </table>
                       
                      <p style="text-align: right ;">F063-THHC vacation plan Form</p>
                    </div>


               

        </div>

     
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> 

<script>
        // Initialize jsPDF
        // var doc = new jsPDF();
        // var html = $('#table').html();
    
     

        $(document).ready ( function () {
            $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } });
            $("input , textarea").on("change" , function () {
            $(this).attr('value',  $(this).val()) ;
        }) ;
      
        $("select").on("change" , function (event) {
            const selectedOptionValue = $(this).val();
            $(this).find("option").each(function() {
            if ($(this).val() === selectedOptionValue) {
                $(this).attr("selected", true);
            } else {
                $(this).attr("selected", false);
            }
            });
            }) ;


            $(".btn-Export-Pdf").on("click" , function () {
                $(this).hide() ;
                var options = {
                margin:       [15, 0],
                filename:     'myPDF.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { dpi: 192, letterRendering: true },
                jsPDF:        { unit: 'pt', format: 'letter', orientation: 'portrait' }
                };
                var html = $('#myDiv').html();
                const filename = 'documento.pdf';

                // Get the HTML content of the div
                var html = $('#myDiv').html();
                // Use html2pdf to generate the PDF
                html2pdf()
                .set({
                    filename,
                    // other options...
                })
                .from(html)
                .toPdf()
                .save()
                .output('datauristring')
                .then(function(pdfBase64) {
                    const file = new File(
                        [pdfBase64],
                        filename,
                        {type: 'application/pdf'}
                    ); 
                    const formData = new FormData();
                    formData.append("file", file );
                    $.ajax({
                        method : "post" ,
                        url: "{{route('report.store')}}",
                        data: formData ,
                        contentType: false,
                          processData: false,
                          dataType: 'json',
                    success: function (result) {
                        console.log(` done :    ${result}`);
                    } ,
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(` error , ${errorThrown} ,   / Status  :   , ${textStatus} `);
                    }
                    });

                });         

                $(this).show() ;
            })
        });
     
</script>



</html>