<?php

include 'koneksi.php';

$idn = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
while ($bimbel = mysqli_fetch_array($data)) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form pendaftaran bimbel</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?php print $bimbel['id'] ?>">

        <label for="">Nama Lengkap Antum</label>
        <br>
        <input type="text" name="nama"  value="<?php print $bimbel['nama'] ?>">
        <br>
        <label for="">Email Antum</label>
        <br>
        <input type="text" name="email"  value="<?php print $bimbel['email'] ?>">
        <br>
        <label for="">No Telepon Antum</label>
        <br>
        <input type="number" name="telp"  value="<?php print $bimbel['telp'] ?>">
        <br>
        <label for="">Tanggal Lahir Antum</label>
        <br>
        <input type="date" name="tanggal_lahir"  value="<?php print $bimbel['tanggal_lahir'] ?>">
        <br>
        <label for="">Alamat Antum</label>
        <br>
        <textarea name="alamat" id=""><?php print $bimbel['tanggal_lahir'] ?></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
    
</body>
</html>

    <?php

}
?>