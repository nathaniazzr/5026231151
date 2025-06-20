<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mouse</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            width: 70%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            color: #4A4A4A;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-btn {
            background-color: #2196F3;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
        }
        .back-btn:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>


    <h3>Edit Data Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br/>
    <br/>

    <!-- Tidak perlu menggunakan foreach, karena $mouse hanya satu data -->
    <form action="/mahasiswa/update" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }} <!-- Untuk memastikan request adalah PUT -->



        <!-- Input untuk Merk Mouse -->
     <!-- Input untuk NRP -->
NRP <input type="text" required="required" name="NRP" value="{{ $mahasiswa->NRP }}" readonly> <br/>

<!-- Input untuk Nama -->
Nama <input type="text" required="required" name="Nama" value="{{ $mahasiswa->Nama }}" readonly> <br/>

<!-- Input untuk Jurusan -->
Jurusan <input type="text" required="required" name="Jurusan" value="{{ $mahasiswa->Jurusan }}" readonly> <br/>

<!-- Input untuk IPK -->
IPK <input type="text" required="required" name="IPK" value="{{ $mahasiswa->IPK }}" readonly> <br/>


    </form>


</body>
</html>
