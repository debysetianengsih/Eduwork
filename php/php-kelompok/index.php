<!DOCTYPE html>
<html>

<head>
	<title>Praktikum Kelompok</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

	<a href="create.php" class="btn btn-primary m-2 pt-2">Tambah Data</a>

	<div class=" container">
		<table class="display" id="myTable">
			<thead>
				<tr>
					<td width="50px" class="text-center">ID Anggota</td>
					<td width="50px" class="text-center">Nama</td>
					<td width="50px" class="text-center">Usename</td>
					<td width="50px" class="text-center">Password</td>
					<td width="50px" class="text-center">Jenis Kelamin</td>
					<td width="50px" class="text-center">Telpon</td>
					<td width="200px" class="text-center">Alamat</td>
					<td width="50px" class="text-center">Email</td>
					<td width="200px" class="text-center">Aksi</td>
				</tr>
			</thead>
			<?php
			include('connect.php');

			$data_anggota = mysqli_query($conn, "SELECT * FROM anggota");

			while ($anggota = mysqli_fetch_array($data_anggota)) {
			?>
				<tbody>
					<tr>
						<td class="text-center"><?php echo $anggota["id_anggota"] ?></td>
						<td><?php echo $anggota["nama"] ?></td>
						<td><?php echo $anggota["username"] ?></td>
						<td><?php echo $anggota["password"] ?></td>
						<td><?php echo $anggota["sex"] ?></td>
						<td><?php echo $anggota["telp"] ?></td>
						<td><?php echo $anggota["alamat"] ?></td>
						<td><?php echo $anggota["email"] ?></td>
						<td>
							<a href="edit.php?id_anggota=<?php echo $anggota['id_anggota'] ?>" class="btn btn-warning">Edit</a>
							<a href="delete_process.php?id_anggota=<?php echo $anggota['id_anggota'] ?>" class="btn btn-danger" onclick="confirm('Apakah yakin mau dihapus?')">Delete</a>
						</td>
					</tr>
				<?php
			}
				?>
				</tbody>
		</table>
	</div>
</body>

</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>