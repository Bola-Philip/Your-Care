<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Login Page</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-kTXkj3zdwT0I4DUdaG8ewHK1wq1esjU1Hpq9PJs8r/gT4/pSBD/4qmbu1802lySU" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center mb-3">Login</h2>
  <form action="{{ route('client.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name">
                </div>

                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" name="company_name" id="company_name">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <div class="form-group">
                    <label for="phone_description">Phone Description</label>
                    <textarea class="form-control" name="phone_description" id="phone_description"></textarea>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="email_description">Email Description</label>
                    <textarea class="form-control" name="email_description" id="email_description"></textarea>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>

                <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" name="address2" id="address2">
                </div>

                <div class="form-group">
                    <label for="web_site">Website</label>
                    <input type="text" class="form-control" name="web_site" id="web_site">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" id="country">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>

                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" name="province" id="province">
                </div>

                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" class="form-control" name="zip_code" id="zip_code">
                </div>

                <button type="submit" class="btn btn-primary">Create Client</button>
            </form>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-dR5t6IyqdCIsRGzK9krC9sfKmZzG0rxGhZz4kr0T5r/iSRrRc8j4uPeBPloHznQQ" crossorigin="anonymous"></script>
</body>
</html>
