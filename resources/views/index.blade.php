<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <form action="">
        <div class="container p-5">
            <div class="d-flex justify-content-center">
                <button class="button">
                    <span class="material-symbols-outlined">
                        <a href="/home" class="nav-link">arrow_back_ios</a>
                    </span>
                </button>
                <h3 class="me-4">My Profile</h3>
            </div>
            <br>
            <div class="text-center">
                <img src="https://i.pinimg.com/550x/00/18/63/001863cf6ea16b31e1000287ecac2822.jpg"
                    class="rounded-circle mx-auto d-block"style="width: 150px; height: 150px;" alt="...">
            </div>
            <br>
            <!-- Name -->
            <div class="text-center">
                <h4>Panupong Saipeach</h4>
            </div>
            <div class="text-center">
                <h4>male 30</h4>
            </div>
            <br>
            <br>
            <!-- Account info -->
            <div class="d-flex justify-content-center">
                <div>
                    <h4 class=""style="width: 150px;">Account info</h4>
                </div>
                <div class="button_right">
                    <span class="material-symbols-outlined text-end" style="width: 125px;">
                        <a href="#" class="nav-link">chevron_right</a>
                        </span>
                </div>
            </div>
            <br>
            <hr>
            <!-- BMI History -->
            <div class="d-flex justify-content-center">
                <div>
                    <h4 class=""style="width: 150px;">BMI History</h4>
                </div>
                <div class="button_right">
                    <span class="material-symbols-outlined text-end" style="width: 125px;">
                        <a href="#" class="nav-link">chevron_right</a>
                        </span>
                </div>
            </div>
            <br>
            <hr>
            <!-- Setting -->
            <div class="d-flex justify-content-center">
                <div>
                    <h4 class=""style="width: 150px;">Setting</h4>
                </div>
                <div class="button_right">
                    <span class="material-symbols-outlined text-end" style="width: 125px;">
                        <a href="#" class="nav-link">chevron_right</a>
                        </span>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <br>
            <!-- Log Out -->
            <div class="d-flex justify-content-center m-2">
                <div>
                    <button type="button" class="btn btn-outline-secondary btn-lg" style="width: 300px;">Log Out</button>
                </div>
            </div>




    </form>
</body>

</html>
