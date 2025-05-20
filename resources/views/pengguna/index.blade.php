<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Pengguna</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">+ Tambah Pengguna</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>ID Bagian</th>
                <th>Peran</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penggunas as $pengguna)
                <tr>
                    <td>{{ $pengguna->NIP }}</td>
                    <td>{{ $pengguna->nama_lengkap }}</td>
                    <td>{{ $pengguna->id_bagian }}</td>
                    <td>{{ $pengguna->peran }}</td>
                    <td>{{ $pengguna->status }}</td>
                    <td>
                        <a href="{{ route('pengguna.edit', $pengguna->NIP) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pengguna.destroy', $pengguna->NIP) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
