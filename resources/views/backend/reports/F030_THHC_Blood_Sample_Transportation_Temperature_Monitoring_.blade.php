<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1256">
    <style>
        .input {
            border: 0;
            outline: 0;
            border-bottom: 1px solid black;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .input-table {
            border: 0;
            outline: 0;
        }
      .submit-btn {
            margin: 10px;
            width: 80px;
            height: 40px;
            background: green;
        }
    </style>

</head>

<body>
<?php
$ptNames=['','ptName1','ptName2','ptName3','ptName4','ptName5'];
$temps=['','temp1','temp2','temp3','temp4','temp5'];
$mrns=['','mrn 1','mrn 2','mrn 3','mrn 4','mrn 5'];
$timeOuts=['','Time Out 1','Time Out 2','Time Out 3','Time Out 4','Time Out 5'];
$temps=['','Temp 1','Temp 2','Temp 3','Temp 4','Temp 5'];
$initialeBadges=['','Initials / Badge 1','Initials / Badge 2','Initials / Badge 3','Initials / Badge 4','Initials / Badge 5'];

$months=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$nurseNames=['Nurse Name1','Nurse Name2','Nurse Name3','Nurse Name4','Nurse Name5'];
?>
    <div style="margin-top: 50px;" id="dvContainer">

        <p style='text-indent:54.0pt'>
            <span>Nurse Name: 
                        <select class="input" name="nurseName" style="width:220px;appearance:none;text-align:center">
                                @foreach ($nurseNames as $key=>$nurseName)
                                    <option value="{{ $nurseName }}"
                                        @if ($key == '0') selected @endif>
                                        {{ $nurseName }}
                                    </option>
                                @endforeach
                            </select>
            </span>
            <span> Badge No: <input class="input" type="number" style="width:220px;">
            </span>
            <span>Month:      
            <select class="input" name="month" style="width:220px;appearance:none;text-align:center">
                                @foreach ($months as $key=>$month)
                                    <option value="{{ $month }}"
                                        @if ($key == '0') selected @endif>
                                        {{ $month }}
                                    </option>
                                @endforeach
                            </select>
            </span>

        </p>

        <table style="width: 90%;" id="table">

            <tr style="background-color: #3ac2ba;">
                <th style="width: 10%;">Date</th>
                <th style="width: 20%;">Pt. Name</th>
                <th style="width: 10%;">Temp.</th>
                <th style="width: 10%;">MRN</th>
                <th style="width: 10%;">Time Out</th>
                <th style="width: 10%;">Temp.</th>
                <th style="width: 20%;">Initials / Badge #</th>
            </tr>
            @for ($i = 1; $i < 20; $i++)
                <tr>
                    <td style='width: 10%;'><input class='input-table' type='date'></td>
                    <td style='width: 20%;'>
                              <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($ptNames as $key=>$ptName)
                                    <option value="{{ $ptName }}" >
                                        {{ $ptName }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td style='width: 10%;'>
                                        <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($temps as $key=>$temp)
                                    <option value="{{ $temp }}" >
                                        {{ $temp }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td style='width: 10%;'>
                                        <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($mrns as $key=>$mrn)
                                    <option value="{{ $mrn }}" >
                                        {{ $mrn }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td style='width: 10%;'>
                                        <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($timeOuts as $key=>$timeOut)
                                    <option value="{{ $timeOut }}" >
                                        {{ $timeOut }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td style='width: 10%;'>
                                        <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($temps as $key=>$temp)
                                    <option value="{{ $temp }}" >
                                        {{ $temp }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td style='width: 20%;'>
                                        <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($initialeBadges as $key=>$initialeBadge)
                                    <option value="{{ $initialeBadge }}" >
                                        {{ $initialeBadge }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                </tr>
            @endfor

        </table>

        <p style='font-size:9.0pt;'>
            *Acceptable Temperature Range: 2^C to 8^C according to THHC-022 SPECIMEN
            COLLECTION,
            HANDLING, TRANSPORTATION AND TRACKING</p>

        <p style='font-size:9.0pt;'>*Accepted time less than 2 hour to deliver to
            lab.</p>

        <p style='font-size:9.0pt;'>Transport a Urine Specimen as soon as possible.
            Unpreserved
            urine can be processed within 2 hours at room temperature or 24 hours if
            refrigerated. </p>

        <p style='font-size:9.0pt;'>*Transport a Stool specimen as soon as possible.
            Unpreserved urine
            can be processed within 2 hours at room temperature or 48 hours if
            refrigerated.</p>




    </div>
    <form action="{{ route('report.store') }}">
        <input type="hidden" name="pdf" id="filePdf">
        <input type="hidden" name="name" id="fileName" value="fileName">

        <input class="submit-btn" type="submit" value="Save" onclick="" id="btnPrint">
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script>
        const SAVE_BTN = document.getElementById("btnPrint");
        const CREATE_PDF = document.getElementById("dvContainer");

        //option pdf file
        var customeOption = {
            margin: 0.5,
            filename: 'pdfcreated.pdf',
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };

        // whene btn save click
        SAVE_BTN.addEventListener("click", function() {

            var pdf = html2pdf().set(customeOption).from(CREATE_PDF);

            //add pdf to input 
            document.getElementById('filePdf').value = pdf;
            //save pdf
            pdf.save();
    
          
        });
    </script>
</body>

</html>
