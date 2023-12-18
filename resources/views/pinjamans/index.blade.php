@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Data Pinjaman</h1>
        <a href="{{ route('pinjamans.create') }}" class="btn btn-primary mb-2">Tambah Data Pinjaman</a>
        @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
        @endif
        <table id="pinjamans-table" class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pegawai</th>
                    <th>Barang</th>
                    <th>Petugas</th>
                    <th>Waktu Peminjaman</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pinjamans as $pinjaman)
                    <tr>
                        <td>{{ $pinjaman->id }}</td>
                        <td>{{ optional($pinjaman->pegawai)->name ?? 'N/A' }}</td>
                        <td>{{ optional($pinjaman->barang)->name ?? 'N/A' }}</td>
                        <td>{{ optional($pinjaman->user)->name ?? 'N/A' }}</td>
                        <td>{{ $pinjaman->borrowed_at }}</td>
                        <td>
                            <a href="{{ route('pinjamans.show', $pinjaman->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('pinjamans.edit', $pinjaman->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pinjamans.destroy', $pinjaman->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add the DataTables script -->
    <script>
        $(document).ready(function() {
            $('#pinjamans-table').DataTable();
        });
    </script>
@endsection
