<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Karyawan</title>
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
        label {
            font-size: 14px;
            font-weight: bold;
            color: #4A4A4A;
        }
        .data-value {
            font-size: 16px;
            margin-bottom: 10px;
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

<div class="container">
    <h3>Data Karyawan</h3>

    <div>
        <label for="kodepegawai">Kode Pegawai:</label>
        <div class="data-value">{{ $mykaryawan->kodepegawai }}</div>
    </div>
    <div>
        <label for="namalengkap">Nama Lengkap:</label>
        <div class="data-value">{{ $mykaryawan->namalengkap }}</div>
    </div>
    <div>
        <label for="divisi">Divisi:</label>
        <div class="data-value">{{ $mykaryawan->divisi }}</div>
    </div>
    <div>
        <label for="departemen">Departemen:</label>
        <div class="data-value">{{ $mykaryawan->departemen }}</div>
    </div>

    <br/>

    <a href="/eas" class="back-btn">Kembali</a>
</div>

</body>
</html>
