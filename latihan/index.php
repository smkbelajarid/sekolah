<?php
include 'functions.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username= '$username' AND password = '$password' ";
    $hasil = mysqli_query($conn, $sql);

    if ($hasil->num_rows > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["idUser"] = $row["idUser"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["telepon"] = $row["telepon"];
        $_SESSION["idLevel"] = $row["idLevel"];

        if ($row["idLevel"] === '1') {
            header("location:admin/index.php");
        }

        if ($row["idLevel"] === '2') {
            header("location:masyarakat/index.php");
        }

        if ($row["idLevel"] === '3') {
            header("location:petugas/index.php");
        }
    } else {
        echo "gagal masuk";
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
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <p>belum punya akun ? <a href="register.php">register</a> </p>
</body>

</html>