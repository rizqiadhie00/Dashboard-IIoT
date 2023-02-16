<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tabel_tes";

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){

    die("Koneksi Tidak Berhasil". mysqli_connect_error());

}