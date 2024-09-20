<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form pendaftaran bimbel</h1>

    <form action="create.php" method="post">
        <label for="">Nama Lengkap Antum</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label for="">Email Antum</label>
        <br>
        <input type="text" name="email">
        <br>
        <label for="">No Telepon Antum</label>
        <br>
        <input type="number" name="telp">
        <br>
        <label for="">Tanggal Lahir Antum</label>
        <br>
        <input type="date" name="tanggal_lahir">
        <br>
        <label for="">Alamat Antum</label>
        <br>
        <textarea name="alamat" id=""></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
    
</body>
</html>