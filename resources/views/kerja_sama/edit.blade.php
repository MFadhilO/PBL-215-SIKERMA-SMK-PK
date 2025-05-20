<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Kerja Sama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Kerja Sama</h2>
    <form action="{{ url('/kerja_sama/'.$kerjasama->id_kerja_sama) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>No. Kerja Sama</label>
            <input type="text" name="no_kerja_sama" value="{{ $kerjasama->no_kerja_sama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ID Ajuan</label>
            <input type="number" name="id_ajuan" value="{{ $kerjasama->id_ajuan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ID Unit</label>
            <input type="number" name="id_unit" value="{{ $kerjasama->id_unit }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ID Bidang</label>
            <input type="number" name="id_bidang" value="{{ $kerjasama->id_bidang }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kerja Sama</label>
            <input type="text" name="jenis_kerja_sama" value="{{ $kerjasama->jenis_kerja_sama }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ url('/kerja_sama') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
