<!DOCTYPE html>
<html>

<head>
    <title>PT Tritama</title>
    <link rel="stylesheet" href="style.css">
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

        .cuti-form {
            flex: 1;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cuti-list {
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
        <section class="cuti-form">
            <h2>Ajukan Cuti</h2>
            <form>
                <div class="row mb-4">
                    <div class="col-12 mt-2">
                        <label class="form-label" for="employee-id">Employee ID:</label>
                        <input class="form-control" type="number" id="employee-id" name="employee-id">
                    </div>
                    <div class="col-12 mt-2">
                        <label class="form-label" for="jenis-cuti">Jenis Cuti:</label>
                        <select class="form-control" id="jenis-cuti" name="jenis-cuti">
                            <option value="cuti-tahunan">Cuti Tahunan</option>
                            <option value="cuti-sakit">Cuti Sakit</option>
                            <option value="cuti-melahirkan">Cuti Melahirkan</option>
                        </select>
                    </div>
                    <div class="col-12 mt-2">
                        <label class="form-label" for="tanggal-mulai">Tanggal Mulai:</label>
                        <input class="form-control" type="date" id="tanggal-mulai" name="tanggal-mulai">
                    </div>
                    <div class="col-12 mt-2">
                        <label class="form-label" for="tanggal-akhir">Tanggal Akhir:</label>
                        <input class="form-control" type="date" id="tanggal-akhir" name="tanggal-akhir">
                    </div>
                    <div class="col-12 mt-2">
                        <label class="form-label" for="alasan">Alasan:</label>
                        <textarea class="form-control" id="alasan" name="alasan"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" value="Ajukan Cuti">Ajukan Cuti</button>
            </form>
        </section>
        <section class="cuti-list">
            <h2>Daftar Cuti</h2>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Jenis Cuti</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- daftar cuti akan ditampilkan disini -->
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Cuti System</p>
    </footer>
</body>

</html>
