<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (regis($_POST) > 0) {
        header("location:index.php");
    } else {
        echo "<script>alert('gagal')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>halaman regis</h1>

    <form action="" method="post">
        <label for="username">username :</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="email">email :</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="password">password :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="nama">nama :</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="telepon">telepon :</label>
        <input type="number" name="telepon" id="telepon" required>
        <br>

        <select name="idlevel" id="idLevel">
            <option value="2">Pilih Level</option>
            <option value="2">Masyarakat</option>
        </select>

        <br><br>
        <br>
        <button type="submit" name="submit">kirim</button>



    </form>
</body>

</html>