<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <style>
    
      table {
        width: 100%;
      }
      
      td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
      }
          
            
              input[type="text"] {
              border: none;
              background-color: transparent;
              outline: none;
              width: 100%;
          }
      
      </style>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script> -->
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <div class="image">
        <img src="./assetes/MEDICALTY.svg" alt="" />
      </div>
      <form action="" class="box">
        <div class="container">
          <div class="input">
            <label for="">File No:</label>
            <input type="text" />
          </div>
          <div class="input">
            <label for="">Family Name:</label>
            <input type="text" />
          </div>
          <div class="input">
            <label for=""> Name:</label>
            <input type="text" />
          </div>
          <div class="one_line">
            <div class="input">
              <label for=""> DOB:</label>
              <input type="text" />
            </div>
            <div class="input">
              <label for=""> Gender:</label>
              <input type="text" />
            </div>
          </div>
          <div class="input">
            <label for=""> MR#:</label>
            <input type="text" />
          </div>
        </div>
        <input type="submit" value="submit" />
      </form>
    </div>
    <h1 class="title">Referral form</h1>
    <input type="text" class="header_title" />
 
    <!-- <select name="mySelect">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
        <option value="option4">Option 4</option>
      </select> -->





<div class="land">
    <div class="landing">
        <form action="">
          <div>
            <h3>Referral form</h3>
            <div>
              <label>
                <input type="checkbox" name="Hospital" value="Hospital" />
                Hospital:
              </label>
              <label>
                <input type="checkbox" name="Phone call" value="Phone call" />
                Phone call
              </label>
              <label>
                <input
                  type="checkbox"
                  name="Tawazung Home Health Care APP"
                  value="Tawazung Home Health Care APP"
                />
                Tawazung Home Health Care APP
              </label>
              <label>
                <input type="checkbox" name="option4" value="option4" />
                <label for="others">Others:</label>
                <input type="text" id="others" name="others" />
              </label>
            </div>
          </div>
        </form>
      </div>
    <table style="border: 1px solid gray; border-collapse: collapse; width: 100%;">
        <tr>
          <td style="width: 25%; border: 1px solid gray;"><strong>midecal</strong></td>
          <td style="width: 75%; border: 1px solid gray;"></td>
        </tr>
        <tr>
          <td style="width: 25%; border: 1px solid gray;"><strong>current</strong></td>
          <td style="width: 75%; border: 1px solid gray;"></td>
        </tr>
      </table>
      <br>
    <div>Reason for Tawazun Home Care Referral:</div>

    <ul>
      
      <label>
          <input type="checkbox" name=" First Time Referral" value="First Time Referral" />
          First Time Referral
        </label>
        <br />
        <label>
          <input type="checkbox" name="Re Referral" value="Re Referral" />
          Re Referral
        </label>
        <br />
        <label>
          <input type="checkbox" name="Chronic Care" value="Chronic Care" />
          Chronic Care
        </label>
        <br />
        <label>
          <input type="checkbox" name="Stable for Discharge and Treatment Plan Can be managed at home" value="Stable for Discharge and Treatment Plan Can be managed at home" />
          Stable for Discharge and Treatment Plan Can be managed at home
        </label>
        <br />
        <label>
          <input type="checkbox" name=" Palliative Care" value="Palliative Care" />
          Palliative Care
        </label>
        <br />
        <label>
          <input type="checkbox" name="option4" value="option4" />
          <label for="others">Others:</label>
          <textarea id="others" name="others"></textarea></li>
        </label>
    </ul>
    <div>Service Needed :</div>
    <ul>
      <label>
          <input type="checkbox" name="Nursing" value="Nursing" />
          Nursing
        </label>
        <br />
        <label>
          <input type="checkbox" name="Physiotherapy" value="Physiotherapy" />
          Physiotherapy
        </label>
        <br />
        <label>
          <input type="checkbox" name="Respiratory" value="Respiratory" />
          Respiratory
        </label>
        <br />
        <label>
          <input type="checkbox" name="Lab work (Post discharge follow up investigation)" value="Lab work (Post discharge follow up investigation)" />
          Lab work (Post discharge follow up investigation)
        </label>
        <br />
        <label>
          <input type="checkbox" name="Nutritionist" value="Nutritionist" />
          Nutritionist
        </label>
    </ul>

    <div>Physician Care Plan :</div>
    <ul>
      <li>Medication Managment: (Please enter medication order in the patient ERM)</li>
          <ul>
               <li>IV medication</li>
               <ul>
                  <li><label for="others">Drug name</label>
                      <textarea id="others" name="others"></textarea></li>
                  <li><label for="others">Drug Dosage</label>
                      <textarea id="others" name="others"></textarea></li>
                  <li>Administration route</li>
                  <label>
                      <input type="checkbox" name="Intravenous" value="option1" />
                      Intravenous
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name="Intramuscular" value="option2" />
                      Intramuscular
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name="Subcutaneous" value="option3" />
                      Subcutaneous
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name="Oral" value="option4" />
                      Oral
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name="NGT" value="option5" />
                      NGT
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name=" PEG tube" value="option6" />
                      PEG tube
                    </label>
                    <br />
                    <label>
                      <input type="checkbox" name="Nebulization" value="option7" />
                      Nebulization
                    </label>
          
                  <li>Administration Frequency:</li>
                      <label>
                          <input type="checkbox" name=" Once daily" value="option1" />
                          Once daily
                        </label>
                      <br />
                        <label>
                          <input type="checkbox" name="Twice daily" value="option2" />
                          Twice daily
                        </label>
                    <br />
                      <label>
                      <input type="checkbox" name="option4" value="option4" />
                          <label for="others">Others:</label>
                          <textarea id="others" name="others"></textarea></li>
                      </label>
                  <li>
                      <label for="others">Start Date:</label>
                      <textarea id="others" name="others"></textarea>
                  </li>
                  <li>
                      <label for="others">End Date:</label>
                      <textarea id="others" name="others"></textarea>
                  </li>
                  
              </ul>
          </ul>
          
      <li>Nursing Assessment (Vital SingsTaking and RBS Monitoring)</li>
      <ul>
          <li>
              Frequency:                
            <ul>
              <label>
                  <input type="checkbox" name="Daily" value="option1" />
                  Daily
                </label>
              <label>
                  <input type="checkbox" name="Once Weekly" value="option1" />
                  Once Weekly
                </label>
                <label>
                  <input type="checkbox" name="Twice Weekly" value="option2" />
                  Twice Weekly
                </label>
                <label>
                  <input type="checkbox" name="Thirce Weekly" value="option1" />
                  Thirce Weekly
                </label>
                <label>
                  <input type="checkbox" name="option4" value="option4" />
                    <label for="others">Others:</label>
                    <textarea id="others" name="others"></textarea></li>
              </label>

             
        </ul>
        </ul>
        <li>Folyes Catheter Care:</li>
        <ul>
            <label>
              <input type="checkbox" name="Catheter Size :" value="option1" />
              Catheter Size :
              <textarea id="others" name="others"></textarea></li>
            </label>
                <label>
              <input type="checkbox" name="Type :" value="option2" />
              Type :
              <textarea id="others" name="others"></textarea></li>
            </label>
          <label>
          <input type="checkbox" name="option4" value="option4" />
              <label for="others">Date Inserted:</label>
              <textarea id="others" name="others"></textarea></li>
          </label>
        </ul>
        <div>Frequency of Changing :</div>
        <ul>
          <label>
            <input type="checkbox" name=" Monthly" value="option1" />
            Monthly
          </label>
          <label>
            <input type="checkbox" name="Every 3 months" value="option2" />
            Every 3 months
          </label>
        <label>
        <input type="checkbox" name="option4" value="option4" />
            <label for="others">Others:</label>
            <textarea id="others" name="others"></textarea></li>
        </label>
        </ul>  
        <div>Who will insert :</div>
        <ul>
          <label>
            <input type="checkbox" name="Nurse" value="option1" />
            Nurse
          </label>
          <label>
            <input type="checkbox" name="THHC Physician" value="option2" />
            THHC Physician
          </label>

          
    </ul>
    <li>Respiratory Care:</li> 
    <ul>
      <label>
        <input type="checkbox" name="Tracheostomy Care" value="option1" />
        Tracheostomy Care
      </label>
          <label>
        <input type="checkbox" name="BiPAP" value="option2" />
        BiPAP 
      </label>
    <label>
      <label>
          <input type="checkbox" name="CPAP" value="option1" />
          CPAP
        </label>
            <label>
          <input type="checkbox" name="Chest Physiotherapy" value="option2" />
          Chest Physiotherapy 
        </label>
      <label>
          <br>
    <input type="checkbox" name="option4" value="option4" />
        <label for="others">Others:</label>
        <textarea id="others" name="others"></textarea>
      </li>
    </label>
    <br>
    <label for="others">Duration of visit:</label>
        <textarea id="others" name="others"></textarea></li>
  </ul>
      <li>Wound Care: Type of Wound:</li> 
      <label>
          <input type="checkbox" name="Prusser injury" value="option1" />
              Prusser injury
      </label>
  </ul>





  <div>Prusser injury Stage :<textarea id="others" name="others"></textarea> <label>
      <input type="checkbox" name="option1" value="option1" />
      Location : <textarea id="others" name="others"></textarea>
      <label>
          <input type="checkbox" name="option1" value="option1" />
          Size : <textarea id="others" name="others"></textarea>
    </label> </div>

  </ul>
  <div>Prusser injury Stage :<textarea id="others" name="others"></textarea> <label>
      <input type="checkbox" name="Location" value="option1" />
      Location : <textarea id="others" name="others"></textarea>
      <label>
          <input type="checkbox" name="Size" value="option1" />
          Size : <textarea id="others" name="others"></textarea>
    </label> </div>

  </ul>
  <div>Prusser injury Stage :<textarea id="others" name="others"></textarea> <label>
      <input type="checkbox" name="Location" value="option1" />
      Location : <textarea id="others" name="others"></textarea>
      <label>
          <input type="checkbox" name="Size" value="option1" />
          Size : <textarea id="others" name="others"></textarea>
    </label>
    <label>
      <input type="checkbox" name="Surgical Wound" value="option1" />
      Surgical Wound
