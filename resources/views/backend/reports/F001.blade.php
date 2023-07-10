<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tawazun</title>
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
        }

        nav h1 {
            margin: 0;
            margin-left: 58px;
            padding: 0;
            font-size: 30px;
        }

        nav p {
            margin: 0px;
            margin-right: 58px;
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
            width: 90%;
            margin: auto;
            margin-bottom: 50px;
        }

        form table {
            width: 100%;
            margin: auto;
            margin-top: 20px;
            border-collapse: collapse;
        }

        form table th {
            background-color: rgb(0, 160, 240);
            font-size: 20px;
            padding: 10px;
            color: white;
        }

        form table td {
            padding: 10px;
            background-color: white;
            vertical-align: top;
        }

        form table td,
        form table th {
            border: 1px solid black;
        }

        form table textarea {
            width: 96%;
            height: 360px;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 5px;
            resize: none;
        }

        form input:not([type=submit]) {
            width: 96%;
            display: inline-block;
            margin: auto;
            font-size: 16px;
            border: none;
            outline: none;
        }

        form input[type=submit] {
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

        form input[type=submit]:hover {
            background-color: rgb(36, 138, 36);
        }

        form .signature {
            display: flex;
            justify-content: space-between;
        }

        form .signature input {
            width: 500px;
            border: none;
            outline: none;
            background-color: transparent;
            font-size: 18px;
        }

        form .signature .doctor,
        form .signature .patient {
            width: 50%;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <h1>Tawazun</h1>
        <p>follow up progress notes</p>
        <textarea placeholder="Patient label"></textarea>
    </nav>

    <form action="" onsubmit="generatePDF()">
        <div class="form-data">
            <table>
                <tr>
                    <th>Date & Time</th>
                    <th>Progress Notes</th>
                    <th>Signature & ID</th>
                </tr>
                <tr>
                    <td><input type="datetime-local" required></td>
                    <td>
                        <textarea placeholder="Progress Notes" required></textarea>
                    </td>
                    <td>
                        <textarea placeholder="Signature & ID" required></textarea>
                    </td>
                </tr>
            </table>
            <hr style="margin: 20px 0px; border-color:rgb(0, 160, 240)">
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
            <hr style="margin: 20px 0px; border-color:rgb(0, 160, 240)">
        </div>
        <input type="submit" value="Generate PDF">
    </form>
    </div>

    <script>
        function generatePDF(ev) {
            var x = window.print();
            ev.preventDefault();
        }
    </script>
</body>

</html>
