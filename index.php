<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Hewan</h2>
    <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>hewan</th>
                <th>Jenis</th>
                <th>Asal</th>
                <th>Jumlah</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM melin");
        while($d = mysqli_fetch_array($data)) {             echo "<tr>
                <td>{$no}</td>
                <td>{$d['nama_hewan']}</td>
                <td>{$d['jenis_hewan']}</td>
                <td>{$d['asal_hewan']}</td>
                <td>{$d['jumlah_hewan']}</td>

                <td>
  <a href='edit.php?id=$d[id]' class='btn btn-warning btn-sm'>Edit</a>
                   <a href='hapus.php?id=$d[id]'class='btn btn-danger btn-sm' onclick=\"return confirm('Hapus data?')\">Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>