<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <header>
        <h3>Member terdaftar</h3>
    </header>

    <nav>
       <a href="formAddMember.php"><button type="button" class="btn btn-info">Tambah member</button></a>
    </nav>

    <br>

    <table class="table table-bordered">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>

        </thead>
        <tbody>

        <?php
		$sql = "SELECT * FROM profile";
		$query = mysqli_query($db, $sql);
		
		while($data = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$data['id']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['jenisKelamin']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td>".$data['username']."</td>";
			echo "<td>".$data['lvl']."</td>";
			
			echo "<td>";
			echo "<a href='formEditMember.php?id=".$data['id']."'>Edit</a> | ";
			echo "<a href='deleteMember.php?id=".$data['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>