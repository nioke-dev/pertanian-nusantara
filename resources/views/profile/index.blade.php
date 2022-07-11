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

    <link rel="stylesheet" href="/style/profile.css">

    <style>
        .active-custom {
            color: #268C29;
        }
    </style>
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
            <div class="profile-picture">

            </div>
            <h2 class="fw-bold mt-2">Username</h2>
            <div class="row" style="margin-bottom: 100px">
                <div class="container-fluid">
                    <a href="{{ route('profile.edit') }}" style="text-decoration: none; color: inherit;">
                        <div class="tanaman-child mb-3">
                            <span><img src="img/Account-circle.svg" alt="" class="me-2">Edit Profile <img
                                    src="/img/arrow-right.svg" alt="" class="float-end mt-2"></span>
                        </div>
                    </a>
                    <div class="tanaman-child mb-3" id="hubungiAdmin">
                        <span><img src="img/Location-on.svg" alt="" class="me-2">Hubungi Admin <img
                                src="/img/arrow-right.svg" alt="" class="float-end mt-2"></span>
                    </div>
                    <a href="{{ route('alamat.edit') }}" style="text-decoration: none; color: inherit;">
                        <div class="tanaman-child mb-3">
                            <span><img src="img/Call-Admin.svg" alt="" class="me-2">Alamat <img
                                    src="/img/arrow-right.svg" alt="" class="float-end mt-2"></span>
                        </div>
                    </a>
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger btn-lg" type="button"
                            style="background-color: #E22D2D;">Logout</button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#hubungiAdmin').on('click', function(event) {
            Swal.fire({
                title: 'Hubungi Admin!!!',
                text: 'Untuk Menghubungi Admin Anda Bisa Menghubungi nomor WA : 085161644408',
            })
        });
    </script>

</body>

</html>
