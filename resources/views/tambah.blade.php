<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Data mahasiswa</h3>

    <a href="/mahasiswa">Kembali</a>
    <br/>
    <br/>

    <form action="/mahasiswa/store" method="post">
            {{ csrf_field() }}
            Nim <input type="text" name="nim"><br/>
            Nama <input type="text" name="nama"><br/>
            Umur <input type="text" name="umur"><br/>
            Prodi <textarea name="prodi"></textarea><br/>
            <input type="submit" value="Simpan data">

    </form>
</body>
</html>
