<?php

 include 'koneksi.php';
    $nis = $_GET['Nis'];
    $sql = "DELETE FROM biodata WHERE Nis='$nis'";
    $hapus = mysqli_query($db, $sql);
    if($hapus){
        echo "<script>alert('Data berhasil dihapus')</script>";
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
    }

    header("location: tampil.php");
?>