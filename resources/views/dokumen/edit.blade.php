<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Dokumen</h3>
    <form action="/dokumen/{{ $dokumen->id_dokumen }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="id_dokumen" class="form-label">Id Dokumen</label>
            <input type="text" name="id_dokumen" id="id_dokumen" value="{{ $dokumen->id_dokumen }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="no_kerja_sama" class="form-label">No Kerja Sama</label>
            <input type="text" name="no_kerja_sama" id="no_kerja_sama" value="{{ $dokumen->no_kerja_sama }}" class="form-control" required>
        </div>
        
        <div class="mb-2">
            <label for="dokumen" class="form-label">Dokumen</label>
            <input type="file" name="dokumen" id="dokumen" class="form-control">
                @if ($dokumen->dokumen)
            <small>Dokumen saat ini: <a href="{{ asset('storage/' . $dokumen->dokumen) }}" target="_blank">Lihat</a></small>
            @endif
        </div>

        <div class="mb-2">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" value="{{ $dokumen->status }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" value="{{ $dokumen->tanggal_mulai }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" value="{{ $dokumen->tanggal_selesai }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="/dokumen" class="btn btn-secondary">Batal</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
