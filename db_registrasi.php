<?php
    include "cek_koneksi.php";

    $sql = "CREATE DATABASE registrasi";
    if (mysqli_query($connect, $sql)) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
    
?>