</label> </div>




<div>Surgical Wound Site :<textarea id="others" name="others"></textarea> <label>
  <input type="checkbox" name=" Surgical Wound Closure Type1" value="option1" />
  Surgical Wound Closure Type : <textarea id="others" name="others"></textarea>
  <label>
      <input type="checkbox" name="option1" value="option1" />
      Size : <textarea id="others" name="others"></textarea>
</label> </div>

</ul>
<div>Surgical Wound Site :<textarea id="others" name="others"></textarea> <label>
  <input type="checkbox" name="option1" value="option1" />
  Surgical Wound Closure Type : <textarea id="others" name="others"></textarea>
  <label>
      <input type="checkbox" name="option1" value="option1" />
      Size : <textarea id="others" name="others"></textarea>
</label> </div>

</ul>
<div>Surgical Wound Site:<textarea id="others" name="others"></textarea> <label>
  <input type="checkbox" name=" Surgical Wound Closure Type" value="option1" />
  Surgical Wound Closure Type : <textarea id="others" name="others"></textarea>
  <label>
      <input type="checkbox" name="size" value="option1" />
      size : <textarea id="others" name="others"></textarea>
</label>
<br>
<label>
  <input type="checkbox" name="option1" value="option1" />
  Others (Provide brief wound description)
</label> </div>



