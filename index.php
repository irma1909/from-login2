<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran bimbel</title>
</head>
<body>
    <h1 style="text-align: center; color: red; font-weigt: 600;">data penerimaan </h1>

    <a href="form.php">Tambah Data Peserta Bimbel</a>
    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <th width="5%">No.</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Action</th>

        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while($bimbel=mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nama'] ?></td>
                <td><?php print $bimbel['email'] ?></td>
                <td><?php print $bimbel['telp'] ?></td>
                <td><?php print $bimbel['alamat'] ?></td>
                <td><?php print $bimbel['tanggal lahir'] ?></td>
                <td>
                    <a href="formEdit.php?id=<?php print $bimbel['id']?>">edit</a>
                    <a href="hapus.php?id=<?php print $bimbel['id']?>" onclick="return confirm('Y$ki333n m4u h4pus d4t4?')">hapus</a>
                </td>
            </tr>
            <?php

        }
        ?>
    </table>
</body>
</html>