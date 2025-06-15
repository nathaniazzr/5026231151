<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kayla Nathania Azzahra : 5026231151</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Menambahkan font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Menyusun body dengan font Poppins */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Mengubah ukuran jumbotron dan mengubah background menjadi lebih kecil */
        .jumbotron {
            background-color: #b69de2;
            height: 120px;
            margin-bottom: 0;
            padding-top: 30px; /* Menambahkan padding atas agar teks tidak ter-crop */
        }

        /* Teks "Kayla Nathania Azzahra" diubah menjadi besar dan tebal */
        .jumbotron h1 {
            font-size: 35px;  /* Menyesuaikan ukuran font */
            font-weight: bold;
            text-align: left;
            margin-left: 20px;
        }

        /* Menyusun navbar agar lebih mepet dengan navbar hijau dan di tengah */
        .navbar {
            background-image: url('img/woi.jpeg'); /* Ganti dengan path gambar yang Anda inginkan */
            background-size: cover; /* Menyesuaikan gambar dengan lebar navbar */
            background-position: center; /* Memastikan gambar berada di tengah */
            margin-top: -20px; /* Untuk mepetkan dengan navbar hijau */
            padding: 10px 0;
            border-bottom: none;
            justify-content: center; /* Mengatur navbar agar berada di tengah */
        }

        /* Navbar item yang lebih besar */
        .navbar-nav .nav-link {
            font-size: 16px;
            color: #fff; /* Mengubah warna teks menjadi putih agar kontras dengan gambar */
            padding: 10px 20px;
        }

        /* Navbar item hover */
        .navbar-nav .nav-link:hover {
            color:  #815dc0;
        }

    </style>
</head>

<body>
    <!-- Navbar hijau -->
    <div class="jumbotron">
        <h1>5026231151 : Kayla Nathania Azzahra</h1>
    </div>

    <!-- Navbar putih -->
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/frontend">All Front End</a> <!-- Link All Front End -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/mouse">Tugas CRUD</a> <!-- Link Tugas CRUD -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/eas">EAS</a> <!-- Link EAS -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/keranjang"">Latihan 1</a> <!-- Link Latihan 1 -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/karyawan">Latihan 2</a> <!-- Link Latihan 2 -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/latihan3">Latihan 3</a> <!-- Link Latihan 3 -->
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
