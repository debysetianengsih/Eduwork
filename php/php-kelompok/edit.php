<!DOCTYPE html>
<html>

<head>
	<title>Edit Pelanggan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

	<?php
	include('connect.php');

	$id_anggota = $_GET['id_anggota'];

	$query_anggota = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota' ");

	while ($anggota = mysqli_fetch_array($query_anggota)) {
		$nama 			= $anggota['nama'];
		$username   	= $anggota['username'];
		$password   	= $anggota['password'];
		$jenis_kelamin 	= $anggota['sex'];
		$telpon 		= $anggota['telp'];
		$alamat 		= $anggota['alamat'];
		$email      	= $anggota['email'];
	}

	?>

	<form action="edit_process.php?id_anggota=<?php echo $id_anggota; ?>" method="post">
		<table cellpadding="10" cellspacing="0" class="table table-striped">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="sex" value="<?php echo $jenis_kelamin; ?>">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="number" name="telp" value="<?php echo $telpon; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>

</body>

</html>