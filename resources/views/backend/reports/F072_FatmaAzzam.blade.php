<!DOCTYPE html>
<html>
<head>

<style>
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.overlay {

  margin: 20px;

}


th, td {

  padding: 8px;
}

tr:nth-child(even){background-color: #f7f4f4}
</style>
</head>
<body>

<br>
<form action="{{route('report.save')}}" method="POST" >
        @csrf

  <table id="mytable" >
    <tr>
        <h3 align="center">Notification of Communicable Disease</h3>
    </tr>

    <tr>
        <th>
            <div align=left> Name:<input type="text" name="name" ></div>
        </th>
        <th>
            <div align=right dir=rtl> الاسم: <input type="text" name="arabic_name" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> File Number:  <input type="integer" name="file_number" ></div>
        </th>
        <th >
            <div align=right dir=rtl> رقم الملف: <input type="integer" name="arabic_file_number" ></div>
        </th>
    </tr>

    <tr>
        <th>
             <span style="float:left">  Age:  <input type="integer" name="Age" size="30%"></span>
             <span style="float:right" dir=rtl> العمر : <input type="integer" name="arabic_Age" size="30%"></span>
        </th>
        <th>
            <span style="float:left">  Sex:  <input type="text" name="Sex" size="30%"></span>
            <span style="float:right" dir=rtl> الجنس : <input type="text" name="arabic_Sex" size="30%"></span>
       </th>
    </tr>

    <tr>
        <th>
            <div align=left> Nationality :  <input type="text" name="Nationality" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  الجنسيه: <input type="text" name="arabic_Nationality" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Location :  <input type="text" name="Location" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  الموقع: <input type="text" name="arabic_Location"></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Saudi National I.D./ Iqama :  <input type="text" name="idd"></div>
        </th>
        <th>
            <div align=right dir=rtl>  رقم بطاقه الأحوال\الاقامه: <input type="text" name="arabic_idd"></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left>  Occupation :  <input type="text" name="namOccupatione" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  المهنه: <input type="text" name="arabic_Occupation" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Place of work and Contact # :  <input type="text" name="place_of_work_and_contact"></div>
        </th>
        <th>
            <div align=right dir=rtl>  مكان العمل ورقم الهاتف: <input type="text" name="arabic_place_of_work_and_contact" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Address of living and contact # :  <input type="text" name="Address" "></div>
        </th>
        <th>
            <div align=right dir=rtl>  مكان السكن ورقم الهاتف: <input type="text" name="arabic_Address" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Name of husband or sponsor and phone number :  <input type="text" name="name_of_sponser" ></div>
        </th>
        <th>
            <div align=right dir=rtl>    اسم ولي الامر للمرأه او الكفيل لغير السعودي ورقم الهاتف:: <input type="text" name="arabic_name_of_sponser"></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> PHCC and file number :  <input type="text" name="PHCC" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  اسم المركز الصحي التابع له ورقم ملفه: <input type="text" name="arabic_PHCC"></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Date of onset of symptoms :  <input type="text" name="Date_of_onset_of_symptoms" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  تاريخ ظهور الاعراض: <input type="text" name="arabic_Date_of_onset_of_symptoms" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Date of Admission :  <input type="text" name="Date_of_Admission " ></div>
        </th>
        <th>
            <div align=right dir=rtl>   تاريخ الدخول: <input type="text" name="arabic_Date_of_Admission" ></div>
        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Diagnosis :  <input type="text" name="Diagnosis" ></div>
        </th>
        <th>
            <div align=right dir=rtl>  التشخيص: <input type="text" name="arabic_Diagnosis" ></div>
        </th>
    </tr>

    <tr>
        <th bgcolor="#FFFFFF">
            <span style="float:left"> Type of diagnosis :</span>
            <table>
                <tr>
                <td style="float:left" >
                    <input type="radio"  name="Type_of_diagnosis" >
                    <label  name="Confirmed_clinically_and_lab"  >Confirmed clinically and lab
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:left" bgcolor="#FFFFFF" >
                    <input type="radio"  name="Type_of_diagnosis" >
                    <label  name="Confirmed_clinically_only"  >Confirmed clinically only &emsp;&emsp;
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:left;">
                    <input type="radio"  name="Type_of_diagnosis"   >
                    <label  name="Suspected"  >Suspected
                    </label>
                </td>
                </tr>
            </table>
        </th>

        <th bgcolor="#FFFFFF" >
            <span style="float:right" dir=rtl>نوع التشخيص :</span>
            <table  dir=rtl style="float:right" >
                <tr>
                <td style="float:right" >
                    <input type="radio"  name="arabic_Type_of_diagnosis" value="">
                    <label  name="arabic_Confirmed_clinically_and_lab"  >مؤكد اكلينكيا ومخبريا
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right" bgcolor="#FFFFFF" >
                    <input type="radio"  name="arabic_Type_of_diagnosis" value="" >
                    <label  name="arabic_Confirmed_clinically_only"  >مؤكد اكلينكيا &emsp;&emsp;&emsp;&emsp;
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right;">
                    <input type="radio"  name="arabic_Type_of_diagnosis" value=""  >
                    <label  name="arabic_Suspected"  >اشتباه
                    </label>
                </td>
                </tr>
            </table>
        </th>
    </tr>

    <tr>
        <th bgcolor="#FFFFFF">
            <span style="float:left">Type of case :</span>
            <table>
                <tr>
                <td style="float:left" bgcolor="#FFFFFF" >
                    &emsp;&ensp; <input type="radio"  name="Type_of_case" value="" >
                    <label  name="Diseased_patient"  >Diseased patient
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:left" bgcolor="#FFFFFF">
                    &emsp;&ensp;  <input type="radio"  name="Type_of_case" value=""  >
                    <label  name="Carrier_state">Carrier state &emsp;&emsp;&emsp;
                    </label>
                </td>
                </tr>
            </table>
        </th >

        <th bgcolor="#FFFFFF">
            <span style="float:right;" dir=rtl>نوع الحاله :</span>
            <table  dir=rtl style="float:right" >
                <tr>
                <td style="float:right" >
                    &emsp;&ensp; &ensp;<input type="radio"  name="arabic_Type_of_case" value="">
                    <label  name="arabic_Diseased_patient"  >مصاب بالمرض
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right" bgcolor="#FFFFFF" >
                    &emsp;&ensp; &ensp;  <input type="radio"  name="arabic_Type_of_case" value="" >
                    <label  name="arabic_Carrier_state"  > حامل  &emsp;&emsp;&emsp;&emsp;
                    </label>
                </td>
                </tr>
            </table>
        </th>
    </tr>

    <tr>
        <th bgcolor="#FFFFFF">
         <span style="float:left">Vaccination State:</span>
         <table>
            <tr>
            <td style="float:left"  >
                <input type="radio"  name="Vaccination_State" value="" >
                <label  name="Vaccinated"  >Vaccinated
                </label>
            </td>
            </tr>
            <tr>
            <td style="float:left" bgcolor="#FFFFFF">
                <input type="radio"  name="Vaccination_State" value=""  >
                <label  name="not_Vaccinated"  >Not Vaccinated&emsp;
                </label>
            </td>
            </tr>
            <tr>
            <td style="float:left">
                <input type="radio"  name="Vaccination_State" value=""  >
                <label  name="not_applicable"  >Not applicable
                </label>
            </td>
            </tr>
            <tr>
            <td style="float:left" bgcolor="#FFFFFF">
                <input type="radio"  name="Vaccination_State" value=""  >
                <label  name="Unknown"  >Unknown &emsp;&emsp;&emsp;
                </label>
            </td>
            </tr>
         </table>
        </th>

        <th bgcolor="#FFFFFF">
            <span style="float:right" dir=rtl>الحاله التطعيميه  :</span>
            <table  dir=rtl style="float:right" >
                <tr>
                <td style="float:right" >
                    <input type="radio"  name="arabic_Vaccination_State" value="">
                    <label  name="arabic_Vaccinated"  >مطعم
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right" bgcolor="#FFFFFF" >
                    <input type="radio"  name="arabic_Vaccination_State" value="" >
                    <label  name="arabic_not_Vaccinated"  >غير مطعم &ensp; &ensp;&nbsp;
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right;">
                    <input type="radio"  name="arabic_Vaccination_State" value=""  >
                    <label  name="arabic_not_applicable"  >لا ينطبق
                    </label>
                </td>
                </tr>
                <tr>
                <td style="float:right;"  bgcolor="#FFFFFF">
                    <input type="radio"  name="arabic_Vaccination_State" value=""  >
                    <label  name="arabic_Unknown"  >غير معروف &ensp;&nbsp;&nbsp;
                    </label>
                </td>
                </tr>
            </table>


        </th>
    </tr>

    <tr>
        <th>
            <div align=left> Note:  <textarea  name="Note" rows="1" cols="50"> </textarea></div>
        </th>
        <th>
            <div align=right dir=rtl>  ملاحظه :<textarea  name="arabic_Note" rows="1" cols="50"> </textarea></div>
        </th>
    </tr>

    <tr>
        <th bgcolor="#FFFFFF">
            <div align=left>  Physician’s Name and Signature: _________________________________________  </div>
        </th>
    </tr>

  </table>

  <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Save And Print" onclick="myPrint('mytable')">
</form>


</body>

<script>
    function myPrint(mytable) {
        var printdata = document.getElementById(mytable);
       var data= document.write(printdata.innerHTML);
        newwin = window.open("");
        newwin.document.write(printdata.innerHTML);
        newwin.print();
        newwin.close();
    }
</script>
</html>

