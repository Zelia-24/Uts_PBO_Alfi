<?php
include 'database.php';

$sql = "SELECT * FROM Tabel_barang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <h2>Data Barang</h2>
    <a href="add_data.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id_barang']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['harga_beli']; ?></td>
            <td><?php echo $row['harga_jual']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id_barang']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id_barang']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>