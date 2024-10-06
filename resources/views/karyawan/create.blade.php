@extends('layouts.frontend.admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('karyawan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Karyawan</label>
                                    <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror"
                                        name="nama_karyawan" placeholder="Masukan Nama Karyawan">
                                    @error('nama_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat" placeholder="Masukan Alamat">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="">
                                        <option value="" selected disabled>-- Pilih --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Jabatan</label>
                                    <select class="form-control" name="id_jabatan" id="">
                                        <option value="" selected disabled>-- Pilih --</option>
                                        @foreach ($jabatan as $data)
                                        <option value="{{$data->id}}">{{$data->jabatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-primary"  href="{{route('home')}}">
                                        Kembali
                                    </a>
                                    <button class="btn btn-sm btn-success" type="submit">
                                        Simpan
                                    </button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
