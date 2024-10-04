@extends('layouts.frontend.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Karyawan</h4>
    <div class="card">
        <h5 class="card-header">Karyawan</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($karyawan as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama_karyawan }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->id_jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