<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />



<div>Wound Dressing Order :</div>
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" />

<div>Frequency of Visit : <label>
  <input type="checkbox" name="option1" value="option1" />
  Daily
</label>
<label>
  <input type="checkbox" name="option2" value="option2" />
   Weekly
</label>
<label>
  <input type="checkbox" name="option1" value="option1" />
  Twice Weekly
</label>
<label>
  <input type="checkbox" name="option2" value="option2" />
  Thirce Weekly
</label>
<label>
  <input type="checkbox" name="option2" value="option2" />
  Others :
</label>
<input type="text" name="userInput" class="custom-input" style="border: none;
border-bottom: 1px solid black;
outline: none;
width: 100%;
font-size: 16px;" /></div>

<div>Duration Visit : <input type="text" name="userInput" class="custom-input" style="border: none;
  border-bottom: 1px solid black;
  outline: none;
  width: 70%;
  font-size: 16px;" /> </div>
 <ul>
   <li>Physiotherapist Care : </li>
   <ul>
      <input type="checkbox" name="option1" value="option1" />
      Daily
    </label>
    <label>
      <input type="checkbox" name="option2" value="option2" />
       Weekly
    </label>
    <label>
      <input type="checkbox" name="option1" value="option1" />
      Twice Weekly
    </label>
    <label>
      <input type="checkbox" name="option2" value="option2" />
      Thirce Weekly
    </label>
    <label>
      <input type="checkbox" name="option2" value="option2" />
      Others :
    </label>
    <input type="text" name="userInput" class="custom-input" style="border: none;
    border-bottom: 1px solid black;
    outline: none;
    width: 30%;
    font-size: 16px;" />
   </ul>
   <li>Palliative Care : </li>
      <input type="checkbox" name="option1" value="option1" />
      Pane Managment
    </label>
    <label>
      <input type="checkbox" name="option2" value="option2" />
       Stoma Core
    </label>
    <label>
      <input type="checkbox" name="option1" value="option1" />
      IV hydration
    </label>
    <label>
      <input type="checkbox" name="option1" value="option1" />
      Supportive Care by Nurses.
    </label>
    <br>
      <input type="checkbox" name="option2" value="option2" />
      Duration of Visit    :
    </label>
    <input type="text" name="userInput" class="custom-input" style="border: none;
    border-bottom: 1px solid black;
    outline: none;
    width: 30%;
    font-size: 16px;" />
    <li>Laboratory investigation Follow Up : <input type="checkbox" name="option1" value="option1" />
      Date of Sampling
    </label><input type="text" name="userInput" class="custom-input" style="border: none;
    border-bottom: 1px solid black;
    outline: none;
    width: 30%;
    font-size: 16px;" /> </li>
 </ul>
 <div id="editor"></div>
