<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REKAP DATA SISWA</title>
    <style>
        :root {
            --primary: #3b82f6;
            --secondary: #64748b;
            --success: #22c55e;
            --danger: #ef4444;
            --background: #f1f5f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--background);
            padding: 2rem;
            color: #1f2937;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: var(--primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.875rem;
        }

        tr:hover {
            background: #f8fafc;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-edit {
            background: var(--primary);
            color: white;
        }

        .btn-delete {
            background: var(--danger);
            color: white;
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            th, td {
                padding: 0.75rem;
            }
        }
        .tambah-data {
                margin-top: 20px;
                
            }
            .btn-tambah {
                background-color: #3b82f6;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            .btn-tambah:hover {
                background-color: #2d6eff;
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>REKAP DATA SISWA</h1>
        <div class="table-container">
            <table>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM biodata";
                    $query = mysqli_query($db, $sql);
                    while($siswa = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $siswa['Nis']; ?></td>
                    <td><?php echo $siswa['Nama']; ?></td>
                    <td><?php echo $siswa['Kelas']; ?></td>
                    <td><?php echo $siswa['Tahun']; ?></td>
                    <td>
                        <div class="action-buttons">
                            <a href="edit.php?id=<?php echo $siswa['Nis']; ?>" class="btn btn-edit">Edit</a>
                            <a href="hapus.php?id=<?php echo $siswa['Nis']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="tambah-data">
            <a href="formInput.php" class="btn-tambah">Tambah Data</a>
        </div>
    </div>
</body>
</html>