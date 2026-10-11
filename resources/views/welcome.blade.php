
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Sistem Informasi Mahasiswa</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            background: #0f172a;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 { margin: 0; font-size: 21px; }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover { color: #93c5fd; }

        .hero {
            background: linear-gradient(135deg, #1d4ed8, #0f172a);
            color: white;
            padding: 80px 8%;
        }

        .hero h1 {
            font-size: clamp(30px, 5vw, 48px);
            max-width: 700px;
            line-height: 1.2;
            margin: 0 0 20px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            max-width: 650px;
            color: #dbeafe;
        }

        .btn {
            display: inline-block;
            margin-top: 18px;
            padding: 14px 20px;
            border-radius: 7px;
            background: white;
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
        }

        .btn:hover { background: #dbeafe; }

        .content {
            max-width: 1100px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .content h2 {
            text-align: center;
            margin-bottom: 12px;
        }

        .intro {
            text-align: center;
            color: #64748b;
            margin-bottom: 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0000000d;
        }

        /* Membuat kartu fitur bisa diklik */
        .card-link {
            display: block;
            color: inherit;
            text-decoration: none;
            border: 2px solid transparent;
            transition: 0.2s ease;
        }

        .card-link:hover {
            transform: translateY(-5px);
            border-color: #2563eb;
            box-shadow: 0 8px 22px #00000018;
        }

        .card-link:focus-visible {
            outline: 3px solid #2563eb;
            outline-offset: 3px;
        }

        .number {
            font-size: 30px;
            font-weight: bold;
            color: #2563eb;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
        }

        .hint {
            color: #2563eb;
            font-size: 14px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #0f172a;
            color: #cbd5e1;
            margin-top: 50px;
        }
    </style>
</head>

<body>

<nav>
    <h2>SIM Mahasiswa</h2>
    <div>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a>
    </div>
</nav>

<section class="hero">
    <h1>Sistem Informasi Data Mahasiswa</h1>

    <p>
        Selamat datang di aplikasi pengelolaan data mahasiswa.
        Aplikasi ini dibuat menggunakan framework Laravel untuk
        memudahkan proses menambah, melihat, mengubah, dan menghapus
        data mahasiswa secara terstruktur.
    </p>

    <a href="{{ route('mahasiswa.index') }}" class="btn">
        Kelola Data Mahasiswa →
    </a>
</section>

<section class="content">
    <h2>Fitur Aplikasi</h2>

    <p class="intro">
        Pilih fitur yang ingin kamu gunakan.
    </p>

    <div class="cards">

        <a href="{{ route('mahasiswa.create') }}"
           class="card card-link">
            <div class="number">01</div>
            <h3>Tambah Data</h3>
            <p>Memasukkan data mahasiswa baru ke dalam database.</p>
            <div class="hint">Buka formulir tambah →</div>
        </a>

        <a href="{{ route('mahasiswa.index') }}"
           class="card card-link">
            <div class="number">02</div>
            <h3>Lihat Data</h3>
            <p>Menampilkan daftar mahasiswa secara teratur.</p>
            <div class="hint">Lihat daftar mahasiswa →</div>
        </a>

        <a href="{{ route('mahasiswa.index') }}"
           class="card card-link">
            <div class="number">03</div>
            <h3>Edit Data</h3>
            <p>
                Buka daftar mahasiswa, kemudian pilih tombol Edit
                pada data yang ingin diperbarui.
            </p>
            <div class="hint">Pilih data untuk diedit →</div>
        </a>

        <a href="{{ route('mahasiswa.index') }}"
           class="card card-link">
            <div class="number">04</div>
            <h3>Hapus Data</h3>
            <p>
                Buka daftar mahasiswa, kemudian pilih tombol Hapus
                pada data yang ingin dihapus.
            </p>
            <div class="hint">Kelola data mahasiswa →</div>
        </a>

    </div>
</section>

<footer>
    <p>
        © {{ date('Y') }} Sistem Informasi Mahasiswa |
        Dibangun dengan Laravel
    </p>
</footer>

</body>
</html>
