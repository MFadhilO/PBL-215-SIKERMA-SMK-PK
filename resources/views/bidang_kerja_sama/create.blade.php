@extends('layout.app')

@section('content')
<div class="container">
    <h1>Tambah Bidang Kerja Sama</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bidang_kerja_sama.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_bidang">Nama Bidang</label>
            <input type="text" name="nama_bidang" id="nama_bidang" class="form-control" value="{{ old('nama_bidang') }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        <a href="{{ route('bidang_kerja_sama.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
</div>
@endsection
