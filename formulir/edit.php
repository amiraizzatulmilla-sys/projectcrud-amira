<?php
include "koneksi.php";

// Mengambil nilai 'no' dari URL
$id = $_GET['no'];

// Mengambil data berdasarkan ID tersebut
$result = mysqli_query($koneksi, "SELECT * FROM data WHERE no = '$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pendaftar</title>
</head>
<body>

    <h1>Edit Data Pendaftar</h1>

    <!-- Form mengarah ke file proses-edit.php -->
    <form method="POST" action="proses-edit.php">
        <!-- Input hidden untuk menyimpan ID (no) agar terbawa saat disubmit -->
        <input type="hidden" name="no" value="<?php echo $row['no']; ?>">

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

        <label>Nomor Handphone:</label><br>
        <input type="text" name="handphone" value="<?php echo $row['handphone']; ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?php echo $row['alamat']; ?></textarea><br><br>

        <button type="submit" name="update">Update Data</button>
    </form>

    <br>
    <a href="tampil.php">Kembali ke Daftar Data</a>

</body>
</html>