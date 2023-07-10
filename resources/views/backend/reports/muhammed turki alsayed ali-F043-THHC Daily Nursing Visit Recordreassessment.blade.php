<!DOCTYPE html>
<html>
<head>
    <title>Daily Nursing Visit Record/Reassessment</title>
    <style>
     
        body.page1 {
            background-color: green;
        }

        body.page2 {
            background-color: silver;
        }

        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #000;
        }

        td[colspan="2"] {
            font-weight: bold;
        }

        td[colspan="10"] {
            text-align: center;
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body class="page1">
    <button onclick='myfanction()' class='btn-secondary'>طباعة الملف</button><br>
    <a href="{{ route('print-pdf') }}" target="_blank">طباعة كـ PDF</a>

    <h1>Daily Nursing Visit Record/Reassessment</h1>
    <table>
        <tr>
            <th colspan="2">MRN:</th>
            <th>DATE:</th>
            <th colspan="2">Name:</th>
            <th>TIME IN:</th>
            <th>TIME OUT:</th>
        </tr>
        <tr>
            <th colspan="7">NSF = No Significant Findings</th>
        </tr>
        <tr>
            <th rowspan="2">Focus of visit</th>
            <th rowspan="2">Visit Type</th>
            <th rowspan="2">Routine</th>
            <th rowspan="2">Unscheduled</th>
            <th rowspan="2">FBS</th>
            <th rowspan="2">RBS</th>
            <th>Blood Pressure</th>
        </tr>
        <tr>
            <th>Right</th>
            <th>Left</th>
            <th>Lying</th>
            <th>Sitting</th>
            <th>Standing</th>
            <th>Temp</th>
            <th>Oral</th>
            <th>Axilla</th>
            <th>Other</th>
        </tr>
        <tr>
            <th>SPO2</th>
            <th>RA</th>
            <th>O2/l</th>
            <th>Resp</th>
            <th>PULSE</th>
            <th>AP</th>
            <th>RP</th>
        </tr>
        <tr>
            <th>1</th>
            <th>MENTAL & BEHAVIOR</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>2</th>
            <th>GASTROINTESTINAL</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>3</th>
            <th>IV THERAPY</th>
            <td colspan="4">Dressing last change</td>
            <td colspan="8"></td>
        </tr>
        <tr>
            <th>4</th>
            <th>PICC Length</th>
            <td colspan="3">Arm circumference</td>
            <td colspan="9"></td>
        </tr>
        <tr>
            <th>5</th>
            <th>GENITO/URINARY</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>6</th>
            <th>CARDIOVASCULAR</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>7</th>
            <th>RESPIRATORY</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>8</th>
            <th>NEURO</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>9</th>
            <th>MUSCULOSKELETAL</th>
            <td colspan="2">Mobility</td>
            <td colspan="4">Ambulatory</td>
            <td colspan="2">Walker</td>
            <td>Cane</td>
            <td>W/C</td>
            <td>BedBound</td>
        </tr>
        <tr>
            <th>10</th>
            <th>HEAD/NECK/EYES</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>11</th>
            <th>ENDOCRINE</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>12</th>
            <th>NUTRITIONAL</th>
            <td colspan="9">Tube Feeding</td>
            <td colspan="3">PEG Tube</td>
        </tr>
        <tr>
            <th>13</th>
            <th>SKIN & WOUND</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>14</th>
            <th>PAIN</th>
            <td colspan="3">Location</td>
            <td colspan="3">Scale 0-10</td>
            <td colspan="3">Control measures</td>
            <td colspan="2">Effective</td>
        </tr>
        <tr>
            <td>Tool Assessment</td>
            <td>WONG BAKER</td>
            <td>FLACC</td>
            <td>NUMERICAL</td>
            <td>CRIES</td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <th>15</th>
            <th>MEDICATIONS ALLERGY</th>
            <td colspan="12"></td>
        </tr>
        <tr>
            <th>16</th>
            <th>ADLS</th>
            <td>Self</td>
            <td>Mini Assist</td>
            <td>Max Assist</td>
            <td colspan="9"></td>
        </tr>
        <tr>
            <th>17</th>
            <th>Others</th>
            <td colspan="12"></td>
        </tr>
    </table>

 

    <script>

        window.onload = function() {
            document.body.className = "page1";
        };
    </script>



 

<script>

  window.onload = function() {
      document.body.className = "page2";
  };
</script>

<!-- بداية الصفحة الثانية -->
<table>
  <tr>
      <th>Mental Behavior</th>
      <td>ALERT</td>
      <td>Oriented</td>
      <td>Depressed</td>
      <td>Anxious</td>
  </tr>
  <tr>
      <td></td>
      <td>Confused</td>
      <td>Forgetful</td>
      <td>Combative</td>
      <td>Unresponsive</td>
  </tr>
  <tr>
      <th>Gastrointestinal</th>
      <td>Nausea</td>
      <td>Vomiting</td>
      <td>Diarrhea</td>
      <td>Melena</td>
  </tr>
  <tr>
      <td></td>
      <td>Hematemesis</td>
      <td>Other:</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Bowel Sound</th>
      <td>Active</td>
      <td>Hypoactive</td>
      <td>Absent</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Abdomen</th>
      <td>RUQ</td>
      <td>RLQ</td>
      <td>LLQ</td>
      <td>Soft</td>
      <td>Tender</td>
      <td>Firm</td>
  </tr>
  <tr>
      <th>Genito-Urinary</th>
      <td>Incontinence</td>
      <td>Retention</td>
      <td>Frequency</td>
      <td>Urgency</td>
  </tr>
  <tr>
      <td></td>
      <td>Dysuria</td>
      <td>Burning</td>
      <td>Nocturia</td>
      <td>Pain</td>
  </tr>
  <tr>
      <td></td>
      <td>Hematuria</td>
      <td colspan="3"></td>
  </tr>
  <tr>
      <th>Urine Color</th>
      <td>Yellow</td>
      <td>Amber</td>
      <td>Red</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Urine Characteristics</th>
      <td>Clear</td>
      <td>Cloudy</td>
      <td>Sediment</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Gastrointestinal</th>
      <td>Chest pain</td>
      <td>Cyanosis</td>
      <td>Dizziness</td>
      <td>Palpitation</td>
  </tr>
  <tr>
      <td></td>
      <td>Syncope</td>
      <td colspan="3"></td>
  </tr>
  <tr>
      <th>Peripheral Pulse</th>
      <td>Palpable</td>
      <td>Weak</td>
      <td>Absent</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Heart Beat</th>
      <td>Regular</td>
      <td>Irregular</td>
      <td colspan="3"></td>
  </tr>
  <tr>
      <th>Edema</th>
      <td>1+</td>
      <td>2+</td>
      <td>3+</td>
      <td>4+</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Respiratory</th>
      <td>SOBOE</td>
      <td>Orthopnea</td>
      <td>Cyanosis</td>
      <td>Dyspnea</td>
  </tr>
  <tr>
      <td></td>
      <td>Pain</td>
      <td>Nonproductive Cough</td>
      <td>Productive Cough</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Lung Sound</th>
      <td>Clear</td>
      <td>Crackles</td>
      <td>Wheezes</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Neuro</th>
      <td>Headache</td>
      <td>Vertigo</td>
      <td>Tremors</td>
      <td>Seizures</td>
  </tr>
  <tr>
      <td></td>
      <td>Unconsciousness</td>
      <td>Paralysis</td>
      <td>Uncoordinated</td>
      <td>Quadriplegia</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Musculoskeletal</th>
      <td>Weakness</td>
      <td>Spastic</td>
      <td>Flaccid</td>
      <td colspan="3"></td>
  </tr>
  <tr>
      <td></td>
      <td>Contracture</td>
      <td>Bedbound</td>
      <td>Wheelchair fast</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Nutritional</th>
      <td>Tube Feeding</td>
      <td>PEG Tube</td>
      <td>G Tube</td>
      <td colspan="3"></td>
  </tr>
  <tr>
      <td></td>
      <td>NGT</td>
      <td>Esophagostomy tube</td>
      <td>Jejunostomy tube</td>
      <td>Anorexia</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Skin</th>
      <td>Intact</td>
      <td>Rash</td>
      <td>Bruises</td>
      <td>Diaphoresis</td>
  </tr>
  <tr>
      <td></td>
      <td>Pallor</td>
      <td>Burn</td>
      <td>Cyanosis</td>
      <td>Pruritus</td>
  </tr>
  <tr>
      <td></td>
      <td>Abrasion</td>
      <td>Abscess</td>
      <td>Redness</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Wound</th>
      <td>Surgical</td>
      <td>Arterial Ulcer</td>
      <td>Venous Ulcer</td>
      <td>Decubitus Ulcer</td>
  </tr>
  <tr>
      <td></td>
      <td>Diabetic Ulcer</td>
      <td>Trauma wound</td>
      <td>Abrasion</td>
      <td colspan="2"></td>
  </tr>
  <tr>
      <th>Pain and Management</th>
      <td colspan="4"></td>
  </tr>
  <tr>
      <th>Medication</th>
      <td>Side effect</td>
      <td>Desired effect</td>
      <td>Nursing implication</td>
      <td colspan="2"></td>
  </tr>
</table>
<!-- نهاية الجدول -->

<p class="footer">Page 2 of 2 | F043-THHC Daily Nursing Visit Record/Reassessment</p>

</body>
</html>
