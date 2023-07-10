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
        max-width: 92%;
    }
    header {
        display: flex ;
        justify-content: flex-start ;
        align-items: center ;
        gap: 10px;
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
        margin: 19px 8%;
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
         right: 90px;
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
                                <label > doctor name</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select a  Doctor</option>
                                        @foreach ($doctors  as $doctor)
                                             <option value="{{ $doctor }}"> {{ $doctor }}</option>
                                        @endforeach
                                 </select>
                        </div>
                     
                        <h5>SUPERVISORY VISIT DRIVER</h5>
                        <div>
                            <label  > patient name</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select a  patient</option>
                                @foreach ($patients  as $patient)
                                     <option value="{{ $patient }}"> {{ $patient }}</option>
                                @endforeach
                         </select>
                    </div>
                      
                </header>
                <div class="hr" > </div>

                    <div class="data_container">
                        <form>
                            <div class="mb-1">
                              <label for="example1" class="form-label">StaffName: </label>
                              <input type="text" class="form-control" name="myInput"  id="example1">
                           
                            </div>
                            <div class="mb-1">
                              <label for="example2" class="form-label">Badge: </label>
                              <input type="text" class="form-control" id="example2">
                            </div>
    
                            <div class="mb-1">
                                <label for="example3" class="form-label">Date : </label>
                                <input type="datetime-local" class="form-control" id="example3">
                           </div>
                          </form>

                          <table id="table">
                                <thead>
                                        <tr>
                                            <th> MEETS CRITERIA </th>
                                            <th> Y </th>
                                            <th> N </th>
                                            <th> COMMENTS </th>
                                        </tr>
                                </thead>

                                <tbody>
                                            <tr>
                                                <td class="d-c"> 1. Organized visits i.e., car fueled; Calls made to patient/family. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                                 <td> 
                                                     {{-- <textarea  resi name="Organized" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>   

                                            <tr>
                                                <td class="d-c"> 2. Available when nurse is ready to leave.  </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> 
                                                     {{-- <textarea name="Available" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control" >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 3. Drives safety. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> 
                                                     {{-- <textarea name="Drives" id="" cols="30" rows="2" class="comment-field" > </textarea> --}}
                                                     <input type="text" class="form-control" >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 4. Stays with nurse during visit. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> 
                                                     {{-- <textarea name="Stays" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control" >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 5. Translates information between patient/family and nurse. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                             <td> 
                                                     {{-- <textarea name="Translates" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 6. Respectful to patient/family/careers.</td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                              <td> 
                                                     {{-- <textarea name="Respectful" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 7. Identifies new problems/lack of progress. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                              <td> 
                                                     {{-- <textarea name="Identifies" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-c"> 8. Acknowledges patient rights. </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                         <td> 
                                                     {{-- <textarea name="Acknowledges" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="d-c"> 9. Acknowledges patient safety issues.  </td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> <input type="text" class="year-field "></td>
                                                <td> 
                                                     {{-- <textarea name="Acknowledges" id="" cols="30" rows="2" class="comment-field" ></textarea> --}}
                                                     <input type="text" class="form-control"  >
                                                </td>
                                            </tr>


                                </tbody>
                          </table>
                       
                    </div>
                    <div class="hr" > </div>

                    <div class="data_container">
                        <form>
                            <div class="mb-1">
                              <label for="example4" class="form-label">Other Comments: </label>
                              <input type="text" class="form-control" id="example4" aria-describedby="emailHelp">
                           
                            </div>
                            <div class="mb-1">
                              <label for="example5" class="form-label">THHC MANAGER Signature:  </label>
                              <input type="text"  id="example5" style="margin-left : 10px ;">
                            </div>
    
                            <div class="" >
                                <label   class="form-label">
                                    *Not done =2 *Fair =3   *Good =4 *Excellent =5
                                    <br>
                                      91-100 Excellent // 81-90 Superior // 71-80 Good // 61-70 Fair // 50-60 Poor  
                                </label>
                           </div>
                          </form>


                       
                    </div>

               

        </div>

     
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> 

<script>


        $(document).ready ( function () {
            $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } });

            $("input , select  ").on("change" , function () {
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