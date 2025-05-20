@extends('layout.app')

@section('content')
<div class="container">
    <h1>Bidang Kerja Sama</h1>

    {{-- Removed Bootstrap alert for success, replaced with SweetAlert2 in script --}}

    <a href="{{ route('bidang_kerja_sama.create') }}" class="btn btn-primary mb-3">Tambah Bidang Kerja Sama</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bidang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bidangs as $bidang)
            <tr>
                <td>{{ $bidang->id_bidang }}</td>
                <td>{{ $bidang->nama_bidang }}</td>
                <td>
                    <a href="{{ route('bidang_kerja_sama.edit', $bidang->id_bidang) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('bidang_kerja_sama.destroy', $bidang->id_bidang) }}" method="POST" style="display:inline-block;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Include SweetAlert2 from CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        @endif

        // Attach event listeners to delete buttons
        const deleteButtons = document.querySelectorAll('.btn-delete');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
