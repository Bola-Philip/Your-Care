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
    .frame {
  border: 1px solid black; 
  padding: 2px; 
  width: 100%;
  height: 200vh; 
  box-sizing: border-box; 
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

#myinput{
  width: 800px;
}

  input {

    width: 200px;


    border: 1; /* إزالة الحواف */
    padding: 10px; /* التباعد الداخلي للعنصر */
 
    font-size: 16px; /* حجم الخط */

  }
  .rectangle {
    width: 200px; /* عرض المستطيل */
    height: 100px; /* ارتفاع المستطيل */
    border-radius: 50%; /* إضافة حواف دائرية */
    background-color: black; /* لون خلفية أبيض */
  }
</style>
<div class="frame">
<button onclick='myfanction()' class='btn-secondary'>طباعة الملف</button><br>
<a href="{{ route('print-pdf') }}" target="_blank">طباعة كـ PDF</a>
   <img src="dd.png" alt="logo" width="30%">
<div class="container">
  <h1 class="heading">  Progress Notes  </h1>
</div>

<div class="table">
<center>


<br>
<br>
<br>
<table border 1>
  <tr>
    <td>Date & Time</td>
    <td id ="myh">Progress Notes</td>
    <td> Signature & ID </td>
  </tr>
  <tr>
    <td><input type="text"></td>
    <td><input type="text" id="myinput"></td>
    <td><input type="text"></td>
  </tr>

</table>
</center>
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