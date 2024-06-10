<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
        <form>
            <div class="row">
                <div class="col">
                    <h2 style="text-align: center">BMI Calculator</h2>
                </div>
                <br-2>
                    <hr>
                    <!-- Email -->
                    <div class="row mb-3">
                        <label for="email" class="col-md-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="row mb-3">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="row mb-3">
                        <label for="text" class="col-md-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone_number" required>
                        </div>
                    </div>
                    <!-- Name -->
                    <div class="row mb-3">
                        <div class="col-md-3 col-form-label">Name</div>
                        <div class="col">
                            <input type="text" class="form-control" name="first_name" required>
                            First Name
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="last_name" required>
                            Last Name
                        </div>
                    </div>
                    <!-- Male, Female -->
                    <div class="row mb-3">
                        <label for="sex" class="col-md-3">Sex</label>
                        <div class="col-sm-9 p-3">
                            <input type="radio"name="sex">
                            <label for="male" class="pe-3">Male</label>
                            <input type="radio" name="sex">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <!-- Birthday -->
                    <div class="row mb-3">
                        <label for="birthday" class="col-md-3 col-form-label">Birthday</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="birth_date" required>
                        </div>
                    </div>
                    <!-- Height -->
                    <div class="row mb-3">
                        <label for="text" class="col-md-3 col-form-label">Height (in)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="height" required>
                        </div>
                    </div>
                    <!-- Weight -->
                    <div class="row mb-3">
                        <label for="text" class="col-md-3 col-form-label">Weight (lb)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="weight" required>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="text-center m-3">
                        <button type="button" class="btn btn-success">Submit</button>
                        <a href="/" class="btn btn-danger">Cancel</a>
                    </div>

            </div>

</body>

</html>
