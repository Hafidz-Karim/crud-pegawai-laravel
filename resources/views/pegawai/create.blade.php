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
        button {
            padding: 10px;
            color: white;
            background-color: green;
            width: 10%;
            border: none;
        }
        input {
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="/pegawai" method="POST">
        @csrf
        <div class="wrapper">
            <h1>Buat data pegawai baru</h1>
            <div>
                <label for="nama">Nama: <span style="color: red; font-weight: bold">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="alamat">Alamat: <span style="color: red; font-weight: bold">*</span></label>
                <input type="text" id="alamat" name="alamat"value="{{ old('alamat') }}">
                @error('alamat')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div>
                <label for="no_telephone">Nomor telephone: <span style="color: red; font-weight: bold">*</span></label>
                <input type="text" id="no_telephone" name="no_telephone" value="{{ old('tanggal_lahir') }}">
                @error('no_telephone')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div>
                <label for="tanggal_lahir">Tanggal lahir:</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir"  value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                <p>{{ $message }}</p>
            @enderror
            </div>
            {{-- <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <p>{{ $message }}</p>
            @enderror
            </div> --}}
            <div>
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                </textarea>
            </div>
            <div>
                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                </textarea>
            </div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>

</html>
