<?php
            include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <table border="1">
        <form action="simpanNilai.php" method="post" name="forminput">
            <label for="text" name="Nis">Nis</label></label>
            <select name="Nis" id="Nis">
            <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM biodata";
                    $query = mysqli_query($db, $sql);
                    while($siswa = mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $siswa['Nis'] ?>"><?php echo $siswa['Nis'] ?></option>
                <?php } ?>
            </select> <br>
            <label for="">Nilai</label>
            <input type="number" name="Nilai" id="Nilai" required>
            <br>
            <div style="display: flex; gap: 15px;">
                <input type="submit" value="SIMPAN" name="simpan">
                <input type="reset" value="BATAL" name="reset">
            </div>

        </form>
    </table>
</body>
</html>