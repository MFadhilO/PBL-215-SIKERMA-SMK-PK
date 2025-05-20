<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Unit Pengaju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Unit Pengaju</h3>
    <form action="/unit_pengaju" method="POST">
        @csrf
        <div class="mb-2">
            <label for="id_unit" class="form-label">ID Unit</label>
            <input type="text" name="id_unit" id="id_unit" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="unit_pengaju" class="form-label">Unit Pengaju</label>
            <input type="text" name="unit_pengaju" id="unit_pengaju" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="/unit_pengaju/index" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
