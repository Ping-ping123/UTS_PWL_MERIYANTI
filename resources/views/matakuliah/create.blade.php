
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 30px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            max-width: 500px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            box-sizing: border-box;
        }

        button, a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        button { background: #198754; }
        a { background: #6c757d; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Mata Kuliah</h2>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <label>Kode Mata Kuliah</label>
        <input type="text" name="kode" value="{{ old('kode') }}" required>

        <label>Nama Mata Kuliah</label>
        <input type="text" name="nama_matakuliah"
               value="{{ old('nama_matakuliah') }}" required>

        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
</div>

</body>
</html>
