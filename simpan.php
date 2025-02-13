<?php

    include 'koneksi.php';
    $nis = $_POST['Nis'];
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];
    $tahun = $_POST['Tahun'];

    $sql = "INSERT INTO biodata (Nis, Nama, Kelas, Tahun) VALUES('$nis', '$nama', '$kelas', '$tahun')";

    $tambah = mysqli_query($db, $sql);

    if($tambah){
        echo "<script>alert('Data berhasil diinput')</script>";
    } else {
        echo "<script>alert('Data gagal diinput')</script>";
    }

    header("location: tampil.php");
?>