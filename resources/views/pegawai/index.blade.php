<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .wrapper a {
            padding: 10px 5px 5px 5px;
            background-color: rgb(9, 188, 24);
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
        <a href="/pegawai/create" style="width: 6%">Buat baru</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor telephone</th>
                    <th>Tanggal lahir</th>
                    <th>Tempat lahir</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                        <td>{{ $pegawai->no_phone }}</td>
                        <td>{{ $pegawai->tanggal_lahir }}</td>
                        <td>{{ $pegawai->tempat_lahir }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>
                            {{-- <a href="/pegawai/{{ $pegawai->id }}">Detail</a> --}}
                            <div style="display: flex">
                                <a href="/pegawai/{{ $pegawai->id }}/edit" style="background-color: orange ">Edit</a>
                                <a href="/pegawai/{{ $pegawai->id }}/delete" style="background-color: red">Delete</a>
                            </div>
                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
