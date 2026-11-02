<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_db = "formulir";

$koneksi = mysqli_connect($server, $user, $password, $nama_db);

if($koneksi == TRUE){
    echo "Berhasil Terhubung ke database";
}else{
    echo "gagal terhubung";
}

?>