<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $nis = $_GET['id'];
    $sql = "SELECT * FROM biodata WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
}

if(isset($_POST['update'])){
    $nis = $_POST['Nis'];
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];
    $tahun = $_POST['Tahun'];

    $sql = "UPDATE biodata SET Nama='$nama', Kelas='$kelas', 
            Tahun='$tahun' WHERE Nis='$nis'";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: tampil.php');
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
    <title>Edit Data Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #3b82f6;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        input {
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
            transition: all 0.3s ease;
        }

        button[type="submit"] {
            background-color: #3b82f6;
            color: white;
        }

        button[type="button"] {
            background-color: #ef4444;
            color: white;
        }

        button:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <div class="form-container">
        <form action="" method="POST">
            <div class="form-group">
                <label>NIS</label>
                <input type="text" value="<?php echo $siswa['Nis'] ?>" readonly>
                <!-- Add hidden input for NIS -->
                <input type="hidden" name="Nis" value="<?php echo $siswa['Nis'] ?>">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="Nama" value="<?php echo $siswa['Nama'] ?>" required>
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="Kelas" value="<?php echo $siswa['Kelas'] ?>" required>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="Tahun" value="<?php echo $siswa['Tahun'] ?>" required>
            </div>

            <div class="button-group">
                <button type="submit" name="update">Simpan Perubahan</button>
                <button type="button" onclick="window.location.href='tampil.php'">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>