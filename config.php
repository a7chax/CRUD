<?php
$server = "localhost";
$user = "root";
$password = "asusa442u";
$nama_database = "sekolah";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} 

?>
