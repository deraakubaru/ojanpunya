@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Pegawai Details</h1>

        <table class="table mt-4">
            <tr>
                <th>ID</th>
                <td>{{ $pegawai->id }}</td>
            </tr>
            <tr>
                <th>NIP</th>
                <td>{{ $pegawai->nip }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $pegawai->name }}</td>
            </tr>
            <tr>
                <th>Bidang</th>
                <td>{{ $pegawai->bidang }}</td>
            </tr>
        </table>

        <a href="{{ route('pegawais.index') }}" class="btn btn-primary">Back to Pegawai List</a>
    </div>
@endsection
