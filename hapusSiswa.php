<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $nis = $_GET['id'];
    
    // Delete related records in nilai table first (if exists)
    $sql_nilai = "DELETE FROM nilai WHERE Nis='$nis'";
    mysqli_query($db, $sql_nilai);
    
    // Then delete the student record
    $sql_siswa = "DELETE FROM biodata WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql_siswa);
    
    if($query){
        header('Location: tampil.php');
    } else {
        die("Gagal menghapus data...");
    }
} else {
    die("Akses dilarang...");
}
?>