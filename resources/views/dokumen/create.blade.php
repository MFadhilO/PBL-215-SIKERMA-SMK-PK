<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Dokumen</h3>
    <form action="/dokumen" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="id_dokumen" class="form-label">Id Dokumen</label>
            <input type="text" name="id_dokumen" id="id_dokumen" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="no_kerja_sama" class="form-label">No Kerja Sama</label>
            <input type="text" name="no_kerja_sama" id="no_kerja_sama" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="dokumen" class="form-label">Dokumen</label>
            <input type="file" name="dokumen" id="dokumen" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="/dokumen" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
