<!DOCTYPE html>
<html>

<head>
    <title>PT Tritama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/assets/css/demo.css') }}" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        main {
            display: flex;
            flex-direction: row;
        }

        .attendance-form {
            flex: 1;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .attendance-list {
            flex: 2;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        footer {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
            clear: both;
        }
    </style>
</head>

<body>
    <header>
        <h1>PT Tritama</h1>
    </header>
    <main>
        <section class="attendance-form">
            <h2>Absen</h2>
            <form>
                <div class="row mb-4">
                    <div class="col-12">
                        <label class="form-label" for="basic-default-fullname">Nama Karyawan</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                            name="karyawan_id">
                            <option selected disabled>-- Nama Karyawan --</option>
                            @foreach ($karyawan as $data)
                            <option value="{{$data->id}}">{{$data->nama_karyawan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Tombol Absen Masuk -->
                <button type="submit" name="absen_masuk" class="btn btn-primary" {{ session('absen_masuk') ? '' : '' }}>
                    Absen Masuk </button>

                <!-- Tombol Absen Pulang -->
                <button type="submit" name="absen_pulang" class="btn btn-secondary" {{ !session('absen_masuk')
                    ? 'disabled' : '' }}> Absen Pulang </button>
            </form>
        </section>
        <section class="attendance-list">
            <h2>Daftar Absensi</h2>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- attendance list will be displayed here -->
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Attendance System</p>
    </footer>
</body>

</html>
{{-- @endsection --}}
