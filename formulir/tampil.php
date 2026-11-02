<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftar</title>
</head>
<body>

    <h2>Data Pendaftar yang Masuk</h2>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Handphone</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM data");
        $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['handphone']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td>
                <!-- Tombol Edit -->
                <a href="edit.php?no=<?php echo $row['no']; ?>">Edit</a> | 
                
                <!-- Tombol Hapus dengan konfirmasi JavaScript sederhana -->
                <a href="hapus.php?no=<?php echo $row['no']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php">Tambah Data Baru</a>

</body>
</html>