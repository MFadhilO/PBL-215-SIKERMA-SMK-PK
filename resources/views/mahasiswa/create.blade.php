<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Mahasiswa</h3>
    <form action="/mahasiswa" method="POST">
        @csrf
        <div class="mb-2">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="number" name="angkatan" id="angkatan" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
