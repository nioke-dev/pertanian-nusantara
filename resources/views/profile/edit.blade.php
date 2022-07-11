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


    <link rel="stylesheet" href="/style/profile_edit.css">

    <style>
        .active {
            color: #268C29;
        }
    </style>
</head>

<body>
    <div class="container-fluid top-container">
        <h1 class="page">
            <a href="{{ route('profile.index') }}" style="color: inherit; text-decoration: none;"><img
                    src="img/arrow-left.svg" alt="" class="float-start"></a>Edit Profile
        </h1>
    </div>
    <div class="layer1">
        <div class="container" style="margin-bottom: 200px; width: 90%;">
            <div class="text-center penampung-image">
                <img class="img-preview profile-picture" src="img/foto_diri/{{ $user->foto_diri }}">
            </div>
            <form action="{{ route('update.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ $user->nm_user }}"
                        name="nm_user">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="text" class="form-control" id="nik" value="{{ $user->nik }}"
                        name="nik">
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" value="{{ $user->no_hp }}"
                        name="no_hp" placeholder="Ketik Disini">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" value="{{ $user->jns_kelamin }}"
                        name="jns_kelamin">
                        <option value="0" @if ($user->jns_kelamin == false) selected @endif>Laki - Laki</option>
                        <option value="1" @if ($user->jns_kelamin == true) selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tgl_lahir"
                        value="{{ $user->tgl_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto Diri</label>
                    <span class="text-danger" style="font-size: 13px;">*Lebar dan Tinggi Harus Sama Ukurannya!!</span>
                    <input type="file" onchange="previewImage()" id="image" class="form-control"
                        name="foto_diri">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg" type="submit"
                        style="background-color: #268C29;">Update</button>
                </div>
            </form>
        </div>
    </div>
    @include('component.bottom_navbar')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous ">
    </script>

    @include('sweetalert::alert')

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
