<!DOCTYPE html>
<html>
<body>
    <h3>Data mahasiswa</h3>

    <a href="/mahasiswa/tambah"> + Tambah mahasiswa baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Prodi</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $p)
        <tr>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->prodi }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $p->id }}">Edit</a>
                |
                <a href="/mahasiswa/hapus/{{ $p->id }}">Hapus</a>
            </td>
        </tr>

        @endforeach
    </table>
</body>
</html>
