<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $nis = $_GET['id'];
    
    $sql = "DELETE FROM nilai WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql);
    
    if($query){
        header('Location: tampilNilai.php');
    } else {
        die("Gagal menghapus data...");
    }
} else {
    die("Akses dilarang...");
}
?>