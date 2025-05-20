<!DOCTYPE html>
<html>
<head>
    <title>Data Kerja Sama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Data Kerja Sama</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ url('/kerja_sama/create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>No. Kerja Sama</th>
                <th>ID Ajuan</th>
                <th>ID Unit</th>
                <th>ID Bidang</th>
                <th>Jenis Kerja Sama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kerjasama as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->no_kerja_sama }}</td>
                <td>{{ $item->id_ajuan }}</td>
                <td>{{ $item->id_unit }}</td>
                <td>{{ $item->id_bidang }}</td>
                <td>{{ $item->jenis_kerja_sama }}</td>
                <td>
                    <a href="{{ url('/kerja_sama/'.$item->id_kerja_sama.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ url('/kerja_sama/'.$item->id_kerja_sama) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
