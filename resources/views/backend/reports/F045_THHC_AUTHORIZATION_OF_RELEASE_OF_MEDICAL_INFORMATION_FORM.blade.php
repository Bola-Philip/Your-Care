<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="body">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">


<style>
  label{
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
  }
  p{

      font-weight: bold;
     font-family: 'Montserrat', sans-serif;
  }
    .frame {
  border: 1px solid black; 
  padding: 2px; 
  width: 100%;
  height: 250vh; 
  box-sizing: border-box; 

    }




  .frame2 {
  border: 1px solid black; 
  padding: 2px; 
  width: 50%;
  height: 200vh; 
  box-sizing: border-box; 
   }

   .frame3 {
   border: 1px solid black;
  padding: 2px; 
  width: 50%;
  height: 200vh; 
  box-sizing: border-box;  
  float: right;
   }

   .frame3,input {
    border: 1; /* إزالة الحواف */
    padding: 10px; /* التباعد الداخلي للعنصر */
 
    font-size: 16px; /* حجم الخط */
    
   }
.container {
    text-align: center; 
} 

.heading {
  margin: 0; 

}
h1
{
   font-family: 'Montserrat', sans-serif;

}
table {
    border-collapse: collapse; /* دمج الحدود */
  }
  td {
    padding: 10px; /* التباعد الداخلي للخلايا */
  }



  .rectangle {
    width: 200px; /* عرض المستطيل */
    height: 100px; /* ارتفاع المستطيل */
    border-radius: 50%; /* إضافة حواف دائرية */
    background-color: black; /* لون خلفية أبيض */
  }

  #myInput{
    width: 600px;
  }

</style>

<div class="frame">
<button onclick='myfanction()' class='btn-secondary'>طباعة الملف</button><br>
<a href="{{ route('print-pdf') }}" target="_blank">طباعة كـ PDF</a>


   <img src="dd.png" alt="logo" width="30%">
<div class="container">
 
<h1 class="heading">    AUTHORIZATION OF RELEASE OF MEDICAL INFORMATION FORM           </h1>
<h1 class="heading">         نموذج تفويض بإعطاء معلومات من السجل الطبي       </h1>

</div>

<div class="table">
<center>



<center>
</div>
<br>
<br>
<!-- القسم الايمن -->
<div class="frame3">
<p>
هذا التفويض يعتبر صالح للعمل بموجبه ما لم يحدد المريض / ولي الأمر تاريخ الانتهاء.
هذا التفويض يعتبر صالح للعمل بموجبه ما لم يحدد المريض / ولي الأمر تاريخ الانتهاء.

ينتهي العمل بموجب هذا التفويض بتاريخ   <input type="date">
في حال إجراء أي تعديل من قبل المريض/ ولي الأمر يجب تعبئه نموذج جديد.

يحق للجهات الحكومية الرسمية الاطلاع والحصول على معلومات المريض الطبية بدون موافقته وبموجب خطاب رسمي.

</p>
___________________________________________________________________________________
</p>
<label >انا الموقع أدناه (الاسم بالكامل):        </label> <input type="text">
</p>
___________________________________________________________________________________
</p>

<form>
  <input type="checkbox" name="gender" value="male">
  <label for="male">المريض</label><br>
  <input type="checkbox" name="gender" value="female">
  <label for="female">ولي الأمر </label> <input type="text">
  <br>
</form>
<p>أفوض توازن للرعاية الطبية المنزلية بالسماح للتالية أسمائهم بالاطلاع على سجلي الطبي وتزويدهم بالمعلومات والتقارير التي يحتاجونها وفي أي وقت:  </p>
<label for="">1_</label><input type="text">
<br>
<label for="">2_</label><input type="text">
<br>
<label for="">3_</label><input type="text">
<br>


<form>
  <input type="checkbox" name="gender" value="male">
  <label for="male">لا أحد غيري     </label><br>

</form>
<p>ويقتصر هذا التفويض على المعلومات التالية:</p>
<p>:  المعلومات الطبية الخاصة بمعالجة الحالات المرضية التالية </p>



<div class="input2">
<input type="text" id="myInput"><br><br>
<input type="text" id="myInput"><br><br>
<input type="text" id="myInput"><br><br>
</div>
<p> المعلومات الطبية التي تغطي الفترة</p>

<label>من </label><input type="text"><label > إلى </label><input type="text"><label> فقط</label>
<p>
 كافة المعلومات الموجودة بالسجل الطبي دون تحديد التواريخ
</p>
</p>
___________________________________________________________________________________
</p>
<label>الأسم: </label><input type="text"><br><br>
<label>التوقيع: </label><input type="text"><br><br>
<label>التاريخ: </label><input type="date"><br><br>
</div>


<!-- القسم اليساري من التاسك -->


<div class="frame2">
<p>
 This authorization is valid until the patient /legal Guardian specifies the expiry date.
 This authorization is expired on  <input type="date">     
Any new modification required by patient /legal Guardian; he/she should fill a new Authorization form.
Government department have right to access and release patients’ information without his/her consent.

</p>
_____________________________________________________________________________________
</p>
<label >I, the undersigned, (Full Name):</label> <input type="text">
<br>
</p>
_____________________________________________________________________________________
</p>

<form>
  <input type="checkbox" name="gender" value="male">
  <label for="male">Patient</label><br>
  <input type="checkbox" name="gender" value="female">
  <label for="female">legal Guardian </label> <input type="text">
  <br>
</form>
<p>Authorize THHC accessing my medical record or releasing my medical information and reports at any time by the following persons:  </p>
<label for="">1_</label><input type="text">
<br>
<label for="">2_</label><input type="text">
<br>
<label for="">3_</label><input type="text">
<br>


<form>
  <input type="checkbox" name="gender" value="male">
  <label for="male">No Body except me </label><br>

</form>
<p>This authorization is limited to the following:</p>
<p> Medical information related to the treatment of the following medical cases:</p>



<div class="input2">
<input type="text" id="myInput"><br><br>
<input type="text" id="myInput"><br><br>
<input type="text" id="myInput"><br><br>
</div>
<p> Only the medical information for the period </p>

<label>from </label><input type="text"><label > to </label><input type="text"><label> only</label>
<p>
 All medical information in the medical records without specific dates. <p>
  ___________________________________________________________________________________
</p>
</p>

</p>
</p>
<label>Print Name: </label><input type="text"><br><br>
<label>Signature: </label><input type="text"><br><br>
<label>Date: </label><input type="date"><br><br>



</div>


</div>




 
</body>
</html>

<script>





        function myfanction(){  
           body=document.getElementById('body').innerHTML;

        window.print()
    }

</script>