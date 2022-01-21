<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "latihan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama_siswa"]);
    $umur = htmlspecialchars($data["umur"]);

    $query = "INSERT INTO `siswa` VALUES
            ('','$nama', '$umur')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function regis($data)
{
    global $conn;

    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $nama = htmlspecialchars($data["nama"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $idUser = htmlspecialchars($data["idlevel"]);

    $query = "INSERT INTO `user` VALUES
            ('','$username','$email', '$password','$nama','$telepon','$idUser')";



    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
