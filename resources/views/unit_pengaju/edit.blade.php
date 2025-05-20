<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Unit Pengaju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Unit Pengaju</h3>
    <form action="/unit_pengaju/{{ $unit_pengaju->id_unit }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="id_unit" class="form-label">ID Unit</label>
            <input type="text" name="id_unit" id="id_unit" value="{{ $unit_pengaju->id_unit }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Unit pengaju</label>
            <input type="text" name="unit_pengaju" id="unit_pengaju" value="{{ $unit_pengaju->unit_pengaju }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="/unit_pengaju/index" class="btn btn-secondary">Batal</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
