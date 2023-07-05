<html>

<head>
    <style>
        input {
            border: 0;
            outline: 0;
            border-bottom: 1px solid black;
        }

        .input-small-width {
            width: 30px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .input-field {
            margin-top: 0cm;
            margin-right:
                0cm;
            margin-bottom: 5.1pt;
            margin-left: 0cm;
            text-indent: 0cm;
            font-size: 10.0pt;

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

    <div id="dvContainer">
    <div >

        <p class="input-field">
            <span>Initiated by <input type="text"> </span>
            <span> (NURSE/PHYSICIAN) Date/Time: <input type="text"></span>
        </p>

        <p class="input-field">
            <span>Patient Name <input type="text"></span>
            <span> File No <input type="number"></span>
            <span> Location:
                <input type="text"></span>
        </p>

        <p class="input-field">
            <span>In-patient Date Admitted:<input type="text"></span>
            <span>MR#<input type="text" class="input-small-width"></span>
            <span> Sex:
                <input type="radio" name="sex" id="male" value="male" checked>
                <label for="male"> Male</label>
                <input type="radio" name="sex" id="female" value="female">
                <label for="female">Female</label></span>
            <span></span> Age: <input type="text" class="input-small-width"> Weight:
            <input type="text" class="input-small-width"></span>
        </p>

        <p class="input-field">
            <span>Known allergies: <input type="text" style="width:100px;"> </span>
            <span> Diagnosis: <input type="text" style="width:300px;"></span>
        </p>

        <p class="input-field">
            <span>Treating Physician<input type="text" style="width:400px;"></span>
        </p>

        <p class="input-field"><span>
                Suspected drug, dose, and route: <input type="text" style="width:400px;"></span></p>

        <p class="input-field"><span> <input type="text" style="width:450px;"></span></p>

        <p class="input-field"><span>Date/Time of suspected reaction: <input type="text" style="width:400px;"></span>
        </p>

        <p class="input-field"><span>Brief description of reaction:
                <input type="text" style="width:400px;"></span></p>

        <p class="input-field">
            <span>__________________________________________________________________________________________________________________________________________________________________________________________</span>
        </p>



        <p class="input-field">
            <span>Signature:_______________________________________</span>
        </p>

<br>
        <p class="input-field">
            <span style='font-size:12.0pt'>TO BE COMPLETED BY PHYSICIAN </span>
        </p>

        <p style='margin-left:.5pt'>
   

           

        <div>

            <table width="95%">
                <tr>
                    <th colspan="5" style="background-color: #848484; width: 800px;color:white">
                        CLASSIFICATION OF ADVERSE DRUG REACTION (FULL BY physician)
                    </th>
                </tr>
                <tr>
                    <th colspan="5" style="background-color: #cecece;">Naranjo adverse drug reaction probability
                        scale</th>
                </tr>

                <tr style="background-color: #cecece;">
                    <th style="width: 60%;">Assessment</th>
                    <th style="width: 10%;">Yes</th>
                    <th style="width: 10%;">No</th>
                    <th style="width: 10%;">Dont know</th>
                    <th style="width: 10%;">score</th>
                </tr>

                {{--  -----------1  --}}
                <tr>
                    <td style="width: 60%;">Are there previous conclusive reports ont this reaction?</td>
                    <?php
                    $options = ['+2', '+1', '0', '-1', '-2'];
                    ?>

                    @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor

                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------2  --}}
                <tr>
                    <td style="width: 60%;">Did thes adverset event occur after the suspected drus was
                        administered?</td>
                                 @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>



                {{--  -----------3  --}}
                <tr>
                    <td style="width: 60%;">Dia the adverse reaction improves when thes drust was discontinued or a
                        specific antagsonist was administered?</td>
                                  @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------4  --}}
                <tr>
                    <td style="width: 60%;">Did the adverse reaction reappear when the drug was re-administered?</td>
                                  @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------5  --}}
                <tr>
                    <td style="width: 60%;">Arel theres alternative causes (other than thes drug) thats could have on
                        theirs
                        own caused thes reaction?</td>
                                   @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------6  --}}
                <tr>
                    <td style="width: 60%;">Did the reaction reappear when a placebo was given?</td>
                                 @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------7 --}}
                <tr>
                    <td style="width: 60%;">Wast the blood detectedt in thes blood (or other fluias) in concentrations
                        known to be toxig?</td>
                                  @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  ----------8  --}}
                <tr>
                    <td style="width: 60%;">Wast the reactiong more severe wheng the dose was increased or less severes
                        when the dose was decreased?</td>
                                   @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------9  --}}
                <tr>
                    <td style="width: 60%;">Didt the patient have a similarg reactions to the same or similar drugs in
                        any
                        previous exposure?</td>
                                  @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>
                </tr>


                {{--  -----------10  --}}
                <tr>
                    <td style="width: 60%;">Wast the adverse event confirmed, by any objective evidence?</td>
                                  @for ($i = 1; $i <= 3; $i++)
                        <td style="width: 10%;">
                            <select name="option"style="border: 0; width:100%;appearance:none;text-align:center">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        @if ($option == '+1') selected @endif>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endfor
                    <td style="width: 10%;">
                        <input type="number" placeholder="score" id="" name="score" style="border: 0;">

                    </td>

                </tr>

                <tr>

                    <td colspan="4"
                        style="background-color: #848484; width: 800px;text-align:right;padding-right:10px">Total</td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="5">
                        Based on the total score, circle the term that best define this ADR:
                        <br>
                        >=9 definitel ADR,
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        5-8 probable ADR,
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        1-4 possible ADR,
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        0=doubtful ADR
                    </td>
                </tr>

                <tr>
                    <td style="background-color: #cecece"> Reaction Type:</td>
                    <td colspan="4">
                        <input type="checkbox" name="idiosyncratic" id="idiosyncratic" value="idiosyncratic">
                        <label for="idiosyncratic">Idiosyncratics (predicted from the known pharmacology of thet
                            drug)</label>
                        <br>
                        <input type="checkbox" name="exaggeration" id="exaggeration" value="exaggeration">
                        <label for="exaggeration">Exaaceration (not predicted from basic pharmacoloav!)</label>
                    </td>
                </tr>

            </table>
        </div>

        <span style='font-size:
12.0pt;font-family:Montserrat'>Assessment:<input type="text"
                style="width:90%;"></span></p>



        <p class="input-field"><span>Physician Signature/Date:
                <input type="text" style="width:300px;"></span></p>


        <p style='margin-left:0cm;text-indent:0cm'><span
                style='font-size:12.0pt;font-family:"Montserrat SemiBold"'>&nbsp;</span></p>

        <table>

            <tr>
                <td width=729 valign=top style='padding:0cm 6.5pt 0cm 19.3pt'>

                    <p><span style='font-size:12.0pt;'>TO BE COMPLETED BY PHARMACIST: </span></p>
                    <p class="input-field"><span>Date Received by pharmacy: <input type="text"
                                style="width:400px;"></span></p>

                    <div style="display: flex; align-items:center; justify-content: space-between;">
                        <div>
                            <div>
                                <p class="input-field"><span> Concomitant Drugs</span></p>
                            </div>
                            <div><input type="text" style="width:100px;"></div>
                        </div>
                        <div>
                            <div>
                                <p class="input-field"><span> Date Started</span></p>
                            </div>
                            <div><input type="text" style="width:100px;"></div>
                        </div>
                        <div>
                            <div>
                                <p class="input-field"><span> Date Stopped</span></p>
                            </div>
                            <div><input type="text" style="width:100px;"></div>
                        </div>
                    </div>

                    <p class="input-field"><span>Suspected drug: <input type="text" style="width:500px;"></span>
                    </p>
                    <p class="input-field">
                        <span>Date first dose: <input type="text" style="width:200px;"> Date
                            last
                            dose:<input type="text" style="width:200px;"></span>
                    </p>
                    <p class="input-field"><span>Comments: <input type="text" style="width:500px;"></span></p>
                    <p class="input-field">
                        <span><input type="text" style="width:100%;"></span>
                    </p>
                    <br>

                    <p class="input-field"><span>
                            <u>Immediately inform Chief of pharmacy in case of sever
                                reaction, Chief of pharmacy signature (in
                                case):</u></span></p>
                    <p class="input-field"><span>
                            <input type="text" style="width:100%;">
                        </span></p>
                    <p class="input-field"><span><input type="text" style="width:100%;">
                        </span></p>
                    <br>
                    <p class="input-field"><span>Signature/Date ___________________________</span></p>
                </td>
            </tr>
            <tr>
                <td style='padding:0cm 6.5pt 0cm 19.3pt'>

                    <p class="input-field">
                        <span>TO BE COMPLETED BY P&amp;T COMMITTEE: </span>
                    </p>

                    <p class="input-field"><span>Date Reviewed: <input type="text" style="width:300px;"> </span>
                    </p>
                    <br>
                    <p class="input-field"><span>Area where reaction happened:<input type="text"
                                style="width:400px;"></span></p>

                    <br>

                    <p class="input-field"><span>Severity level of ADR: <input type="text" style="width:450px;">
                        </span></p>
                    <br>

                    <p class="input-field"><span>CONCLUSION:
                            <input type="text" style="width:600px"></span></p>
                    <p class="input-field"><span><input type="text" style="width:100%;"></span></p>
                    <p class="input-field"><span><input type="text" style="width:100%;"></span></p>
                    <p class="input-field"><span><input type="text" style="width:100%;">
                        </span></p>

                    <br>
                    <br>
                </td>
            </tr>
        </table>


    </div>
    </div>

    <form action="{{ route('report.store') }}" >
        <input type="hidden" name="pdf" id="filePdf">
        <input type="hidden" name="name" id="fileName">

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
