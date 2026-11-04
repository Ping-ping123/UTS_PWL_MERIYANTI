<!DOCTYPE html>
<html>
<head>
    <title>Tambah Absensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            background: white;
            max-width: 550px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button, a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            background: #6b7280;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Data Absensi</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf

        <label>Nama Mahasiswa</label>
        <select name="mahasiswa_id" required>
            <option value="">-- Pilih Mahasiswa --</option>
            @foreach ($mahasiswas as $mahasiswa)
                <option value="{{ $mahasiswa->id }}">
                    {{ $mahasiswa->name }}
                </option>
            @endforeach
        </select>

        <label>Mata Kuliah</label>
        <select name="matakuliah_id" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            @foreach ($matakuliahs as $matakuliah)
                <option value="{{ $matakuliah->id }}">
                    {{ $matakuliah->nama_matakuliah }}
                </option>
            @endforeach
        </select>

        <label>Tanggal Absensi</label>
        <input type="date" name="tanggal_absensi" required>

        <label>Status Absensi</label>
        <select name="status_absen" required>
            <option value="">-- Pilih Status --</option>
            <option value="H">Hadir</option>
            <option value="A">Alpha</option>
            <option value="I">Izin</option>
            <option value="S">Sakit</option>
        </select>

        <button type="submit">Simpan Absensi</button>
        <a href="{{ route('absensi.index') }}">Kembali</a>
    </form>
</div>

</body>
</html>