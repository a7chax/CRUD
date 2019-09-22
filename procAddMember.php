<?php

include("config.php");

if (isset($_POST['daftar'])) {

    date_default_timezone_set(ASIA/JAKARTA);

    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];  
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['passwd'];
    $level = $_POST['lvl'];
    $tglSimpan = date("y-m-d");

    $sql = "INSERT INTO profile(nama, jenisKelamin, alamat, tglSimpan, username, passwd, lvl) 
    VALUE ('$nama','$jenisKelamin','$alamat','$tglSimpan','$username','$password','$level')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    # code...
    die("Akses dilarang...");

}

?>