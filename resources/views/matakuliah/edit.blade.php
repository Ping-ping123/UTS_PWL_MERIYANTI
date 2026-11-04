
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
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

        button { background: #0d6efd; }
        a { background: #6c757d; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Mata Kuliah</h2>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Mata Kuliah</label>
        <input type="text" name="kode"
               value="{{ old('kode', $matakuliah->kode) }}" required>

        <label>Nama Mata Kuliah</label>
        <input type="text" name="nama_matakuliah"
               value="{{ old('nama_matakuliah', $matakuliah->nama_matakuliah) }}" required>

        <button type="submit">Perbarui</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
</div>

</body>
</html>
