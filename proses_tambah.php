<?php
    include "cek_koneksi.php";

    $no_un_smp = $_GET['no_un_smp'];
    $nama = $_GET['nama'];
    $kelamin = $_GET['kelamin'];
    $tempat_lahir = $_GET['tempat_lahir'];
    $tanggal_lahir = $_GET['tanggal_lahir'];
    $ortu = $_GET['ortu'];
    $alamat = $_GET['alamat'];
    $kota = $_GET['kota'];
    $no_hp = $_GET['no_hp'];
    $asal_sekolah = $_GET['asal_sekolah'];
    $agama = $_GET['agama'];

    $sql = "INSERT INTO siswa VALUES
            ('$no_un_smp', '$nama', '$kelamin', '$tempat_lahir', '$tanggal_lahir', '$ortu', '$alamat', '$kota', 
            '$no_hp', '$asal_sekolah', '$agama')";
    
    if (mysqli_query($connect, $sql)) {
        echo "Record berhasil ditambahkan";
        
    } else {
        echo "Record gagal ditambahkan <br>". mysqli_error($connect);
        ?>
        <a href="form_registrasi.html"><br> Kembali ke Awal</a>
        <?php
    }

    mysqli_close($connect);
?>