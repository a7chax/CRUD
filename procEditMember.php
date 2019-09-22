<?php

include("config.php");

if (isset($_POST['daftar'])) {

    date_default_timezone_set(ASIA/JAKARTA);
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];  
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['passwd'];
    $level = $_POST['lvl'];
    $tglSimpan = date("y-m-d");

    $sql = "UPDATE profile SET nama='$nama', jenisKelamin='$jenisKelamin', alamat='$alamat', tglSimpan='$tglSimpan', username='$username', passwd='$password', lvl='$level' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: listMember.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
       die("gagal menyimpan perubahan");
    }

} else {
    # code...
    die("Akses dilarang...");

}

?>