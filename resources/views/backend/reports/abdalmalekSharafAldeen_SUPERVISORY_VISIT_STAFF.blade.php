<link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css1/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css.map') }}">
<form  id='tab'>
    <img  src="{{ url('MEDICALTY.svg') }}" alt="">
<h3 class="text-center">SUPERVISORY VISIT STAFF </h3>
<hr class="firsthr">
<hr>
<select name="doctor" class="select-doctor" id="">
    <option selected  disabled>Chosse A Doctor</option>
    @foreach ($doctors as $doctor)
    <option value="{{ $doctor->id }}">{{ $doctor->name}}</option>
        
    @endforeach 
    

</select>

<select name="patient" class="select-patient" id="">
    <option selected disabled>Chosse A Patient</option>
    @foreach ($patient as $patient)
    <option value="{{ $patient->id }}">{{ $patient->name}}</option>
        
    @endforeach 
</select>

<div class="inputs">
    <label for="">Staff Name: </label> <input name="name" class="input" type="text" placeholder="_________________________________">
    <br><label for="">Badge: </label> <input name="badge"  class="input" type="text" placeholder="_________________________________">
    <br><label for="">Date: </label> <input name="date" class="input" type="date" placeholder="_________________________________">
</div>
    <table class="table" id="content">
    <thead class="thead">
        <tr>
        <th scope="col">MEETS CRITERIA</th>
        <th scope="col">SCORE</th>
        <th scope="col">COMMENTS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td class="fathertd"><label for="">1.</label> Plans for visits as per monthly schedule</td>
        <td><input name="input1" type="text"></td>
        <td><input name="input2" type="text"></td>
        </tr>
        
        <tr>
        <td ><label for="">1.1</label> Reviews goals and utility Bag completely packed.</td>
        <td><input name="input3" type="text" ></td>
        <td><input name="input4" type="text" ></td>
        </tr>

        <tr>
        
            <td><label for="">1.2</label> Takes the appropriate supplies for procedures
                </td>
                <td><input name="input5" type="text"></td>

                <td><input name="input6" type="text"></td>

            </tr>

            <tr>
                <td class="fathertd"><label for="">2.</label> Uses standard precautions, aseptic technique if needed
                    </td>
                    <td><input name="input7" type="text"></td>
                
                    <td><input name="input8" type="text"></td>

                </tr>

                <tr>
        
                    <td><label for="">2.1</label> Infection control ensured
                        </td>
                        <td><input name="input9" type="text"></td>
                        <td><input  name="input10" type="text"></td>
                    </tr>

                    <tr>
        
                        <td class="fathertd"><label for="">3.</label> Good communication skills and rapport
                            
                            </td>
                            <td><input name="input11" type="text"></td>

                            <td><input  name="input12" type="text"></td>

                        </tr>

                        <tr>
        
                        <td><label for="">3.1</label> Involvement of Patient Representative in procedures 
                            
                            </td>
                            <td><input name="input13" type="text"></td>

                            <td><input name="input14" type="text"></td>

                        </tr>

                        <tr>
        
                        <td><label for="">3.2</label> Professional approach of nurse to patient & family
                            
                            </td>
                            <td><input name="input15" type="text"></td>

                            <td><input name="input16" type="text"></td>

                        </tr>

                        <tr>
        
                        <td><label for="">3.3</label> Culturally sensitive 
                            
                            </td>
                            <td><input name="input17" type="text"></td>

                            <td><input name="input18" type="text"></td>

                        </tr>

                        <tr>
        
                        <td><label for="">3.4</label> Relevant history taking 
                            
                            </td>
                            <td><input name="input19" type="text" name=''></td>

                            <td><input name="input20" type="text" name=''></td>

                        </tr>

                        <tr>
        
                        <td><label for="">3.5</label> Progress of professionalism-Ethical and Etiquette  
                            
                            </td>
                            <td><input name="input21" type="text" name=''></td>

                            <td><input name="input22" type="text" name=''></td>

                        </tr>

                        
                        
                            

                            
                        <tr>
        
                            <td class="fathertd"><label for="">4.</label> Complete patient assessment  
                                
                                </td>
                                <td><input name="input23" type="text" name=''></td>
    
                                <td><input name="input24" type="text" name=''></td>
    
                            </tr>

                            
                        <tr>
        
                            <td><label for="">4.1</label> Evidence-based care  
                                
                                </td>
                                <td><input name="input25" type="text" name=''></td>
    
                                <td><input name="input26" type="text" name=''></td>
    
                            </tr>

                            
                        <tr>
        
                            <td><label for="">4.2</label> Competent care provided  
                                
                                </td>
                                <td><input name="input27" type="text" name=''></td>
    
                                <td><input name="input28" type="text" name=''></td>
    
                            </tr>


                            
                        <tr>
        
                            <td><label for="">4.3</label> Procedures done per policy  
                                
                            </td>
                <td><input name="input29" type="text" name=''></td>
    
                        <td><input name="input30" type="text" name=''></td>
    
                            </tr>
                            
                        <tr>
        
                            <td><label for="">4.4</label> Quality of care maintained 
                                
                                </td>
                                <td><input name="input31" type="text" name=''></td>
    
                                <td><input name="input32" type="text" name=''></td>
                            </tr>

                            
                        <tr>
        
            <td class="fathertd"><label for="">5.</label> Organized activities and uses time well, assessing priorities  
            </td>
                    <td><input name="input33" type="text"></td>
    
                                <td><input type="text" name="input34"></td>
    
                            </tr>


                        <tr>
        
                    <td><label for="">5.1</label> Appropriate planning   

            </td>
                <td><input type="text" name="input35"></td>
    
                <td><input type="text" name="input36"></td>
    
                    </tr>

                            <tr>
        
                    <td ><label for="">5.2</label> Decision making 
                                    
                            </td>
                        <td><input type="text" name="input37"></td>
        
                        <td><input type="text" name="input38"></td>
        
                        </tr>


                        <tr>
        
                                    <tr>
        
                        <td><label for="">5.3</label> Appropriate Intervention  
                                            
                            </td>
                        <td><input type="text" name="input39"></td>
                
                                <td><input type="text" name="input40"></td>
                
                                        </tr>


                                        <tr>
        
                            <td><label for="">5.4</label> Education to patient and caregiver, seek feedback demonstration  
                                
                                </td>
                                <td><input type="text" name="input41"></td>
                    
                                <td><input type="text" name='input42'></td>
                    
                                            </tr>


                                            <tr>
        
                                <td><label for="">5.5</label> Complete documentation on file   
                                                    
                                </td>
                            <td><input type="text" name='input43'></td>
                        
                            <td><input type="text" name='input44'></td>
                        
                                                </tr>

                                                <tr>
        
                            <td><label for="">5.6</label> Electronic documentation on Quadra Med  
                                                        
                            </td>
                            <td><input type="text"  name='input45'></td>
                            
                            <td><input type="text" name='input46'></td>
                            
                                                    </tr>

                                                    <tr>
        
                                <td class="fathertd"><label for="">6.</label> Identifies new problems/lack of patient progress.   
                                                            
                                </td>
                                <td><input type="text" name='input47'></td>
                                
                                <td><input type="text" name='input48'></td>
                                
                                                        </tr>


                                                        <tr>
        
                                        <td><label for="">6.1</label> Observational skills
                                                                
                                                                </td>
                                        <td><input type="text" name='input49'></td>
                                    
                                        <td><input type="text" name='input50'></td>
                                    
                                                            </tr>


                                                            <tr>
        
                                <td class="fathertd"><label for="">7.</label> Acknowledges and ensures patient rights 
                                    </td>
                                                                
                                <td><input type="text" name='input51'></td>
                                        
                                <td><input type="text" name='input52'></td>
                                        
                                                                </tr>
                                        <tr>
                                                                
                                    <td><label for="">7.1</label> Privacy and dignity ensured
                                                        </td>
                                                                                            
                                    <td><input type="text" name='input53'></td>
                                                                    
                                    <td><input type="text" name='input54'></td>
                                
                                        </tr>

                                        <tr>
                                                                
                                    <td class="fathertd"><label for="">8.</label> Privacy and dignity ensured
                                        </td>
                                
                                    <td><input type="text" name='input55'></td>
                                                    
                                <td><input type="text" name='input56'></td>
                                                                        
                                                    </tr>


                                <tr>
                                                                
                            <td><label for="">8.1</label> Medication Form reviewed and updated each visit
                                </td>
                        <td><input type="text" name='input57'></td>

                        <td><input type="text" name='input58'></td>                                                        
                                            </tr>

                        <tr>
                                                                
                        <td><label for="">8.2</label> Supply List reviewed and updated according to Patient’s Needs
                        </td>
            
                        <td><input type="text" name='input59'></td>
                        <td><input type="text" name='input60'></td>
                                                                                                                                
                                </tr>


                                    <tr>

                                <td><label for="">8.3</label> Pressure Ulcer Prevention maintained
                                </td>
            
                                <td><input type="text" name='input61'></td>
                                <td><input type="text" name='input62'></td>
                                                                                                                                
                                            </tr>

                                    <tr>
                                                                
                                <td><label for="">8.4</label> Involvement of Multimilitary team e.g., RT, SW, Dietician as needed
                                            </td>
            
                                <td><input type="text" name='input63'></td>
                                <td><input type="text" name='input64'></td>
                                                                                                                                
                                    </tr>

                        <tr>
                                                                
                            <td class="fathertd" style="text-align: end"><label for="">TOTAL for 32 items</label> 
                                </td>
            
                        <td></td>

                        <td></td>
                                                                                                                                
                                    </tr>

    </tbody>
    </table>


