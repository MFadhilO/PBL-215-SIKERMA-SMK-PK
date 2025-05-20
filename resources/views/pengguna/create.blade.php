@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pengguna</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf
        <label>NIP:</label><br>
        <input type="text" name="NIP" value="{{ old('NIP') }}" required><br><br>

        <label>ID Bagian:</label><br>
        <input type="number" name="id_bagian" value="{{ old('id_bagian') }}" required><br><br>

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required><br><br>

        <label>Kata Sandi:</label><br>
        <input type="password" name="kata_sandi" required><br><br>

        <label>Peran:</label><br>
        <select name="peran" required>
            <option value="">-- Pilih Peran --</option>
            <option value="Admin">Admin</option>
            <option value="Super admin">Super admin</option>
            <option value="Development">Development</option>
        </select><br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="">-- Pilih Status --</option>
            <option value="aktif">Aktif</option>
            <option value="tidak aktif">Tidak Aktif</option>
        </select><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('pengguna.index') }}">Batal</a>
    </form>
</div>
@endsection
