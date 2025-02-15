<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $nis = $_GET['id'];
    $sql = "SELECT * FROM nilai WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql);
    $nilai = mysqli_fetch_assoc($query);
}

if(isset($_POST['update'])){
    $nis = $_POST['Nis'];
    $nilaiweb = $_POST['NilaiWEB'];
    $nilaiits = $_POST['NilaiITS'];
    $nilaigame = $_POST['NilaiGAME'];
    $nilaibd = $_POST['NilaiBD'];

    if($nilaiweb < 0 || $nilaiweb > 100 || $nilaiits < 0 || $nilaiits > 100 || $nilaigame < 0 || $nilaigame > 100 || $nilaibd < 0 || $nilaibd > 100){
        echo "<script>alert('Nilai Harus dari 0 sampai 100'); window.history.back();</script>";
        exit;
    }

    $sql = "UPDATE nilai SET NilaiWEB='$nilaiweb', NilaiITS='$nilaiits', 
            NilaiGAME='$nilaigame', NilaiBasisData='$nilaibd' WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: tampilNilai.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #1a73e8;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button[type="submit"] {
            background-color: #1a73e8;
            color: white;
        }

        button[type="button"] {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Edit Data Nilai Siswa</h1>
    <div class="form-container">
        <form action="" method="POST">
            <input type="hidden" name="Nis" value="<?php echo $nilai['Nis'] ?>">
            
            <div class="form-group">
                <label>NIS: <?php echo $nilai['Nis'] ?></label>
            </div>

            <div class="form-group">
                <label for="NilaiWEB">Nilai Web</label>
                <input type="number" name="NilaiWEB" value="<?php echo $nilai['NilaiWeb'] ?>" required>
            </div>

            <div class="form-group">
                <label for="NilaiITS">Nilai ITS</label>
                <input type="number" name="NilaiITS" value="<?php echo $nilai['NilaiITS'] ?>" required>
            </div>

            <div class="form-group">
                <label for="NilaiGAME">Nilai Game</label>
                <input type="number" name="NilaiGAME" value="<?php echo $nilai['NilaiGame'] ?>" required>
            </div>

            <div class="form-group">
                <label for="NilaiBD">Nilai Basis Data</label>
                <input type="number" name="NilaiBD" value="<?php echo $nilai['NilaiBasisData'] ?>" required>
            </div>

            <div class="button-group">
                <button type="submit" name="update">Simpan Perubahan</button>
                <button type="button" onclick="window.location.href='tampilNilai.php'">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>