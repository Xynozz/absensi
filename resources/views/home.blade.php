@extends('layouts.frontend.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row mt-3s">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-center">
                        <h1 class="card-title mb-1">Selama Datang Di Dashboard {{ Auth::user()->name }}</h1>
                    </div>
                    <center>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title mt-5"></h4>
                                <h4 class="card-title mt-2">PT.Tritama Aji Laksana</h4>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3 grid-margin mt-3">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Data Karyawan</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"> Data</h2>
                            </div>
                            {{-- <a href="{{ route('program.index') }}" class="btn btn-primary btn-sm mt-2">Lihat</a>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 grid-margin mt-3">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Data Artikel</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"> Data</h2>
                            </div>
                            {{-- <a href="{{ route('artikel.index') }}" class="btn btn-primary btn-sm mt-2">Lihat</a>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 grid-margin mt-3">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Data Fasilitas</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">Data</h2>
                            </div>
                            {{-- <a href="{{ route('fasilitas.index') }}" class="btn btn-primary btn-sm mt-2">Lihat</a>
                            --}}
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-sm-3 grid-margin mt-3">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Pendaftar</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"> Orang</h2>
                            </div>
                            {{-- <a href="{{ route('pendaftaran.index') }}"
                                class="btn btn-primary btn-sm mt-2">Lihat</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
