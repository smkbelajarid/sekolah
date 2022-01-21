<?php

require '../functions.php';
$conn = mysqli_connect("localhost", "root", "", "latihan");

// $siswa = query("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>

<body>



    <h1>halaman admin</h1>

    <a href="user/index.php">halaman data user</a>



    <!-- <br>
    <a href="tambah.php">tambah data</a>
    <br> <br><br>



    <?php $i = 1; ?>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <td>no</td>
            <td>nama</td>
            <td>umur</td>
            <td>aksi</td>
        </tr>


        <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_siswa"]; ?></td>
                <td><?= $row["umur"]; ?></td>
                <td><a href="">hapus</a> | <a href="">edit</a></td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>



    </table> -->

</body>

</html>