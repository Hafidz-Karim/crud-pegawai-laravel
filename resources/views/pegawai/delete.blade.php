<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            display: flex;
            text-align: center;
            gap: 5px;
        }

    a {
        background: green;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid;
        color: rgb(236, 235, 234);
    }
    button {
        background: rgb(231, 19, 19);
        text-decoration: none;
        padding: 10px 10px;
        border: 1px solid;
        color: rgb(236, 235, 234);
    }
    </style>
</head>
<body>
    <h1>Hapus data pegawai</h1>
    <p>Apakah anda ingin menghapus data pegawai dengan nama: {{ $pegawai->nama}}</p>
    <form action="/pegawai/{{ $pegawai->id }}" method="POST">
    @csrf
    @method('DELETE')
    <div>
        <a href="/pegawai">Cancel</a>
        <button type="submit">
            Yakin
        </button>
    </div>
    </form>
</body>
</html>