<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Unit pengaju</h2>
    <a href="/unit_pengaju/create" class="btn btn-success mb-3">+ Tambah Data</a>

    {{-- Hapus alert Bootstrap lama, diganti pakai SweetAlert2 --}}
    {{-- @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID Unit</th>
            <th>Unit Pengaju</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($unit_pengaju as $up)
            <tr>
                <td>{{ $up->id_unit }}</td>
                <td>{{ $up->unit_pengaju }}</td>
                <td>
                    <a href="/unit_pengaju/{{ $up->id_unit }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/unit_pengaju/{{ $up->id_unit }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Tampilkan alert success dari session Laravel
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '{{ session('success') }}',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
        });
    @endif

    // Tangkap semua form dengan class delete-form untuk konfirmasi hapus
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // cegah submit default

            Swal.fire({
                title: 'Yakin hapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
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
            })
        });
    });
</script>
</body>
</html>
