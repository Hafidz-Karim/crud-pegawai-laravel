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
                <label for="umur">Umur: <span style="color: red; font-weight: bold">*</span></label>
                <input type="text" id="umur" name="umur" value="{{ old('umur') }}">
                @error('umur')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div>
                <label for="gaji">Gaji:</label>
                <input type="text" id="gaji" name="gaji"  value="{{ old('gaji') }}">
                @error('gaji')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div>
                <label for="keterangan">Keterangan</label>
                <textarea cols="4" type="text" id="keterangan" name="keterangan">
                </textarea>
            </div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>

</html>
