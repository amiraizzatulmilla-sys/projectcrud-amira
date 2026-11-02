<?php
include "koneksi.php";

if (isset($_POST['update'])) {
    $no        = $_POST['no'];
    $nama      = $_POST['nama'];
    $email     = $_POST['email'];
    $handphone = $_POST['handphone'];
    $alamat    = $_POST['alamat'];

    // Query SQL untuk memperbarui data
    $query = mysqli_query($koneksi, "UPDATE data SET nama='$nama', email='$email', handphone='$handphone', alamat='$alamat' WHERE no='$no'");

    if ($query) {
        echo "Data berhasil diupdate! <a href='tampil.php'>Lihat Data</a>";
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>