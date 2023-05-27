<!DOCTYPE html>
<html>

<head>
	<title>Data Produk</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <style type="text/css">
            /* mengatur tombol button diheader */
            a {
                color: white;
                cursor: pointer;
                font-family: arial;
                text-align: center;
                text-decoration: none;
            }
            /* mengatur efek perubahan tombol button diheader */
            a:hover {
                color: black;
            }
        </style>
</head>

<body style= "margin : 0";>
        <table border="0" cellpadding="0" cellspacing="0">
            <!--Membuat tampilan button header-->
            <tr style="background-color: DodgerBlue;">
                <th width="500px" height="40px">
                    <h2 face="Arial" align="center"><b>SHOES.iD</b></h2>
                </th>
                <th width="100px">
                    <a href="index.html">Home</a>
                </th>
                <th width="100px">
                    <a href="index.php">Data Shoes</a>
                </th>
                <th width="100px">
                    <a href="about.html">About</a>
                </th>
                <th width="100px">
                    <a href="contact.html">Contact</a>
                </th>
                <th width="500px">
                </th>
            </tr>

	<div class=" container">
		<table class="display" id="myTable">
			<thead>
				<tr>
					<a href="create.php" class="btn btn-primary m-2 pt-2">Tambah Data</a>
					<td width="50px" class="text-center">ID Produk</td>
					<td width="100px" class="text-center">Foto</td>
					<td width="150px" class="text-center">Nama</td>
					<td width="50px" class="text-center">Harga</td>
					<td width="50px" class="text-center">Stok</td>
					<td width="50px" class="text-center">ID Kategori</td>
					<td width="50px" class="text-center">ID Supplier</td>
					<td width="200px" class="text-center">Aksi</td>
				</tr>
			</thead>
			<?php
			include('connect.php');

			$data_produk = mysqli_query($conn, "SELECT * FROM Produk");

			while ($produk = mysqli_fetch_array($data_produk)) {
			?>
				<tbody>
					<tr>
						<td class="text-center"><?php echo $produk["id"] ?></td>
						<td><?php echo '<img src="data:foto/jpg;base64,'.base64_encode( $produk['foto'] ).'" width="200px" />'; ?></td>
						<td><?php echo $produk["nama"] ?></td>
						<td><?php echo $produk["harga"] ?></td>
						<td><?php echo $produk["stok"] ?></td>
						<td><?php echo $produk["kategori_id"] ?></td>
						<td><?php echo $produk["supplier_id"] ?></td>
						<td>
							<a href="edit.php?id=<?php echo $produk['id'] ?>" class="btn btn-warning">Edit</a>
							<a href="delete_process.php?id=<?php echo $produk['id'] ?>" class="btn btn-danger" onclick="confirm('Apakah yakin mau dihapus?')">Delete</a>
						</td>
					</tr>
				<?php
			}
				?>
				</tbody>
		</table>
	</div>

		<tr style="background-color: MidnightBlue;">
                <th colspan="6" height="31px">
                    <font size="3" color="white">
                        copyright &copy;2023 Studi-Kasus. by <span>Deby Setianengsih</span>
                    </font>
                </th>
            </tr>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>