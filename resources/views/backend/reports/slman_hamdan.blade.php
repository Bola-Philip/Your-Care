<!DOCTYPE html>
<html>

<head>
    <title>Patient Assessment Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* Add custom styles */
        body {
            background: linear-gradient(to bottom right, #4CAF50, #008CBA);
            color: #020101;
        }

        .jumbotron {
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
        }

        .h-screen {
            height: 100%;
        }

        .form-check-input[type="checkbox"] {
            width: 1.5em;
            height: 1.5em;
        }

        #signature-container {
            width: 50%;
            height: 100px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        #signature {
            width: 100%;
            height: 100%;
            touch-action: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-light">Daily Nursing Visit Record/Reassessment</h1>
        <hr>

        <form class="container_content" id="container_content">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">DATE:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="time-in" class="col-sm-2 col-form-label">TIME IN:</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control" id="time-in">
                        </div>

                        <label for="time-out" class="col-sm-2 col-form-label">TIME OUT:</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control" id="time-out">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NSF:</label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="active" name="nsf"
                                value="1">
                            <label class="form-check-label" for="active">yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hypoactive" name="nsf"
                                value="0">
                            <label class="form-check-label" for="hypoactive">no</label>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="mrn" class="col-sm-2 col-form-label">MRN:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mrn" placeholder="Enter MRN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                    </div>

                </div>
            </div>

            <h4>Focus of visit</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="visit-type" class="col-sm-4 col-form-label">Visit Type:</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="visit-type">
                                <option>Routine</option>
                                <option>Unscheduled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bp" class="col-sm-2 col-form-label">BP:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="bp-right" placeholder="Right">
                        </div>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="bp-left" placeholder="Left">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="lying-bp" placeholder="Laying">
                        </div>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="sitting-bp" placeholder="Sitting">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="standing-bp" placeholder="Standing">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="spo2" class="col-sm-2 col-form-label">SPO2:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="spo2-ra" placeholder="RA">
                        </div>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="spo2-o2" placeholder="O2/l">
                        </div>

                        <label for="resp" class="col-sm-2 col-form-label">Resp:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="resp">
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="fbs" class="col-sm-3 col-form-label">FBS:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="fbs">
                        </div>
                        <label for="rbs" class="col-sm-2 col-form-label">RBS:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="rbs">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="temp" class="col-sm-2 col-form-label">Temp:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tp-Oral" placeholder="Oral">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tp-Axilla" placeholder="Axilla">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tp-Other" placeholder="Other">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="pulse" class="col-sm-2 col-form-label">PULSE:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="pulse-ap" placeholder="AP">
                        </div>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="pulse-rp" placeholder="RP">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="mental-behavior" class="col-sm-2 col-form-label">MENTAL BEHAVIOR:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mental-behavior">
                </div>
            </div>
            <div class="form-group row">
                <label for="gastrointestinal" class="col-sm-2 col-form-label">GASTROINTESTINAL:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gastrointestinal">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="iv-therapy" class="col-sm-4 col-form-label">IV THERAPY:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="iv-therapy">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="picc-length" class="col-sm-4 col-form-label">PICC Length:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="picc-length">
                        </div>

                    </div>



                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="dressing" class="col-sm-4 col-form-label">Daressing last change:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="dressing">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="arm-circumference" class="col-sm-4 col-form-label">Arm circumference:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="arm-circumference">
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="genito-urinary" class="col-sm-2 col-form-label">GENITO/URINARY:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="genito-urinary">
                </div>
            </div>
            <div class="form-group row">
                <label for="cardiovascular" class="col-sm-2 col-form-label">CARDIOVASCULAR:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cardiovascular">
                </div>
            </div>
            <div class="form-group row">
                <label for="respiratory" class="col-sm-2 col-form-label">RESPIRATORY:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="respiratory">
                </div>
            </div>
            <div class="form-group row">
                <label for="neuro" class="col-sm-2 col-form-label">NEURO:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="neuro">
                </div>
            </div>


            <div class="form-group">
                <label for="musculoskeletal">MUSCULOSKELETAL:</label><br>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="mobility" name="mobility"
                        value="mobility">
                    <label class="form-check-label" for="mobility">Mobility</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="ambulatory" name="ambulatory"
                        value="ambulatory">
                    <label class="form-check-label" for="ambulatory">Ambulatory</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="walker" name="walker" value="walker">
                    <label class="form-check-label" for="walker">Walker</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="cane" name="cane" value="cane">
                    <label class="form-check-label" for="cane">Cane</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="wc" name="wc" value="wc">
                    <label class="form-check-label" for="wc">W/C</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                    <input class="form-check-input" type="checkbox" id="bedbound" name="bedbound"
                        value="bedbound">
                    <label class="form-check-label" for="bedbound">BedBound</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="HEAD-NECK-EYES" class="col-sm-2 col-form-label">HEAD/ NECK/ EYES:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="HEAD-NECK-EYES">
                </div>
            </div>

            <div class="form-group row">
                <label for="ENDOCRINE" class="col-sm-2 col-form-label">ENDOCRINE:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ENDOCRINE">
                </div>
            </div>
            <div class="form-group row">
                <label for="NUTRITIONAL" class="col-sm-2 col-form-label">NUTRITIONAL:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NUTRITIONAL">
                </div>
            </div>
            <div class="form-group row">
                <label for="SKIN & WOUND" class="col-sm-2 col-form-label">SKIN & WOUND:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="SKIN & WOUND">
                </div>
            </div>


            <label for="pain">PAIN:</label>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location"><br>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="scale">Scale 0-10:</label>
                        <input type="number" id="scale" name="scale" min="0" max="10"><br>
                    </div>

                </div>
                <div class="col-md-3">
                    <label for="control">Control measures:</label>
                    <input type="text" id="scale" name="control-measures"><br>
                </div>
                <div class="col-md-3">
                    <label for="effective">Effective:</label>
                    <input type="checkbox" id="effective" name="effective" value="yes">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tool-assessment">Tool Assessment:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="wong-baker" name="tool"
                                value="wong-baker">
                            <label class="form-check-label" for="wong-baker">WONG BAKER</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="flacc" name="tool"
                                value="flacc">
                            <label class="form-check-label" for="flacc">FLACC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="numerical" name="tool"
                                value="numerical">
                            <label class="form-check-label" for="numerical">NUMERICAL</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="cries" name="tool"
                                value="cries">
                            <label class="form-check-label" for="cries">CRIES</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="adls">ADLS:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="self" name="adls"
                                value="self">
                            <label class="form-check-label" for="self">Self</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="mini-assist" name="adls"
                                value="mini-assist">
                            <label class="form-check-label" for="mini-assist">Mini Assist</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="max-assist" name="adls"
                                value="max-assist">
                            <label class="form-check-label" for="max-assist">Max Assist</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="med-allergy">MEDICATIONS ALLERGY:</label>
                        <textarea id="med-allergy" name="med-allergy"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="assessment">ASSESSMENT AND FINDINGS:</label>
                        <textarea id="assessment" name="assessment"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="others">Others:</label>
                        <textarea id="others" name="others"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="skilled-care">SKILLED CARE PROVIDED:</label>
                        <textarea id="skilled-care" name="skilled-care"></textarea>
                    </div>

                </div>
            </div>









            <div class="form-group">
                <label for="progress-notes">Progress Notes/ Conference with MD/ RT/ OT/ MSW/ DIETITIAN/ OTHERS:</label>
                <textarea id="progress-notes" name="progress-notes"></textarea>
            </div>

            <div class="form-group">
                <label for="discharge-plan">Discharge plan:</label>
                <textarea id="discharge-plan" name="discharge-plan"></textarea>
            </div>

            <div class="form-group">
                <label for="next-md">Next MD Appt:</label>
                <input type="date" id="next-md" name="next-md">
            </div>

            <div class="form-group">
                <label for="plan">Plan for next visit:</label>
                <textarea id="plan" name="plan"></textarea>
            </div>

            <div class="form-group">
                <label for="rn-info">RN Name/ Badge #:</label>
                <input type="text" id="rn-info" name="rn-info">
                <div class="form-group">
                    <label for="rn-signature">Signature:</label>
                    <div id="signature-container">
                        <canvas id="signature"></canvas>
                    </div>
                    <button type="button" id="clear-signature">Clear</button>
                    <input type="hidden" id="rn-signature" name="rn-signature">
                </div>
            </div>

            <div class="form-group">
                <label>Mental Behavior:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="alert" name="mental_behavior[]"
                        value="alert">
                    <label class="form-check-label" for="alert">ALERT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="oriented" name="mental_behavior[]"
                        value="oriented">
                    <label class="form-check-label" for="oriented">Oriented</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="depressed" name="mental_behavior[]"
                        value="depressed">
                    <label class="form-check-label" for="depressed">Depressed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="anxious" name="mental_behavior[]"
                        value="anxious">
                    <label class="form-check-label" for="anxious">Anxious</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="confused" name="mental_behavior[]"
                        value="confused">
                    <label class="form-check-label" for="confused">Confused</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="forgetful" name="mental_behavior[]"
                        value="forgetful">
                    <label class="form-check-label" for="forgetful">Forgetful</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="combative" name="mental_behavior[]"
                        value="combative">
                    <label class="form-check-label" for="combative">Combative</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="unresponsive" name="mental_behavior[]"
                        value="unresponsive">
                    <label class="form-check-label" for="unresponsive">Unresponsive</label>
                </div>
            </div>

            <div class="form-group">
                <label>Gastrointestinal:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="nausea" name="gastrointestinal[]"
                        value="nausea">
                    <label class="form-check-label" for="nausea">Nausea</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="vomiting" name="gastrointestinal[]"
                        value="vomiting">
                    <label class="form-check-label" for="vomiting">Vomiting</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="diarrhea" name="gastrointestinal[]"
                        value="diarrhea">
                    <label class="form-check-label" for="diarrhea">Diarrhea</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="melena" name="gastrointestinal[]"
                        value="melena">
                    <label class="form-check-label" for="melena">Melena</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hematemesis" name="gastrointestinal[]"
                        value="hematemesis">
                    <label class="form-check-label" for="hematemesis">Hematemesis</label>
                </div>
                <div class="form-group">
                    <label>Other:</label>
                    <input type="text" class="form-control" name="gastrointestinal_other">
                </div>
            </div>

            <div class="form-group">
                <label>Bowel Sound:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="active" name="bowel_sound[]"
                        value="active">
                    <label class="form-check-label" for="active">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hypoactive" name="bowel_sound[]"
                        value="hypoactive">
                    <label class="form-check-label" for="hypoactive">Hypoactive</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="absent" name="bowel_sound[]"
                        value="absent">
                    <label class="form-check-label" for="absent">Absent</label>
                </div>
            </div>

            <div class="form-group">
                <label>Urinary Output:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="normal" name="urinary_output[]"
                        value="normal">
                    <label class="form-check-label" for="normal">Normal</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="oliguria" name="urinary_output[]"
                        value="oliguria">
                    <label class="form-check-label" for="oliguria">Oliguria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="anuria" name="urinary_output[]"
                        value="anuria">
                    <label class="form-check-label" for="anuria">Anuria</label>
                </div>
                <div class="form-group">
                    <label>Other:</label>
                    <input type="text" class="form-control" name="urinary_output_other">
                </div>
            </div>

            <div class="form-group">
                <label>Cardiovascular:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="normal_heart" name="cardiovascular[]"
                        value="normal_heart">
                    <label class="form-check-label" for="normal_heart">Normal Heart Sounds</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="murmur" name="cardiovascular[]"
                        value="murmur">
                    <label class="form-check-label" for="murmur">Murmur</label>
                </div>
                <div class="checkbox" class="form-check-input" id="irregular" name="cardiovascular[]"
                    value="irregular">
                    <label class="form-check-label" for="irregular">Irregular</label>
                </div>
            </div>

            <div class="form-group">
                <label>Respiratory:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="clear" name="respiratory[]"
                        value="clear">
                    <label class="form-check-label" for="clear">Clear</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="rales" name="respiratory[]"
                        value="rales">
                    <label class="form-check-label" for="rales">Rales</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="wheezes" name="respiratory[]"
                        value="wheezes">
                    <label class="form-check-label" for="wheezes">Wheezes</label>
                </div>
            </div>

            <div class="form-group">
                <label>Other Findings:</label>
                <textarea class="form-control" rows="3" name="other_findings"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary btn_print">Submit</button>
                </div>
            </div>




        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
        var signaturePad = new SignaturePad(document.getElementById('signature'));
        var clearButton = document.getElementById('clear-signature');
        var signatureInput = document.getElementById('rn-signature');

        clearButton.addEventListener('click', function() {
            signaturePad.clear();
            signatureInput.value = '';
        });

        signaturePad.on('end', function(event) {
            signaturePad.toDataURL().then(function(dataUrl) {
                signatureInput.value = dataUrl;
            });
        });

        // Fix for signature line not following mouse position
        function getCanvasScale() {
            var canvas = document.getElementById('signature');
            var rect = canvas.getBoundingClientRect();
            return {
                x: canvas.width / rect.width,
                y: canvas.height / rect.height
            };
        }

        var canvas = document.getElementById('signature');
        canvas.addEventListener('mousemove', function(event) {
            if (signaturePad.pointerType === 'mouse' && signaturePad.penDown) {
                var canvasScale = getCanvasScale();
                var bounds = canvas.getBoundingClientRect();
                var x = (event.clientX - bounds.left) * canvasScale.x;
                var y = (event.clientY - bounds.top) * canvasScale.y;
                signaturePad._strokeUpdate({
                    clientX: x,
                    clientY: y
                });
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function($) {

            $(document).on('click', '.btn_print', function(event) {
                event.preventDefault();

                //credit : https://ekoopmans.github.io/html2pdf.js

                var element = document.getElementById('container_content');
                html2pdf(element);

                //custom file name
                //html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


                //more custom settings

                // New Promise-based usage:



            });



        });
    </script>
</body>

</html>