</div>
<button id="cmd">Generate PDF</button>

<script>
 var doc = new jsPDF();

 
 $('#cmd').click(function () {
    // قم بجمع القيم المحددة في القائمة المرتبطة بـ "Others"
    var othersValue = '';
    if ($('input[name="option4"]').is(':checked')) {
        othersValue = $('#others').val();
    }

    // بناء المحتوى الخاص بالصفحة
    // جمع قيمة الخلية الأولى في الجدول
    var midecalValue = $('input[name="cell1"]').val();
    // جمع قيمة الخلية الثانية في الجدول
    var currentValue = $('input[name="cell2"]').val();
    var content= '';
    

    if ($('input[name="Hospital"]').is(':checked')) {
        content += '<li>Hospital</li>';
    }
    if ($('input[name="Phone call"]').is(':checked')) {
        content += '<li>Phone call</li>';
    }
    if ($('input[name="Tawazung Home Health Care APP"]').is(':checked')) {
        content += '<li>Tawazung Home Health Care APP</li>';
    }
    if ($('input[name="option4"]').is(':checked')) {
    var othersValue = $('#others').val();
    content += '<li>Others: ' + othersValue + '</li>';
}

    content += '<li>';
    content += '<strong>midecal : </strong>';
    content += midecalValue ;
    content += '</li>';
    content += '<li>';

    content += '<strong>current : </strong>';
    content +=  currentValue  ;
    content += '</li>';


    // بناء المحتوى الخاص بالصفحة
    content += '<div>Reason for Tawazun Home Care Referral:</div>';

if ($('input[name="option1"]').is(':checked')) {
    content += '<li>First Time Referral</li>';
}

if ($('input[name="option2"]').is(':checked')) {
    content += '<li>Re Referral</li>';
}

if ($('input[name="option3"]').is(':checked')) {
    content += '<li>Chronic Care</li>';
}

if ($('input[name="option2"]').is(':checked')) {
    content += '<li>Stable for Discharge and Treatment Plan Can be managed at home</li>';
}

if ($('input[name="option3"]').is(':checked')) {
    content += '<li>Palliative Care</li>';
}

if ($('input[name="option4"]').is(':checked')) {
    var othersValue = $('#others').val();
    content += '<li>Others: ' + othersValue + '</li>';
}


if ($('input[name="option1"]').is(':checked')) {
    content += '<li>Nursing</li>';
}

if ($('input[name="option2"]').is(':checked')) {
    content += '<li>Physiotherapy</li>';
}

if ($('input[name="option3"]').is(':checked')) {
    content += '<li>Respiratory</li>';
}

if ($('input[name="option2"]').is(':checked')) {
    content += '<li>Lab work (Post discharge follow up investigation)</li>';
}

if ($('input[name="option3"]').is(':checked')) {
    content += '<li>Nutritionist</li>';
}


content += '<div>Physician Care Plan:</div>';
content += '<li>Medication Management: (Please enter medication order in the patient ERM)</li>';

content += '<li>IV Medication</li>';
content += '<li><label for="drugName">Drug Name:</label> <input type="text" name="drugName" id="drugName"></li>';
content += '<li><label for="drugDosage">Drug Dosage:</label> <input type="text" name="drugDosage" id="drugDosage"></li>';


content += '<div>Service Needed:</div>';
content += '<li>Administration Route:</li>';
if ($('input[name="Intravenous"]').is(':checked')) {
    content += '<li>Intravenous</li>';
}

if ($('input[name="Intramuscular"]').is(':checked')) {
    content += '<li>Intramuscular</li>';
}

if ($('input[name="Subcutaneous"]').is(':checked')) {
    content += '<li>Subcutaneous</li>';
}

if ($('input[name="Oral"]').is(':checked')) {
    content += '<li>Oral</li>';
}

if ($('input[name="NGT"]').is(':checked')) {
    content += '<li>NGT</li>';
}

if ($('input[name="PEG tube"]').is(':checked')) {
    content += '<li>PEG tube</li>';
}

if ($('input[name="Nebulization"]').is(':checked')) {
    content += '<li>Nebulization</li>';
}


var content = '<div>Service Needed:</div>';

if ($('input[name="Nursing"]').is(':checked')) {
    content += '<li>Nursing</li>';
}

if ($('input[name="Physiotherapy"]').is(':checked')) {
    content += '<li>Physiotherapy</li>';
}

if ($('input[name="Respiratory"]').is(':checked')) {
    content += '<li>Respiratory</li>';
}

if ($('input[name="Lab work (Post discharge follow up investigation)"]').is(':checked')) {
    content += '<li>Lab work (Post discharge follow up investigation)</li>';
}

if ($('input[name="Nutritionist"]').is(':checked')) {
    content += '<li>Nutritionist</li>';
}


content += '<div>Physician Care Plan:</div>';

content += '<li>Medication Management: (Please enter medication order in the patient ERM)</li>';

content += '<li>IV Medication</li>';
content += '<li><label for="drugName">Drug Name:</label> <input type="text" name="drugName" id="drugName"></li>';
content += '<li><label for="drugDosage">Drug Dosage:</label> <input type="text" name="drugDosage" id="drugDosage"></li>';

content += '<li>Administration Route:</li>';
if ($('input[name="Intravenous"]').is(':checked')) {
    content += '<li>Intravenous</li>';
}

if ($('input[name="Intramuscular"]').is(':checked')) {
    content += '<li>Intramuscular</li>';
}

if ($('input[name="Subcutaneous"]').is(':checked')) {
    content += '<li>Subcutaneous</li>';
}

if ($('input[name="Oral"]').is(':checked')) {
    content += '<li>Oral</li>';
}

if ($('input[name="NGT"]').is(':checked')) {
    content += '<li>NGT</li>';
}

if ($('input[name="PEG tube"]').is(':checked')) {
    content += '<li>PEG tube</li>';
}

if ($('input[name="Nebulization"]').is(':checked')) {
    content += '<li>Nebulization</li>';
}


content += '<li>Nursing Assessment (Vital Signs Taking and RBS Monitoring)</li>';

content += '<li>Frequency:</li>';
if ($('input[name="Daily"]').is(':checked')) {
    content += '<li>Daily</li>';
}

if ($('input[name="Once Weekly"]').is(':checked')) {
    content += '<li>Once Weekly</li>';
}

if ($('input[name="Twice Weekly"]').is(':checked')) {
    content += '<li>Twice Weekly</li>';
}

if ($('input[name="Thrice Weekly"]').is(':checked')) {
    content += '<li>Thrice Weekly</li>';
}

content += '<li><label for="others">Others:</label><textarea id="others" name="others"></textarea></li>';


content += '<li>Foley Catheter Care:</li>';

content += '<li>Catheter Size:</li>';
content += '<li><textarea id="catheterSize" name="catheterSize"></textarea></li>';

content += '<li>Type:</li>';
content += '<li><textarea id="catheterType" name="catheterType"></textarea></li>';

content += '<li><label for="dateInserted">Date Inserted:</label><textarea id="dateInserted" name="dateInserted"></textarea></li>';


content += '<div>Frequency of Changing:</div>';

if ($('input[name="Monthly"]').is(':checked')) {
    content += '<li>Monthly</li>';
}

if ($('input[name="Every 3 months"]').is(':checked')) {
    content += '<li>Every 3 months</li>';
}

content += '<li><label for="others">Others:</label><textarea id="others" name="others"></textarea></li>';


content += '<div>Who will insert:</div>';

if ($('input[name="Nurse"]').is(':checked')) {
    content += '<li>Nurse</li>';
}

if ($('input[name="THHC Physician"]').is(':checked')) {
    content += '<li>THHC Physician</li>';
}


content += '<li>Respiratory Care:</li>';

if ($('input[name="tracheostomyCare"]').is(':checked')) {
  content += '<li><label for="tracheostomyCare"><input type="checkbox" name="tracheostomyCare" value="option1" /> Tracheostomy Care</label></li>';
}

if ($('input[name="biPAP"]').is(':checked')) {
  content += '<li><label for="biPAP"><input type="checkbox" name="biPAP" value="option2" /> BiPAP</label></li>';
}

if ($('input[name="cpap"]').is(':checked')) {
  content += '<li><label for="cpap"><input type="checkbox" name="cpap" value="option1" /> CPAP</label></li>';
}

if ($('input[name="chestPhysiotherapy"]').is(':checked')) {
  content += '<li><label for="chestPhysiotherapy"><input type="checkbox" name="chestPhysiotherapy" value="option2" /> Chest Physiotherapy</label></li>';
}

if ($('input[name="others"]').is(':checked')) {
  var othersValue = $('textarea[name="others"]').val();
  content += '<li><label for="others">Others:</label>' + othersValue + '</li>';
}

content += '<br>';
content += '<label for="durationOfVisit">Duration of visit:</label>';
content += '<textarea id="durationOfVisit" name="durationOfVisit"></textarea></li>';


content += '<li>Wound Care: Type of Wound:</li>';
content += '<ul>';

if ($('input[name="prusserInjury"]').is(':checked')) {
  content += '<li><label for="prusserInjury"><input type="checkbox" name="prusserInjury" value="option1" /> Prusser injury</label></li>';
}


content += '<div>Prusser injury Stage:</div>';

if ($('input[name="location"]').is(':checked')) {
  var locationValue = $('textarea[name="location"]').val();
  content += '<label>';
  content += '<input type="checkbox" name="location" value="option1" />';
  content += 'Location:';
  content += '<textarea id="location" name="location"></textarea>';
  content += '</label>';
}

if ($('input[name="size"]').is(':checked')) {
  var sizeValue = $('textarea[name="size"]').val();
  content += '<label>';
  content += '<input type="checkbox" name="size" value="option1" />';
  content += 'Size:';
  content += '<textarea id="size" name="size"></textarea>';
  content += '</label>';
}

content += '<br>';

content += '<div>Surgical Wound:</div>';

if ($('input[name="surgicalWound"]').is(':checked')) {
  content += '<label>';
  content += '<input type="checkbox" name="surgicalWound" value="option1" />';
  content += 'Surgical Wound';
  content += '</label>';
}



    doc.fromHTML(content, 15, 15, {
        'width': 170,
    });
    doc.save('sample-file.pdf');
});
/*
 $('#cmd').click(function () {
     doc.fromHTML($('#content').html(), 15, 15, {
         'width': 170,
             'elementHandlers': specialElementHandlers
     });
     doc.save('sample-file.pdf');
 });
*/
 // This code is collected but useful, click below to jsfiddle link.
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

    <script>
      const form = document.querySelector(".box");

      form.onsubmit = function (e) {
        e.preventDefault();
        // Create a new jsPDF instance
        const doc = new jsPDF();

        // Get the HTML element you want to convert to PDF
        const element = document.querySelector(".container");

        // Convert the element to a canvas
        html2canvas(element).then(function (canvas) {
          // Get the data URL representing the canvas content
          const dataURL = canvas.toDataURL("image/jpeg");

          // Add the canvas image to the PDF document
          doc.addImage(dataURL, "JPEG", 20, 20, 190, 40);

          // Save the PDF
          doc.save("page.pdf");
        });
      };
    </script>
  </body>
</html>
