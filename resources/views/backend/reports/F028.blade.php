<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tawazun</title>
</head>
<style>
    body {
        margin: 0px;
        padding: 0px;
    }

    nav {
        color: rgb(142, 188, 204);
        padding: 10px;
        border-bottom: 2px solid rgb(0, 160, 240);
        color: rgb(0, 160, 240);
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    nav h1 {
        margin: 0;
        margin-left: 58px;
        padding: 0;
        font-size: 30px;
    }

    nav p {
        margin: 0px;
        padding: 0px;
        text-transform: uppercase;
        font-size: 20px;
        color: lightgrey;
    }

    nav textarea {
        margin-right: 58px;
        width: 200px;
        height: 100px;
        border: 2px solid lightgrey;
        outline: none;
        border-radius: 5px;
        resize: none;
    }

    form {
        width: 95%;
        margin: auto;
        margin-bottom: 50px;
        padding: 10px;
        box-sizing: border-box;
    }

    form table {
        width: 100%;
        margin: auto;
        border-collapse: collapse;
    }

    form table th,
    form table td {
        border: 1px solid black;
        padding: 5px;
        vertical-align: top;
    }

    form input {
        width: 100%;
        border: none;
        outline: none;
        background-color: transparent;
    }

    form table td textarea {
        width: 100%;
        outline: none;
        border: none;
        line-height: 1.5;
        resize: none;
        font-family: Arial, Helvetica, sans-serif;
        background-color: transparent;
    }

    form hr {
        display: block;
        margin: 20px 0px;
        border-color: rgb(0, 160, 240);
    }

    form img {
        display: block;
        width: 90%;
        height: 600px;
        border: 2px solid black;
        margin: auto;
    }

    form .table-documentation-key tr th:nth-child(1),
    form .table-documentation-key tr td:nth-child(1),
    form .table-documentation-key tr td:nth-child(2) {
        background-color: rgb(217, 226, 243);
    }

    form .table-documentation-key tr th:nth-child(2),
    form .table-documentation-key tr td:nth-child(3),
    form .table-documentation-key tr td:nth-child(4) {
        background-color: rgb(247, 202, 172);
    }

    form .table-documentation-key tr th:nth-child(3),
    form .table-documentation-key tr td:nth-child(5),
    form .table-documentation-key tr td:nth-child(6) {
        background-color: rgb(226, 239, 217);
    }

    form .table-documentation-key tr th:nth-child(4),
    form .table-documentation-key tr td:nth-child(7) {
        background-color: rgb(255, 192, 0);
    }

    form .table-documentation-key tr th:nth-child(5),
    form .table-documentation-key tr td:nth-child(8) {
        background-color: rgb(217, 226, 243);
    }

    form .signature {
        display: flex;
        justify-content: space-between;
    }

    form .signature input {
        width: 500px;
        font-size: 18px;
    }

    form .signature .doctor,
    form .signature .patient {
        width: 50%;
        font-size: 20px;
    }

    input[type=submit] {
        display: block;
        margin: auto;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: rgb(46, 172, 46);
        outline: none;
        border: 2px solid black;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.5s;
    }

    input[type=submit]:hover {
        background-color: rgb(36, 138, 36);
    }
</style>

<body>
    <nav>
        <h1>Tawazun</h1>
        <p>follow up progress notes</p>
        <textarea placeholder="Patient label"></textarea>
    </nav>
    <form action="" onsubmit="generatePDF()">
        <div class="form-data">
            <table>
                <th colspan="5">PAIN ASSESSMENT TOOLS FOR DIFFERENT AGE GROUP</th>
                <tr>
                    <th>Patient age</th>
                    <th colspan="4">Tools to be used</th>
                </tr>
                <tr>
                    <td><input type="text" value="NEONATE- 3 MONTHS"></td>
                    <td><input type="text" value="CRIES"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="text" value="3 MONTHS – 3 YEARS"></td>
                    <td><input type="text"></td>
                    <td><input type="text" value="FLACC"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="text" value="DEVELOPMENTAL DELAYED CHILD"></td>
                    <td><input type="text"></td>
                    <td><input type="text" value="FLACC"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="text" value="NON-VERBAL ADULT"></td>
                    <td><input type="text"></td>
                    <td><input type="text" value="FLACC"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="text" value="CHILD 3-14 YRS"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text" value="WONG BAKER"></td>
                    <td><input type="text" value="NUMERICAL"></td>
                </tr>
                <tr>
                    <td><input type="text" value="VERBAL ADULT"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text" value="WONG BAKER"></td>
                    <td><input type="text" value="NUMERICAL"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <th colspan="4">CRIES PAIN SCORE TOOL 0 - 3 MONTHS</th>
                </tr>
                <tr>
                    <th>ASSESSMENT</th>
                    <th>0</th>
                    <th>1</th>
                    <th>2</th>
                </tr>
                <tr>
                    <td>
                        <textarea name="">Crying: Characteristics of pain if high pitched cry.

Intubated Neonates</textarea>
                    </td>
                    <td>
                        <textarea name="">No cry or a cry that is not high pitched.</textarea>
                    </td>
                    <td>
                        <textarea name="">High pitched cry but baby easily consolable.

Obvious mouth and facial features indicating crying, but easily consolable.</textarea>
                    </td>
                    <td>
                        <textarea name="">High pitched cry and baby is inconsolable.

Silent cry with obvious mouth and facial features indicating crying and is consolable.</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">Requires O2 for SaO2 less than 95%.
Babies experiencing pain manifest decreased oxygenation (*consider other reasons for hypoxia)</textarea>
                    </td>
                    <td>
                        <textarea name="">No oxygen required</textarea>
                    </td>
                    <td>
                        <textarea name="">Less than 30% oxygen required</textarea>
                    </td>
                    <td>
                        <textarea name="">More than 30% oxygen required</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">Increased vital signs (HR and/or BP). Take BP last as this may awaken the baby making other assessments difficult</textarea>
                    </td>
                    <td>
                        <textarea name="">Both HR and/or BP remain unchanged or less than baseline</textarea>
                    </td>
                    <td>
                        <textarea name="">HR and/or BP increase but increase is less than 20%</textarea>
                    </td>
                    <td>
                        <textarea name="">HR and/or BP increase more than 20% over baseline.</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">Expression: a grimace may be characterized by brow lowering, eyes squeezed shut, naso-labial furrow or open lips and mouth</textarea>
                    </td>
                    <td>
                        <textarea name="">No grimace present</textarea>
                    </td>
                    <td>
                        <textarea name="">Grimace alone is present</textarea>
                    </td>
                    <td>
                        <textarea name="">Grimace and non-cry vocalization grunt is present</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">Sleepless: score based upon the baby's state during the hour preceding the assessment</textarea>
                    </td>
                    <td>
                        <textarea name="">Child has been continously asleep</textarea>
                    </td>
                    <td>
                        <textarea name="">Child has awoken at frequent intervals</textarea>
                    </td>
                    <td>
                        <textarea name="">child has been awake constantly</textarea>
                    </td>
                </tr>
            </table>

            <hr>

            <table>
                <tr>
                    <th colspan="4">FLACC SCALE: NON-VERBAL PAIN ASSESSMENT TOOL</th>
                </tr>
                <tr>
                    <th></th>
                    <th>0</th>
                    <th>1</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Face</th>
                    <td>
                        <textarea name="">No particular expression or smile</textarea>
                    </td>
                    <td>
                        <textarea name="">Occasional grimace or frown, withdrawn, disinterested</textarea>
                    </td>
                    <td>
                        <textarea name="">Frequent to constant frown, clenched jaw, quivering chin</textarea>
                    </td>
                </tr>
                <tr>
                    <th>Legs</th>
                    <td>
                        <textarea name="">Normal position or relaxed</textarea>
                    </td>
                    <td>
                        <textarea name="">Uneasy, restless, tense</textarea>
                    </td>
                    <td>
                        <textarea name="">Kicking or legs drawn up</textarea>
                    </td>
                </tr>
                <tr>
                    <th>Activity</th>
                    <td>
                        <textarea name="">Lying quietly, normal position and moves easily</textarea>
                    </td>
                    <td>
                        <textarea name="">Squiming, shifting back and forth, tense</textarea>
                    </td>
                    <td>
                        <textarea name="">Arched, rigid, or jerking</textarea>
                    </td>
                </tr>
                <tr>
                    <th>Cry</th>
                    <td>
                        <textarea name="">No crying (awake or sleep)</textarea>
                    </td>
                    <td>
                        <textarea name="">Moans or whimpers, occasional complaints</textarea>
                    </td>
                    <td>
                        <textarea name="">Crying steadly, screaming or sobbing.
Frequent complaints
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <th>Consolability</th>
                    <td>
                        <textarea name="">Content, relaxed</textarea>
                    </td>
                    <td>
                        <textarea name="">Reassured by occasional, touching, hugging or talking to.
Distractible
                    </textarea>
                    </td>
                    <td>
                        <textarea name="">Difficult to console or comfort</textarea>
                    </td>
                </tr>
            </table>

            <hr>

            <img src="{{ asset('pain.jpg') }}" alt="">

            <hr>

            <p> • Assess pain routinely, Record observation, Intervention, and reports on this form.</p>
            <p> • Documentation Key: </p>
            <table class="table-documentation-key">
                <tr>
                    <th colspan="2">Location</th>
                    <th colspan="2">Quality</th>
                    <th colspan="2">Intervention</th>
                    <th colspan="1">Sedation</th>
                    <th colspan="1">Adverse Effect</th>
                </tr>
                <tr>
                    <td>
                        <textarea name="">1.Head</textarea>
                    </td>
                    <td>
                        <textarea name="">6.Chest</textarea>
                    </td>
                    <td>
                        <textarea name="">A. Aching</textarea>
                    </td>
                    <td>
                        <textarea name="">R. Radiating</textarea>
                    </td>
                    <td>
                        <textarea name="">1. Position chang</textarea>
                    </td>
                    <td>
                        <textarea name="">7.Exercise</textarea>
                    </td>
                    <td>
                        <textarea name="">1.Awake/alert</textarea>
                    </td>
                    <td>
                        <textarea name="">NV Nausea/Vomitin</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">2.Neck/Shoulder</textarea>
                    </td>
                    <td>
                        <textarea name="">7.Abdomen</textarea>
                    </td>
                    <td>
                        <textarea name="">B. Burning</textarea>
                    </td>
                    <td>
                        <textarea name="">S. Sharp</textarea>
                    </td>
                    <td>
                        <textarea name="">2. Elevation</textarea>
                    </td>
                    <td>
                        <textarea name="">8.Conversation</textarea>
                    </td>
                    <td>
                        <textarea name="">2.Drowsy</textarea>
                    </td>
                    <td>
                        <textarea name="">I. Itching/rash</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">3.UE (L or R)</textarea>
                    </td>
                    <td>
                        <textarea name="">8.Flank</textarea>
                    </td>
                    <td>
                        <textarea name="">C. Cramping</textarea>
                    </td>
                    <td>
                        <textarea name="">T. Tearing</textarea>
                    </td>
                    <td>
                        <textarea name="">3.Heat/Cold</textarea>
                    </td>
                    <td>
                        <textarea name="">9.TV/other diversion</textarea>
                    </td>
                    <td>
                        <textarea name="">3.Dozing intermittently</textarea>
                    </td>
                    <td>
                        <textarea name="">D. Dizziness</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">4.LE (L or R)</textarea>
                    </td>
                    <td>
                        <textarea name="">9.Incision</textarea>
                    </td>
                    <td>
                        <textarea name="">D. Dull</textarea>
                    </td>
                    <td>
                        <textarea name="">Th. Throbbing</textarea>
                    </td>
                    <td>
                        <textarea name="">4.Massage</textarea>
                    </td>
                    <td>
                        <textarea name="">10.Medication/Spiritual</textarea>
                    </td>
                    <td>
                        <textarea name="">4.Awakens when aroused</textarea>
                    </td>
                    <td>
                        <textarea name="">F. Confusion</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="">5.Back</textarea>
                    </td>
                    <td>
                        <textarea name="">10.Other**</textarea>
                    </td>
                    <td>
                        <textarea name="">P. Pricking</textarea>
                    </td>
                    <td>
                        <textarea name="">O. Other**</textarea>
                    </td>
                    <td>
                        <textarea name="">5.Immobilization</textarea>
                    </td>
                    <td>
                        <textarea name="">11.Darken room</textarea>
                    </td>
                    <td>
                        <textarea name="">5.Unable to arouse</textarea>
                    </td>
                    <td>
                        <textarea name="">C. Constipation</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name=""></textarea>
                    </td>
                    <td>
                        <textarea name=""></textarea>
                    </td>
                    <td>
                        <textarea name=""></textarea>
                    </td>
                    <td>
                        <textarea name=""></textarea>
                    </td>
                    <td>
                        <textarea name="">6.Support device</textarea>
                    </td>
                    <td>
                        <textarea name="">12.Quiet room</textarea>
                    </td>
                    <td>
                        <textarea name="">6.Asleep</textarea>
                    </td>
                    <td>
                        <textarea name="">O. Other**</textarea>
                    </td>
                </tr>
            </table>

            <hr style="border-color: transparent">

            <table>
                <tr>
                    <td>Date/Time</td>
                    <td><input type="datetime-local"></td>
                </tr>
                <tr>
                    <td>Pain Intensity</td>
                    <td>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Quality</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Intervention</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Pharmaceutical</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Sedation</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Adverse Effect</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Nurse Initial</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Reassessment Time</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Reassessment Pain Score***</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Nurse Initial</td>
                    <td><input type="text"></td>
                </tr>
            </table>

            <hr>

            <table>
                <tr>
                    <td>
                        <label>Time</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Initials</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Full name and Title</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Employee Number</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Initials</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Full name and Title</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Employee Number</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Initials</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Full name and Title</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                    <td>
                        <label>Employee Number</label>
                        <input type="text" placeholder="Write here" style="margin: 10px 0px">
                    </td>
                </tr>
            </table>

            <hr>

            <p> * See F047-THHC MAR (Medication Administration Record)<br><br>
                ** Any other has to be documented in a nursing note. (F048 Nursing documentation note)<br><br>
                *** Reassessment of pain post intervention (must be completed within 30 minute-1 hour)
            </p>

            <hr>

            <h1 style="text-align: center">Signature</h1>
            <div class="signature">
                <div class="doctor">
                    <label>Doctor: </label>
                    <input type="text" placeholder="Write Here">
                </div>
                <div class="patient">
                    <label>Patient: </label>
                    <input type="text" placeholder="Write Here">
                </div>
            </div>
        </div>
        <hr>
        <input type="submit" value="Generate PDF">
    </form>

    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <script>
        let allTextArea = document.querySelectorAll("textarea");
        for (let i = 0; i < allTextArea.length; i++)
            autosize(allTextArea[i]);

        function generatePDF(ev) {
            var x = window.print();
            ev.preventDefault();
        }
    </script>
</body>

</html>
