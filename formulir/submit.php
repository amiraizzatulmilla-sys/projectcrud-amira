<?php

include "koneksi.php";

$nama      = $_POST['nama'];
$email     = $_POST['email'];
$handphone = $_POST['handphone'];
$alamat    = $_POST['alamat'];

// Menyesuaikan dengan nama tabel 'data' di phpMyAdmin
$query = mysqli_query($koneksi, "INSERT INTO data (nama, email, handphone, alamat) VALUES ('$nama', '$email', '$handphone', '$alamat')");

if($query == TRUE){
    echo "Berhasil tersimpan ke database";
}else{
    echo "Gagal tersimpan";
}

?>