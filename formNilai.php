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

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        input[type="submit"], input[type="reset"] {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: #1a73e8;
            color: white;
        }

        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #1557b0;
        }

        input[type="reset"]:hover {
            background-color: #bb2d3b;
        }
    </style>
</head>
<body>
    <h1>Form Input Data Nilai Siswa</h1>
    <div class="form-container">
        <form action="simpanNilai.php" method="post" name="forminput">
            <div class="form-group">
                <label for="Nis">NIS</label>
                <select name="Nis" id="Nis">
                    <?php
                        $sql = "SELECT * FROM biodata";
                        $query = mysqli_query($db, $sql);
                        while($siswa = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $siswa['Nis'] ?>"><?php echo $siswa['Nis'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="Nilai">Nilai Web</label>
                <input type="number" name="NilaiWEB" id="NilaiWEB" required>
                <label for="Nilai">Nilai ITS</label>
                <input type="number" name="NilaiITS" id="NilaiITS" required>
                <label for="Nilai">Nilai Game</label>
                <input type="number" name="NilaiGAME" id="NilaiGAME" required>
                <label for="Nilai">Nilai Basis Data</label>
                <input type="number" name="NilaiBD" id="NilaiBD" required>
            </div>

            <div class="button-group">
                <input type="submit" value="SIMPAN" name="simpan">
                <input type="reset" value="BATAL" name="reset">
            </div>
        </form>
    </div>
</body>
</html>