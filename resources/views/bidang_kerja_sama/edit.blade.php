@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Bidang Kerja Sama</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bidang_kerja_sama.update', $bidang->id_bidang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_bidang">Nama Bidang</label>
            <input type="text" name="nama_bidang" id="nama_bidang" class="form-control" value="{{ old('nama_bidang', $bidang->nama_bidang) }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('bidang_kerja_sama.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
</div>
@endsection
