<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 20vh;">
        <!-- Content to be centered -->
        <h3>Patient Confidentiality Statement</h3>
    </div>
    <form id="form" class="container" action="{{route('report.store')}}" >
        <label>I, </label> <input id="name" class="input-field" type="text" placeholder="Patient Name"> <label> Badge
            No</label> <input id="patID" class="input-field" type="number" placeholder="Patient ID">
        <p>OF the Tawazun Home Health Care, hereby agree to maintain, respect and protect patient’s confidentiality at
            all times. I understand that I am not to engage in:</p>
        <ul>
            <li>Any discussion of patient's medical' condition outside the THHC; </li>
            <li>Conference not pertaining to the patient’s plan of care;</li>
            <li>Photography (including video graph and cinematography) without patient's consent or</li>
            <li>Removal of any patient related material that is duly the property of THHC for my own personal gain or
                pleasure.</li>
        </ul>
        <br>
        <p>I further understand that violation of any of the above can result in my immediate termination from THHC.
        </p>
        <div>
            <input id="Fsign" class="signnature" type="text">
        </div>
        <div class="date">
            <input id="Fdate" class="input-date" type="date">
        </div>
        <div class="style-signature">
            <span>Signature</span>
            <p>Date</p>

        </div>
        <div>
            <div>
                <input id="Ssign" class="signnature" type="text">
            </div>
            <div class="date">
                <input id="Sdate" class="input-date" type="date">
            </div>
        </div>
        <div class="style-signature">
            <span>THHC Manager</span>
            <p>Date</p>

        </div>
        <button id="button" type="submit">submit</button>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
