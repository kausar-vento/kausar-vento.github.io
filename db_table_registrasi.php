<?php
     $namaHost = "localhost";
     $username = "root";
     $password = "";
     $database = "registrasi";

     $connect = mysqli_connect($namaHost, $username, $password, $database);

    $sql = "CREATE TABLE siswa(
        no_un_smp INT PRIMARY KEY,
        nama VARCHAR (50) NOT NULL,
        kelamin VARCHAR (30) NOT NULL,
        tempat_lahir VARCHAR(40) NOT NULL,
        tanggal_lahir DATE NOT NULL,
        ortu VARCHAR (50) NOT NULL,
        alamat TEXT NOT NULL,
        kota VARCHAR (50) NOT NULL,
        no_hp INT (10) NOT NULL,
        asal_sekolah VARCHAR (50) NOT NULL,
        agama VARCHAR (40) NOT NULL
    )";

    if (mysqli_query($connect, $sql)) {
        echo "Table mahasiswa berhasil dibuat";
    } else {
        echo "Table Mahasiswa tidak berhasil dibuat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>