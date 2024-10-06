@extends('layouts.frontend.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Jabatan</h4>
    <div class="card">
        <h5 class="card-header">Jabatan</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jabatan as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>
                            @if (is_null($data->jam_keluar))
                            <a href="{{ route('absensi.edit', $data->id) }}" class="btn btn-warning">
                                Edit
                            </a>
                            @else
                            <button class="btn btn-secondary" disabled>Sudah Absen Pulang</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