<div class="total">a<input type="text" name='input67' placeholder="____________________________">
<br>
<label for="">THHC MANAGER Signature</label></div>
<div class="instruction">
<p>
*Not done =2   *Fair =3   *Good =4   *Excellent =5
</p>
<p >
91-100 Excellent   //   81-90 Superior   //   71-80 Good   //   61-70 Fair   //   50-60 Poor  
</p>
</div>

    <footer>
    F062-THHC SUPERVISORY VISIT STAFF
    </footer>

    <style >

    img{
        width: 100px;
        position: absolute;
        margin-top: 5px;
        margin-left: 20px;
    }

    h3{
        margin-top: 5px;
    }
        .inputs{
            margin-left: 200px;
        margin-bottom: 20px;
        }
    .inputs label{
    font-weight: bold
    }
    .firsthr{
    border: 10px black solid
    }

    select{
        background-color: white;
        border-radius: 5px;
        width: 200px;
        height: 40px;
    }
    .select-doctor{
        position: absolute;
        margin-left: 1000px;
        margin-top:20px;
        
    }


    .select-patient{
        position: absolute;
        margin-left: 700px;
        margin-top:20px;
        
    }

    table{
        text-align: center;
        width: 1200px !important;
        margin-left: 100px;
    }
    thead{
        border: 1px #2b2929 solid;
        background-color: #4cd1fd;
        color: white

    }

    thead th{
        border: 1px #2b2929 solid;
    }
    
    td{
        width: 500px;
border: 1px #2b2929 solid;
    }

    tr .fathertd {
        text-align:left;
    }

    tr .fathertd label{
        font-weight: bold;
    }

    input{
        border: none;
        outline: none
    }
    .total {
        margin-left: 100px
    }

    .instruction{
        font-size: 20px;
        margin-left: 300px;
        margin-top: 25px;
    }

    .btnconvert{
        margin-left: 600px;
        margin-bottom: 60px
        
    }
    

    footer{
        margin-left: 1080px;
        padding:10px;
        margin-top: 50px;
        
    }
  </style>
    </form>

