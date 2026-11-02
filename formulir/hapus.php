<?php
include "koneksi.php";

// Mengambil nilai 'no' dari URL
$id = $_GET['no'];

// Query SQL untuk menghapus data berdasarkan ID (no)
$query = mysqli_query($koneksi, "DELETE FROM data WHERE no = '$id'");

// Mengecek apakah proses hapus berhasil
if ($query) {
    // Jika berhasil, alihkan kembali ke halaman tampil.php
    header("location:tampil.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>