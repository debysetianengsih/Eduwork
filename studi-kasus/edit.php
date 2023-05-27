<!DOCTYPE html>
<html>

<head>
	<title>Edit Produk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

	<?php
	include('connect.php');

	$id = $_GET['id'];

	$query_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id' ");

	while ($produk = mysqli_fetch_array($query_produk)) {
		$foto		   	= $produk['foto'];
		$nama			= $produk['nama'];
		$harga   		= $produk['harga'];
		$stok		 	= $produk['stok'];
		$kategori_id 	= $produk['kategori_id'];
		$supplier_id 	= $produk['supplier_id'];
	}

	?>

	<form action="edit_process.php?id=<?php echo $id; ?>" method="post">
		<table cellpadding="10" cellspacing="0" class="table table-striped">
			<tr>
                <td>Select Image File:</td>
                <td><input type="File" name="foto"></td>
            </tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" value="<?php echo $harga; ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok" value="<?php echo $stok; ?>"></td>
			</tr>
			<tr>
                <td>ID Kategori</td>
                <td>
                <select name="kategori_id">
                    <option value="A">High Heels</option>
                    <option value="B">Sneakers</option>
                    <option value="C">Sandals</option>
                    <option value="D">Flat Shoes</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>ID Supplier</td>
                <td>
                <select name="supplier_id">
                    <option value="A">Sisi</option>
                    <option value="B">Tata</option>
                    <option value="C">Sinta</option>
                    <option value="D">Jojo</option>
                </select>
            </td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>

</body>

</html>