<a href="{{ route('report.storge') }}"><input type="button" class="btn btn-danger btnconvert" value="Create PDF" 
    id="btnPrint" onclick="printForm()" /></a>

    <script type="text/javascript">
function printForm() {
    var form = document.getElementById("tab");


    var formData = new FormData(form);
    var popupWin = window.open('', '_blank', 'width=800,height=800');
    popupWin.document.open();
    popupWin.document.write('<html><head><title>SUPERVISORY VISIT STAFF</title></head><body>');
        
        popupWin.document.write('<h3 class="text-center">SUPERVISORY VISIT STAFF</h3><hr class="firsthr"><hr>');
        popupWin.document.write('<select name="" class="select-doctor" id=""><option selected  disabled>'+ formData.get("doctor") +'</option></select>'+
        '<select name="" class="select-patient" id=""><option selected>'+ formData.get("patient") +'</option></select>'+
        '<div class="inputs"><label for="">Staff Name:</label><span>'+ formData.get("name") +'<span>'+
        '<br><label for="">Badge:</label> <span>'+ formData.get("badge") +'<span>'+
        '<br><label for="">Date: </label><span>'+ formData.get("date") +'<span></div>'+
        '<table class="table" id="content"><thead class="thead"><tr>'+
        '<th scope="col">MEETS CRITERIA</th><th scope="col">SCORE</th><th scope="col">COMMENTS</th></tr></thead><tbody>'+
        '<tr>'+
            '<td class="fathertd"><label for="">1.</label> Plans for visits as per monthly schedule</td>'+
'<td><span>'+formData.get("input1")+'</span></td>'+
'<td><span>'+formData.get("input2")+'</span></td></tr>'+
        '<tr>'+
        
            '<td ><label for="">1.1</label> Reviews goals and utility Bag completely packed.</td>'+
'<td><span>'+formData.get("input3")+'</span></td>'+
'<td><span>'+formData.get("input4")+'</span></td></tr>'+
        '<tr>'+
        '<td ><label for="">1.2</label> Takes the appropriate supplies for procedures.</td>'+
'<td><span>'+formData.get("input5")+'</span></td>'+
'<td><span>'+formData.get("input6")+'</span></td></tr>'+
'<tr>'+
        '<td class="fathertd"><label for="">2.</label> Uses standard precautions, aseptic technique if needed</td>'+
'<td><span>'+formData.get("input7")+'</span></td>'+
'<td><span>'+formData.get("input8")+'</span></td></tr>'+
    '<tr>'+
    '<td ><label for="">2.1</label> Infection control ensured </td>'+
'<td><span>'+formData.get("input9")+'</span></td>'+
'<td><span>'+formData.get("input10")+'</span></td></tr>'+
'<tr>'+
        '<td class="fathertd"><label for="">3.</label> Good communication skills and rapport</td>'+
'<td><span>'+formData.get("input11")+'</span></td>'+
'<td><span>'+formData.get("input12")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">3.1</label> Involvement of Patient Representative in procedures</td>'+
'<td><span>'+formData.get("input13")+'</span></td>'+
'<td><span>'+formData.get("input14")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">3.2</label> Professional approach of nurse to patient & family</td>'+
'<td><span>'+formData.get("input15")+'</span></td>'+
'<td><span>'+formData.get("input16")+'</span></td></tr>'+

'<tr>'+
    '<td <label for="">3.3</label> Culturally sensitive</td>'+
'<td><span>'+formData.get("input17")+'</span></td>'+
'<td><span>'+formData.get("input18")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">3.4</label> Relevant history taking</td>'+
'<td><span>'+formData.get("input19")+'</span></td>'+
'<td><span>'+formData.get("input20")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">3.5</label>Progress of professionalism-Ethical and Etiquette</td>'+
'<td><span>'+formData.get("input21")+'</span></td>'+
'<td><span>'+formData.get("input22")+'</span></td></tr>'+

'<tr>'+
        '<td class="fathertd"><label for="">4.</label> Complete patient assessment</td>'+
'<td><span>'+formData.get("input23")+'</span></td>'+
'<td><span>'+formData.get("input24")+'</span></td></tr>'+
'<tr>'+
    '<td ><label for="">4.1</label> Evidence-based care</td>'+
'<td><span>'+formData.get("input25")+'</span></td>'+
'<td><span>'+formData.get("input26")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">4.2</label> Competent care provided</td>'+
'<td><span>'+formData.get("input27")+'</span></td>'+
'<td><span>'+formData.get("input28")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">4.3</label> Procedures done per policy</td>'+
'<td><span>'+formData.get("input29")+'</span></td>'+
'<td><span>'+formData.get("input30")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">4.4</label> Quality of care maintained</td>'+
'<td><span>'+formData.get("input31")+'</span></td>'+
'<td><span>'+formData.get("input32")+'</span></td></tr>'+

'<tr>'+
        '<td class="fathertd"><label for="">5.</label> Organized activities and uses time well, assessing priorities</td>'+
'<td><span>'+formData.get("input33")+'</span></td>'+
'<td><span>'+formData.get("input34")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">5.1</label> Appropriate planning </td>'+
'<td><span>'+formData.get("input35")+'</span></td>'+
'<td><span>'+formData.get("input36")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">5.2</label> Decision making </td>'+
'<td><span>'+formData.get("input37")+'</span></td>'+
'<td><span>'+formData.get("input38")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">5.3</label> Appropriate Intervention</td>'+
'<td><span>'+formData.get("input39")+'</span></td>'+
'<td><span>'+formData.get("input40")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">5.4</label> Education to patient and caregiver, seek feedback demonstration</td>'+
'<td><span>'+formData.get("input41")+'</span></td>'+
'<td><span>'+formData.get("input42")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">5.5</label> Complete documentation on file</td>'+
'<td><span>'+formData.get("input43")+'</span></td>'+
'<td><span>'+formData.get("input44")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">5.6</label> Electronic documentation on Quadra Med</td>'+
'<td><span>'+formData.get("input45")+'</span></td>'+
'<td><span>'+formData.get("input46")+'</span></td></tr>'+

'<tr>'+
        '<td class="fathertd"><label for="">6.</label> Identifies new problems/lack of patient progress.</td>'+
'<td><span>'+formData.get("input47")+'</span></td>'+
'<td><span>'+formData.get("input48")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">6.1</label> Observational skills</td>'+
'<td><span>'+formData.get("input49")+'</span></td>'+
'<td><span>'+formData.get("input50")+'</span></td></tr>'+


'<tr>'+
        '<td class="fathertd"><label for="">7.</label> Acknowledges and ensures patient rights</td>'+
'<td><span>'+formData.get("input51")+'</span></td>'+
'<td><span>'+formData.get("input52")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">7.1</label> Privacy and dignity ensured</td>'+
'<td><span>'+formData.get("input53")+'</span></td>'+
'<td><span>'+formData.get("input54")+'</span></td></tr>'+


'<tr>'+
        '<td class="fathertd"><label for="">8.</label> Privacy and dignity ensured</td>'+
'<td><span>'+formData.get("input55")+'</span></td>'+
'<td><span>'+formData.get("input56")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">8.1</label> Medication Form reviewed and updated each visit </td>'+
'<td><span>'+formData.get("input57")+'</span></td>'+
'<td><span>'+formData.get("input58")+'</span></td></tr>'+



'<tr>'+
    '<td ><label for="">8.2</label> Supply List reviewed and updated according to Patient’s Needs </td>'+
'<td><span>'+formData.get("input59")+'</span></td>'+
'<td><span>'+formData.get("input60")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">8.3</label> Pressure Ulcer Prevention maintained </td>'+
'<td><span>'+formData.get("input61")+'</span></td>'+
'<td><span>'+formData.get("input62")+'</span></td></tr>'+


'<tr>'+
    '<td ><label for="">8.4</label> Involvement of Multimilitary team e.g., RT, SW, Dietician as needed </td>'+
'<td><span>'+formData.get("input63")+'</span></td>'+
'<td><span>'+formData.get("input64")+'</span></td></tr>'+

'<tr>'+
    '<td ><label for="">TOTAL for 32 items</label></td><td></td>'+
'<td></td></tr>'+

'</tbody></table>'+

'<div class="total"><span>'+formData.get("input67")+'</span><br>'+
'<label for="">THHC MANAGER Signature</label></div>'+


'<div class="instruction"><p>'+
'*Not done =2   *Fair =3   *Good =4   *Excellent =5</p>'+
'<p>91-100 Excellent   //   81-90 Superior   //   71-80 Good   //   61-70 Fair   //   50-60 Poor</p></div>'

    +'<footer>F027-THHC Morse Fall Scale</footer>');
    
    popupWin.document.write('<style >h3{margin-top: 5px;}'
    +'.inputs{margin-left: 200px;margin-bottom: 20px;}'
    +'.inputs label{font-weight: bold}'
    +'.firsthr{border: 10px black solid}'
    +'select{background-color: white;border-radius: 5px;width: 200px;height: 40px;}'
    +'.select-doctor{position: absolute;margin-left: 1000px;margin-top:20px;}'
    +'.select-patient{position: absolute;margin-left: 700px;margin-top:20px;}'

    +'table{text-align: center;width: 1200px !important;margin-left: 100px;}'
    +'thead{border: 1px #2b2929 solid;background-color: #4cd1fd;color: white}'
    +'thead th{border: 1px #2b2929 solid;}'
    +'td{width: 500px;border: 1px #2b2929 solid;}tr'
    +'.fathertd{text-align:left;}tr .fathertd label{font-weight: bold;}.total {margin-left: 100px}.instruction{font-size: 20px;margin-left: 300px;margin-top: 25px;}footer{margin-left: 1080px;padding:10px;margin-top: 50px;}</style>');
    
    popupWin.document.write('</body></html>')
    
    popupWin.document.close();
    popupWin.print();
    }
</script>






