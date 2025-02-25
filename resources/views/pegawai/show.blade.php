<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .wrapper {
            /* Atur lebar container jika diperlukan */
            width: 600px;
            margin: 0 auto;
        }

        .data-pegawai {
            border-collapse: collapse;
            width: 100%;
        }

        .data-pegawai th,
        .data-pegawai td {
            border: 2px solid #b0adad;
            padding: 8px;
            text-align: left;
        }

        .data-pegawai th {
            background-color: #f2f2f2;
        }

        .btn-kembali {
            background-color: rgb(19, 237, 37);
            color: #f9f3f3;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h2>Data Pegawai</h2>
        <table class="data-pegawai">
            <tr>
                <th>Nama</th>
                <td>{{ $pegawai->nama }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pegawai->alamat }}</td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>{{ $pegawai->umur }}</td>
            </tr>
            <tr>
                <th>Gaji</th>
                <td>{{ $pegawai->gaji }}</td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td>{{ $pegawai->phone }}</td>
            </tr>
        </table>
        <a href="/pegawai" class="btn-kembali">Kembali ke list pegawai</a>
    </div>
</body>

</html>
