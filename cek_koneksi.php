<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "registrasi";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if ($connect) {
        echo "Koneksi dengan mysql berhasil";
    } else {
        echo "koneksi dengan mysql gagal". mysqli_connect();
    }
?>