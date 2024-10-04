@extends('layouts.frontend.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Absensi Hari Ini {{ $today }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('absensi.store') }}" method="POST">
                        @csrf
                        <h5>Masuk</h5>
                        <div class="row">
                            <div class="col-5">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Lokasi Absensi</label>
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        placeholder="Lokasi Absensi" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nama Karyawan</label>
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected disabled>-- Nama Karyawan --</option>
                                        @foreach ($karyawan as $data)
                                            <option value="{{ $data->id }}"
                                                {{ session('id_karyawan') && in_array($data->id, session('id_karyawan')) ? 'disabled' : '' }}
                                                data-jabatan="{{ $data->jabatan->nama_jabatan }}">
                                                {{ $data->nama }}
                                            </option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Pulang</h5>
                        <div class="row">
                            <div class="col-5">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Lokasi Absensi</label>
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        placeholder="Lokasi Absensi" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nama Karyawan</label>
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected>Nama Karyawan</option>
                                        <option value="">{{ $karyawan }}</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Absen Masuk -->
                        <button type="submit" name="absen_masuk" class="btn btn-primary"
                        {{ session('absen_masuk') ? '' : '' }}> Absen Masuk </button>

                    <!-- Tombol Absen Pulang -->
                    <button type="submit" name="absen_pulang" class="btn btn-secondary"
                        {{ !session('absen_masuk') ? 'disabled' : '' }}> Absen Pulang </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
