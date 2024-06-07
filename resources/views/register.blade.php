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
                    <h2 style="text-align: center">Register</h2>
                </div>
                <br-2>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-3 col-form-label">Name</div>
                        <div class="col">
                            <input type="text" class="form-control" name="firstname" required>
                            First Name
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="lastname" required>
                            Last Name
                        </div>
                    </div>
                    <div class="text-align: center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">female</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="text" class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="Phonenumber" required>
                        </div>
                    </div>
        </form>
    </div>

</body>

</html>
<!--
<div class="form-group row m-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone number</label>
    <div class="col-sm-10">
        <input type="int" class="form-control " required>
    </div>
</div>
