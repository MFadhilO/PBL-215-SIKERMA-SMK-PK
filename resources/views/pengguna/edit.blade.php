@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pengguna</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pengguna.update', $pengguna->NIP) }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIP:</label><br>
        <input type="text" value="{{ $pengguna->NIP }}" disabled><br><br>

        <label>ID Bagian:</label><br>
        <input type="number" name="id_bagian" value="{{ $pengguna->id_bagian }}" required><br><br>

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="{{ $pengguna->nama_lengkap }}" required><br><br>

        <label>Kata Sandi:</label><br>
        <input type="text" name="kata_sandi" value="{{ $pengguna->kata_sandi }}" required><br><br>

        <label>Peran:</label><br>
        <select name="peran" required>
            <option value="">-- Pilih Peran --</option>
            <option value="Admin" {{ $pengguna->peran == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Super admin" {{ $pengguna->peran == 'Super admin' ? 'selected' : '' }}>Super admin</option>
            <option value="Development" {{ $pengguna->peran == 'Development' ? 'selected' : '' }}>Development</option>
        </select><br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="">-- Pilih Status --</option>
            <option value="aktif" {{ $pengguna->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="tidak aktif" {{ $pengguna->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
        </select><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('pengguna.index') }}">Batal</a>
    </form>
</div>
@endsection
