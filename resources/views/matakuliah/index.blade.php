
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f6f9;
        }

        h2 {
            color: #333;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        a, button {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            color: white;
        }

        .tambah { background: #198754; }
        .edit { background: #0d6efd; }
        .hapus { background: #dc3545; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #0d6efd;
            color: white;
        }

        .aksi {
            display: flex;
            gap: 6px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mata Kuliah</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('matakuliah.create') }}" class="tambah">
        + Tambah Mata Kuliah
    </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $matakuliah->kode }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <td>
                        <div class="aksi">
                            <a href="{{ route('matakuliah.edit', $matakuliah->id) }}"
                               class="edit">Edit</a>

                            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hapus">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center;">
                        Belum ada data mata kuliah.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
