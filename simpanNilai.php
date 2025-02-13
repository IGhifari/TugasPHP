<?php

    include 'koneksi.php';
    $nis = $_POST['Nis'];
    $nilai = $_POST['Nilai'];


    $sql = "INSERT INTO nilai (Nis, Nilai) VALUES('$nis', '$nilai')";

    $tambah = mysqli_query($db, $sql);

    if($tambah){
        echo "<script>alert('Data berhasil diinput')</script>";
    } else {
        echo "<script>alert('Data gagal diinput')</script>";
    }

    header("location:  formNilai.php");
?>