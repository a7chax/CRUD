<?php

include("config.php");

if (isset($_GET['id'])) {
    //header('Location: listMember.php');
} 

$id = $_GET['id'];

$sql = "SELECT * FROM profile WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah data Member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container pb-4 pt-5">
    <header>
        <h3 class="">Ubah Data Member</h3>
    </header>
    <br>
    <form action="procEditMember.php" class="col-md-6" method="POST">

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>

            <br>
            <label for="jenisKelamin">Jenis kelamin</label>
            <?php $jk = $data['jenisKelamin']; ?>
            <br>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jenisKelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>>
            <label class="form-check-label" for="jenisKelamin">
            Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jenisKelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>
            <label class="form-check-label" for="jenisKelamin">
            Perempuan
            </label>
        </div>
        <br>
        <br>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
        </div>

        <div class="form-group">
            <label for="passwd">Password</label>
            <input type="password" class="form-control" name="passwd" id="myInput" value="<?php echo $data['passwd'] ?>">
            <input type="checkBox" onclick="showPassword()"> Show Password
        </div>

        <br>
        <label for="lvl">Level</label>
        <?php $level = $data['lvl']; ?>

        <br>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="lvl" value="Admin" <?php echo ($level == 'Admin') ? "checked": "" ?>>
            <label class="form-check-label" for="lvl">
            Admin
            </label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="lvl" value="Operator" <?php echo ($level == 'Operator') ? "checked": "" ?>>
            <label class="form-check-label" for="lvl">
            Operator
            </label>
        </div>
        <br>
        <br>
        
        <input type="submit" value="Daftar" name="daftar" class="btn btn-info">

    
    </form>
</div>
</body>
<script>
function showPassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
