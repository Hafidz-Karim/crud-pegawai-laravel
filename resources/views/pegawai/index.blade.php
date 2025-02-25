<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        .wrapper a {
            padding: 10px 5px 5px 5px;
            background-color: rgb(60, 60, 245);
            color: #f2f2f2;
            text-decoration: none;
            border-radius: 3px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #adabab;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .wrapper {
            background: rgba(193, 194, 193, 0.648);
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h1>Data Pegawai</h1>
    <div class="wrapper">
        <a href="/pegawai/create" style="width: 5%" >Buat baru</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Gaji</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                        <td>{{ $pegawai->umur }}</td>
                        <td>{{ number_format($pegawai->gaji, 0, '.', '.') }}</td>
                        <td>{{ $pegawai->phone }}</td>        
                        <td>
                            <a href="/pegawai/{{ $pegawai->id }}">Detail</a>
                            <a href="/pegawai/{{ $pegawai->id }}/edit">Edit</a>
                            <a href="/pegawai/{{ $pegawai->id }}/delete">Delete</a>
                        </td>       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
