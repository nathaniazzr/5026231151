<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Karyawan</title>
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
        input[type="text"], input[type="number"], input[type="submit"], textarea {
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

    <h3>Edit Data Karyawan</h3>
    <a href="/eas" class="back-btn">Kembali</a>
    <br/><br/>

    <!-- Form untuk mengedit data karyawan -->
    <form action="/mykaryawan/update" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }} <!-- Untuk memastikan request adalah PUT -->

        <!-- Input untuk Kode Pegawai -->
        <div class="form-group">
            <label for="kodepegawai">Kode Pegawai:</label>
            <input type="text" required="required" name="kodepegawai" value="{{ $mykaryawan->kodepegawai }}" readonly>
        </div>

        <!-- Input untuk Nama Lengkap -->
        <div class="form-group">
            <label for="namalengkap">Nama Lengkap:</label>
            <input type="text" required="required" name="namalengkap" value="{{ $mykaryawan->namalengkap }}">
        </div>

        <!-- Input untuk Divisi -->
        <div class="form-group">
            <label for="divisi">Divisi:</label>
            <input type="text" required="required" name="divisi" value="{{ $mykaryawan->divisi }}">
        </div>

        <!-- Input untuk Departemen -->
        <div class="form-group">
            <label for="departemen">Departemen:</label>
            <input type="text" required="required" name="departemen" value="{{ $mykaryawan->departemen }}">
        </div>

        <!-- Tombol Submit -->
        <div class="form-group">
            <input type="submit" value="Simpan Data">
        </div>
    </form>

</body>
</html>
