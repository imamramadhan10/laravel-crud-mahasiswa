<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
        header h2 { margin: 0; }
        main {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }
        .panel {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0000000d;
            overflow-x: auto;
        }
        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-block;
            padding: 10px 14px;
            border: 0;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }
        .blue { background: #2563eb; }
        .green { background: #16a34a; }
        .red { background: #dc2626; }
        .gray { background: #64748b; }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }
        th, td {
            padding: 13px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        th { background: #f8fafc; }
        .message {
            padding: 12px;
            background: #dcfce7;
            color: #166534;
            border-radius: 6px;
            margin-bottom: 18px;
        }
        .error { color: #dc2626; font-size: 13px; }
        form.inline { display: inline; }
        .actions { white-space: nowrap; }
    </style>
</head>
<body>
<header>
    <h2>Sistem Informasi Mahasiswa</h2>
</header>

<main>
    <div class="panel">
        <div class="top">
            <div>
                <h2>Data Mahasiswa</h2>
                <p>Kelola data mahasiswa dengan mudah.</p>
            </div>
            <a href="{{ route('mahasiswa.create') }}" class="btn blue">
                + Tambah Mahasiswa
            </a>
        </div>

        @if (session('success'))
            <div class="message">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="message">
                Periksa kembali data yang kamu masukkan.
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jurusan }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->no_hp ?? '-' }}</td>
                        <td class="actions">
                            <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                               class="btn green">Edit</a>

                            <form class="inline"
                                  action="{{ route('mahasiswa.destroy', $mahasiswa) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align:center">
                            Belum ada data mahasiswa. Klik Tambah Mahasiswa
                            untuk memasukkan data pertama.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <p><a href="{{ route('home') }}">Kembali ke Beranda</a></p>
    </div>
</main>
</body>
</html>
