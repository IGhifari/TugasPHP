<?php

    include 'koneksi.php';
    $nis = $_POST['Nis'];
    $nilaiweb = $_POST['NilaiWEB'];
    $nilaiits = $_POST['NilaiITS'];
    $nilaigame = $_POST['NilaiGAME'];
    $nilaibd = $_POST['NilaiBD'];

    $sql = "INSERT INTO nilai (Nis, NilaiWeb, NilaiITS, NilaiGame, NilaiBasisData) VALUES('$nis', '$nilaiweb', '$nilaiits', '$nilaigame', '$nilaibd')";

    $tambah = mysqli_query($db, $sql);

    if($tambah){
        echo "<script>alert('Data berhasil diinput')</script>";
    } else {
        echo "<script>alert('Data gagal diinput')</script>";
    }

    header("location:  tampilNilai.php");
?>