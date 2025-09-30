<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
        <h3>Edit Mahasiswa</h3>
        <a href="/mahasiswa">Kembali</a>

        <br/>
        <br/>
    @foreach ($mahasiswa as $p)
    <form action="/mahasiswa/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
    nim <input type="text" required="required" name="nim" value="{{ $p->nim }}"><br/>
    Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"><br/>
    Umur <input type="text" required="required" name="umur" value="{{ $p->umur }}"><br/>
    Prodi <textarea required="required" name="prodi">{{ $p ->prodi }}</textarea><br/>
    <input type="submit" value="Simpan data">
</form>
    @endforeach
</body>
</html>
