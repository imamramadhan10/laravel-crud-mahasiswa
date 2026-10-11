<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }
        header {
            background: #0f172a;
            color: white;
            padding: 22px 7%;
        }
        main { max-width: 750px; margin: 35px auto; padding: 0 20px; }
        .panel {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0000000d;
        }
        label { display: block; margin: 16px 0 7px; font-weight: bold; }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
        }
        input:focus { outline: 2px solid #93c5fd; border-color: #2563eb; }
        .btn {
            display: inline-block;
            margin-top: 22px;
            padding: 12px 16px;
            border: 0;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }
        .blue { background: #2563eb; }
        .gray { background: #64748b; }
        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 25px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<header>
    <h2>Sistem Informasi Mahasiswa</h2>
</header>

<main>
    <div class="panel">
        <h2>Tambah Mahasiswa</h2>
        <p>Lengkapi formulir berikut untuk menambahkan data.</p>

        @if ($errors->any())
            <div class="errors">
                <strong>Data belum benar:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <label for="npm">NPM</label>
            <input id="npm" type="text" name="npm"
                   value="{{ old('npm') }}" required>

            <label for="nama">Nama Lengkap</label>
            <input id="nama" type="text" name="nama"
                   value="{{ old('nama') }}" required>

            <label for="jurusan">Jurusan</label>
            <input id="jurusan" type="text" name="jurusan"
                   value="{{ old('jurusan') }}" required>

            <label for="email">Email</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}" required>

            <label for="no_hp">Nomor HP (opsional)</label>
            <input id="no_hp" type="text" name="no_hp"
                   value="{{ old('no_hp') }}">

            <button type="submit" class="btn blue">
                Simpan Data
            </button>

            <a href="{{ route('mahasiswa.index') }}" class="btn gray">
                Kembali
            </a>
        </form>
    </div>
</main>
</body>
</html>
