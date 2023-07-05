<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1 style="text-align: center;">PLAN OF CARE (Continuation Sheet)</h>

    <style>
        .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 10px;
    }

    table {
        width: 100%;
    }

    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    td:nth-child(1),
    td:nth-child(2) {
        width: 12.5%;
    }

    td:nth-child(3) {
        width: 75%;
    }

    .image-container {
        border: 1px solid black;
    }

    .user-image {
        width: 100%;
        height: auto;
        border: 1px solid black;
    }
    .main{
        padding: 10px 40px;
    }
    </style>
    <div class="main">
        
    <div class="container">
        <div class="table-container">
            <table >
                <tr>
                    <td>Date</td>
                    <td>Initials</td>
                    <td>References: Nursing Standard/Clinical Paths/patient Teaching Standard</td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"   id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                    <td><input type="text" name="cell1"  id = "inp"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                    <td><input type="text" name="cell1"    id = "inp"></td>
                </tr>
            </table>
        </div>
        <div class="image-container">
            <label for="user-image-input"></label>
            <input id="user-image-input" type="file" accept="image/*" onchange="loadImage(event)">
            <img id="user-image" class="user-image" src="#" alt="">
        </div>
    </div>
    
    <script>
        function loadImage(event) {
            var image = document.getElementById('user-image');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
       
    </div>
    




   <!-- <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    
        td:nth-child(1), td:nth-child(2) {
            width: 12.5%;
        }
    
        td:nth-child(3) {
            width: 75%;
        }
    </style>-->
    
    
    
    <br>
    <p>
    </p>
    <br>



    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }
    
        th, td {
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
    <div class="main">
    <table>
        <tr>
            <th>Date</th>
            <th>Initials</th>
            <th>Patient Problems/need</th>
            <th>Patient Out come</th>
            <th>Action Plan</th>
            <th>Date Reviewed</th>
            <th>Date Met</th>
            <th>Initials</th>
        </tr>
        <tr>
            <td><input type="text" name="cell1"   id = "inp"></td>
            <td><input type="text" name="cell2"   id = "inp"></td>
            <td><input type="text" name="cell3"   id = "inp"></td>
            <td><input type="text" name="cell4"   id = "inp"></td>
            <td><input type="text" name="cell5"   id = "inp"></td>
            <td><input type="text" name="cell6"   id = "inp"></td>
            <td><input type="text" name="cell7"   id = "inp"></td>
            <td><input type="text" name="cell8"   id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"   id = "inp"></td>
            <td><input type="text" name="cell2"   id = "inp"></td>
            <td><input type="text" name="cell3"   id = "inp"></td>
            <td><input type="text" name="cell4"   id = "inp"></td>
            <td><input type="text" name="cell5"   id = "inp"></td>
            <td><input type="text" name="cell6"   id = "inp"></td>
            <td><input type="text" name="cell7"   id = "inp"></td>
            <td><input type="text" name="cell8"   id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"   id = "inp"></td>
            <td><input type="text" name="cell2"   id = "inp"></td>
            <td><input type="text" name="cell3"   id = "inp"></td>
            <td><input type="text" name="cell4"   id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"   id = "inp"></td>
            <td><input type="text" name="cell6"   id = "inp"></td>
            <td><input type="text" name="cell7"   id = "inp"></td>
            <td><input type="text" name="cell8"   id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"    id = "inp"></td>
            <td><input type="text" name="cell2"    id = "inp"></td>
            <td><input type="text" name="cell3"    id = "inp"></td>
            <td><input type="text" name="cell4"    id = "inp"></td>
            <td><input type="text" name="cell5"    id = "inp"></td>
            <td><input type="text" name="cell6"    id = "inp"></td>
            <td><input type="text" name="cell7"    id = "inp"></td>
            <td><input type="text" name="cell8"    id = "inp"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        
    </table>
</div>
    


<br>
<div></div> <p></p> <p></p>
<br>

    <div class="main">

    <table>
        <tr>
            <th>Date</th>
            <th>Initials</th>
            <th>Patient Problems/need</th>
            <th>Patient Out come</th>
            <th>Action Plan</th>
            <th>Date Reviewed</th>
            <th>Date Met</th>
            <th>Initials</th>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
        <tr>
            <td><input type="text" name="cell1"></td>
            <td><input type="text" name="cell2"></td>
            <td><input type="text" name="cell3"></td>
            <td><input type="text" name="cell4"></td>
            <td><input type="text" name="cell5"></td>
            <td><input type="text" name="cell6"></td>
            <td><input type="text" name="cell7"></td>
            <td><input type="text" name="cell8"></td>
        </tr>
    </table>
    </div>

</body>
</html>