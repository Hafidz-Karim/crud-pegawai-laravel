<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .wrapper {
            display: flex;
            flex-direction: column;
            padding:10px;
            gap: 10px;
        }
        .wrapper div {
            display: flex;
            flex-direction: column;
        }
        input {
            padding: 5px;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            color: white;
            background-color: rgb(22, 172, 22);
            width: 30%;
            border-radius: 5px;
            border: 1 px;
        }
    </style>
</head>

<body>
    <form action="/pegawai/{{ $pegawai->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="wrapper">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $pegawai->nama }}" required>
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" required>
            </div>
            <div>
                <label for="umur">Umur</label>
                <input type="text" id="umur" name="umur" value="{{ $pegawai->umur }}" required>
            </div>
            <div>
                <label for="gaji">Gaji</label>
                <input type="text" id="gaji" name="gaji" value="{{ $pegawai->gaji }}" required>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ $pegawai->phone }}" required>
            </div>
            <div>
                <label for="keterangan">Keterangan</label>
                <textarea cols="4" type="text" id="keterangan" name="keterangan" required>
                </textarea>
            </div>
            <button type="submit">Simpan
            </button>
        </div>
    </form>
</body>

</html>