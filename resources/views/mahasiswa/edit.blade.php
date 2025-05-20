<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Mahasiswa</h3>
    <form action="/mahasiswa/{{ $mahasiswa->nim }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="number" name="angkatan" id="angkatan" value="{{ $mahasiswa->angkatan }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="/mahasiswa" class="btn btn-secondary">Batal</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
