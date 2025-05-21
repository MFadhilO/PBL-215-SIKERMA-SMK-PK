<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Pengajuan</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <a href="/pengajuan/create" class="btn btn-success mb-3">+ Tambah Pengajuan</a>

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID Ajuan</th>
            <th>NIP</th>
            <th>Nama Mitra</th>
            <th>Tanggal Ajuan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pengajuan as $ajuan)
            <tr>
                <td>{{ $ajuan->id_ajuan }}</td>
                <td>{{ $ajuan->NIP }}</td>
                <td>{{ $ajuan->nama_mitra }}</td>
                <td>{{ $ajuan->tanggal_ajuan }}</td>
                <td>
                    <a href="{{ url('/pengajuan/'.$ajuan->id_ajuan.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ url('/pengajuan/'.$ajuan->id_ajuan) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
