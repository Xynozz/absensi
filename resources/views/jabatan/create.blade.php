@extends('layouts.frontend.admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('jabatan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                        name="jabatan" placeholder="Masukan Jabatan">
                                    @error('jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
