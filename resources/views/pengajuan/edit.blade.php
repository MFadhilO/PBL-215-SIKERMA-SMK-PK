<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Pengajuan</h3>
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/pengajuan/{{ $pengajuan->id_ajuan }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="NIP" class="form-label">Pilih Pengguna</label>
            <select class="form-select" id="NIP" name="NIP" required>
                <option value="">-- Pilih NIP dan Nama --</option>
                @foreach($penggunas as $pengguna)
                    <option value="{{ $pengguna->NIP }}"
                        {{ old('NIP', $pengajuan->NIP) == $pengguna->NIP ? 'selected' : '' }}>
                        {{ $pengguna->NIP }} - {{ $pengguna->nama_lengkap }}
                    </option>
                @endforeach
            </select>
            @error('NIP')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="nama_mitra" class="form-label">Nama Mitra</label>
            <input type="text" name="nama_mitra" id="nama_mitra" 
                   class="form-control @error('nama_mitra') is-invalid @enderror" 
                   value="{{ old('nama_mitra', $pengajuan->nama_mitra) }}" required>
            @error('nama_mitra')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="tanggal_ajuan" class="form-label">Tanggal Ajuan</label>
            <input type="date" name="tanggal_ajuan" id="tanggal_ajuan" 
                   class="form-control @error('tanggal_ajuan') is-invalid @enderror" 
                   value="{{ old('tanggal_ajuan', $pengajuan->tanggal_ajuan) }}">
            @error('tanggal_ajuan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/pengajuan" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>