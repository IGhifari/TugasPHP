
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        :root {
            --primary: #4f46e5;
            --secondary: #64748b;
            --success: #22c55e;
            --danger: #ef4444;
            --background: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--background);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.875rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--secondary);
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            flex: 1;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-secondary {
            background: var(--danger);
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Input Data Siswa</h1>
        <form action="simpan.php" method="post" name="forminput">
            <div class="form-group">
                <label for="Nis">NIS</label>
                <input type="text" name="Nis" id="Nis" required>
            </div>

            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required>
            </div>

            <div class="form-group">
                <label for="Kelas">Kelas</label>
                <input type="text" name="Kelas" id="Kelas" required>
            </div>

            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="number" name="Tahun" id="Tahun" required>
            </div>

            <div class="button-group">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                <input type="reset" value="Batal" name="reset" class="btn btn-secondary">
            </div>
        </form>
    </div>

    <?php include 'koneksi.php'; ?>
</body>
</html>