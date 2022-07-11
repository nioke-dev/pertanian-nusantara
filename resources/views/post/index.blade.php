<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>

    <!-- {{-- bootstrap CDN --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/style/postHome.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8" style="padding-left: 20px">
                <img src="img/Logo.svg" class="logo" width="100%">
                <span class="perkenalan">Hai User!</span>
                <span class="page">Dashboard</span>
            </div>

            <div class="col-4" style="padding-right: 20px">
                <button class="btn btn-light btn-md btn-rounded-full button-notif">1 <i
                        class="fa-solid fa-bell ms-2"></i></button>
            </div>
        </div>
    </div>
    <div class="layer1">
        <div class="container" style="margin-bottom: 200px;">
            <span class="fw-bold">Lahan Luas 200 x 500</span>

            <div class="row mt-3">
                <div class="col-6">
                    <div class="edit-button">
                        <i class="fa-solid fa-pen-to-square" style="font-size: 25px;"></i> Edit
                    </div>
                </div>
                <div class="col-6">
                    <div class="up-button">
                        <i class="fa-solid fa-upload"></i> Up Tanaman
                    </div>
                </div>
            </div>
            <h2 class="fw-bold mt-3">Tanaman</h2>
            <div class="row" style="margin-bottom: 100px">
                <div class="container-fluid">
                    <div class="tanaman-child mb-3">
                        <span>Tanggal Tanam : 22-06-2020</span>
                        <br>
                        <span>Kondisi : Normal <i class="fas fa-check-to-slot "
                                style="color: rgb(164, 164, 16);"></i></span>
                    </div>
                    <div class="tanaman-child mb-3">
                        <span>Tanggal Tanam : 22-06-2020</span>
                        <br>
                        <span>Kondisi : Normal <i class="fas fa-check-to-slot "
                                style="color: rgb(164, 164, 16);;"></i></span>
                    </div>
                    <div class="tanaman-child mb-3">
                        <span>Tanggal Tanam : 22-06-2020</span>
                        <br>
                        <span>Kondisi : Normal <i class="fas fa-check-to-slot "
                                style="color: rgb(164, 164, 16);;"></i></span>
                    </div>
                    <div class="tanaman-child mb-3">
                        <span>Tanggal Tanam : 22-06-2020</span>
                        <br>
                        <span>Kondisi : Normal <i class="fas fa-check-to-slot "
                                style="color: rgb(164, 164, 16);;"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.bottom_navbar')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous ">
    </script>

    @include('sweetalert::alert')
</body>

</html>
