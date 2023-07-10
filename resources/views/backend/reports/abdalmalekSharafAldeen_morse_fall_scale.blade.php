 <link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css1/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css.map') }}">



    <form id="tab">

        <img id="img" src="{{ url('MEDICALTY.svg') }}" alt="">
        <h3 class="text-center">Morse Fall Scale</h3>
<table class="table" id="content">
    <thead class="thead">
        <tr>
        
        <th scope="col">item</th>
        <th scope="col">scale</th>
        <th scope="col">scoring</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>1. History of falling; immediate or within 3 months</td>
        <td>
            No               0 
            <br>

            Yes             25
            </td>
        <td><input type="text"  name="input1" class="inputtotal" placeholder="__________"></td>
        </tr>
        
        <tr>
        <td>2. Secondary diagnosis</td>
        <td>No                0
            <br>

            Yes              15
            </td>
            <td><input type="text" name="input2" class="inputtotal" placeholder="__________"></td>
        </tr>

        <tr>
        
            <td>3. Ambulatory aid 
                Bed rest/nurse assist 
                Crutches/cane/walker 
                Furniture
                </td>
            <td>
                0 
                <br>
                15
                <br>

                30

                </td>
                <td><input type="text" name="input3" class="inputtotal" placeholder="__________"></td>
            </tr>


            <tr>
                <td>4. IV/Heparin Lock
                    </td>
                <td>
                    No            0
            <br>

            Yes              15
    
                    </td>
                    <td><input type="text" name="input4" class="inputtotal" placeholder="__________"></td>
                </tr>


                <tr>
        
                    <td>5. Gait/Transferring 
                        Normal/bedrest/immobile
                        Weak 
                        Impaired
                        
                        </td>
                    <td>
                        0 
                        <br>
                        10
                        <br>
        
                        20
        
                        </td>
                        <td><input type="text" class="inputtotal" name="input5" placeholder="__________"></td>
                    </tr>


                    <tr>
        
                        <td>6.Mental status 
                            Oriented to own ability 
                            Forgets limitations
                            
                            </td>
                        <td>
                            0 
                            <br>
                            15
                            
                            </td>
                            <td><input type="text" name="input6" class="inputtotal" placeholder="__________"></td>
                        </tr>

    </tbody>
    </table>

<div class="total"><label for="">TOTAl:</label><span name='total'  id="total">__________</span></div>



<h5>Sample Risk Level</h5>
  <table class="table" id="content1">
    <thead class="thead">
      <tr>
        
        <th scope="col">Risk Level</th>
        <th scope="col">MFS Score</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <th >No Risk</th>
        <td>0 - 24</td>
        <td>Good Basic Nursing Care</td>
      </tr>
      <tr>
        
        <th>Low Risk</th>
        <td>25 - 50</td>
        <td>Implement Standard Fall Prevention Interventions</td>
    </tr>
    
    <tr>
        
        <th>High Risk</th>
        <td>≥ 51</td>
        <td>Implement High Risk Fall Prevention Interventions</td>
    </tr>
    </tbody>
    </table>

    

    <footer>
        F027-THHC Morse Fall Scale
    </footer>


<style>
img{
        width: 100px;
        position: absolute;
        margin-top: 5px;
        margin-left: 20px;
    }

    h3{
        margin-top: 5px;
    }

    table{
        margin-top: 30px;

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

    input{
        border: none;
        outline: none
    }
    .total {
        margin-left: 1100px
    }

    .total label{
        font-weight: bold
    }

    h5{
        font-weight: bold;
        margin-left: 100px
    }

    tbody th{
        border: 1px #2b2929 solid;

    }

    .btnconvert{
        margin-left: 600px
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

    var arr = document.getElementsByClassName('inputtotal');
var tot=0;
for(var i=0;i<arr.length;i++){
    if(parseFloat(arr[i].value))
        tot += parseFloat(arr[i].value);
}
var total = document.getElementById('total').innerHTML=tot;

    function printForm() {
    var form = document.getElementById("tab");

    var formData = new FormData(form);
    var popupWin = window.open('', '_blank', 'width=800,height=800');
    popupWin.document.open();
    popupWin.document.write('<html><head><title>Morse Fall Scale</title></head><body><h3>Morse Fall Scale</h3>'+
        '<table class="table" id="content"><thead class="thead"><tr>'+
        '<th scope="col">item</th><th scope="col">scale</th><th scope="col">scoring</th></tr></thead><tbody>'+
        '<tr>'+
        '<td>1. History of falling; immediate or within 3 months</td><td>No               0<br>Yes             25</td><td>'+ formData.get("input1") +'</td></tr>'+
        '<tr>'+
        '<td>2. Secondary diagnosis</td><td>No               0<br>Yes             15</td><td>'+ formData.get("input2") +'</td></tr>'+
        '<tr>'+
        '<td>3. Ambulatory aid Bed rest/nurse assist Crutches/cane/walker Furniture</td>'+
        '<td>0<br>15<br>30</td><td>'+ formData.get("input3") +'</td></tr>'+
        '<tr>'+
        '<td>4. IV/Heparin Lock</td>'+
        '<td>No               0<br>Yes             15</td><td>'+ formData.get("input4") +'</td></tr>'+'<tr>'+
        '<td>5. Gait/Transferring Normal/bedrest/immobile Weak Impaired'+
        '<td>  0<br>10<br>20</td><td>'+ formData.get("input5") +'</td></tr>'+'<tr>'+
        '<td>6.Mental status Oriented to own ability Forgets limitations</td>'+
        '<td>No               0<br>Yes             15</td><td>'+ formData.get("input6") +'</td></tr></table>'+
    
        '<div class="total"><label name= for="">TOTAl:</label><span  id="total">'+ total +'</span></div>'

        +'<h5>Sample Risk Level</h5><table class="table" id="content1"><thead class="thead">'
        +'<tr><th scope="col">Risk Level</th><th scope="col">MFS Score</th>'
        +'<th scope="col">Action</th></tr></thead><tbody>'
        +'<tr><th >No Risk</th><td>0 - 24</td><td>Good Basic Nursing Care</td></tr>'
        +'<tr><th>Low Risk</th><td>25 - 50</td>'
        +'<td>Implement Standard Fall Prevention Interventions</td></tr>'
    +'<tr><th>High Risk</th><td>≥ 51</td>'
        +'<td>Implement High Risk Fall Prevention Interventions</td></tr></tbody></table>'

    +'<footer>F027-THHC Morse Fall Scale</footer>'+
    
        '<style>h3{margin-top: 5px;}'
        +'table{margin-top: 30px;text-align: center;width: 1200px !important;margin-left: 100px;}'
        +'thead{border: 1px #2b2929 solid;background-color: #4cd1fd;color: white}'
    
        +'thead th{border: 1px #2b2929 solid;}'
        +'td{width: 500px;border: 1px #2b2929 solid;}label{margin-left: 1100px} label{font-weight: bold}h5{font-weight: bold;margin-left: 100px;}'
+'tbody th{border: 1px #2b2929 solid;}.btnconvert{margin-left: 600px;}footer{margin-left: 1080px;padding:10px;margin-top: 50px;}</style>');
        popupWin.document.close();
      popupWin.print();
    }
  </script>











  