<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- css manual -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('style/loginStyle.css') }}"> --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #DFF0DE;
            font-family: 'Segoe UI', sans-serif;
        }

        .layer2 {
            background-image: url('img/SplashScreen.png');
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 523px; */
            position: absolute;
            bottom: 0px;
            left: 0;
            right: 0;
            top: 180px;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        .judul_logo {
            font-family: 'Segoe UI', sans-serif;
            font-size: 20px;
            letter-spacing: 8px;
            font-weight: 600;
            color: #268C29;
            text-align: center;
            margin-bottom: 50px;
        }

        .layer2 .text-grup {
            position: relative;
            top: 30px;
        }

        .layer2 #judul {
            font-family: 'Segoe UI', sans-serif;
            font-size: 24px;
            font-weight: 400;
            color: white;
            text-align: center;
        }

        .layer2 #SubJudul {
            font-family: 'Segoe UI', sans-serif;
            font-size: 18px;
            font-weight: 100;
            color: white;
            text-align: center;
        }

        .container {
            width: 400px;
        }
    </style>


    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <img src="img/Logo.png" width="107px" height="107px" alt="" class="logo">
    <h1 class="judul_logo">PERTANUSA</h1>
    <div class="container-fluid">
        <div class="layer2">
            <div class="text-grup">
                <h1 id="judul">Create Account!</h1>
                {{-- <h1 id="SubJudul">Register with your account</h1> --}}
            </div>

            <div class="container-fluid" style="margin-top: 50px;">
                <div class="row" style="padding: 0px 10px">
                    <form action="{{ route('registerUser') }}" method="post">
                        @csrf
                        <div class="mb-3 col-lg-12">
                            <label for="nama" class="form-label" style="color: white;">Nama</label>
                            <input type="text" class="form-control form-control-lg" id="nama" name="nm_user"
                                value="{{ old('nm_user') }}">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="nik" class="form-label" style="color: white;">NIK</label>
                            <input type="text" class="form-control form-control-lg" id="nik" name="nik"
                                value="{{ old('nik') }}">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="tanggal_lahir" class="form-label" style="color: white;">Tanggal
                                Lahir</label>
                            <input type="date" class="form-control form-control-lg" id="tanggal_lahir"
                                name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="no_hp" class="form-label" style="color: white;">No. Hp</label>
                            <input type="text" class="form-control form-control-lg" id="no_hp" name="no_hp"
                                value="{{ old('no_hp') }}">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-light fw-bold btn-lg mt-3" type="submit"
                                style="color: #2A8F2D;">Register</button>
                        </div>
                        <div class="form-text text-center mt-3" style="color: white;">I have an account <a
                                href="/login" style="color: white; text-decoration: none; font-weight: bold;">Login
                                Here!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    @include('sweetalert::alert')
</body>

</html>
