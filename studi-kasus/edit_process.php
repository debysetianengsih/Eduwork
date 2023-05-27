<?php

	$id_produk	= $_POST['id'];

	$foto = $_POST['foto'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$kategori_id = $_POST['kategori_id'];
	$supplier_id = $_POST['supplier_id'];

	include('connect.php');

	$result = mysqli_query($conn, "UPDATE produk SET foto = '$foto', nama = '$nama', harga = '$harga', stok = '$stok', kategori_id = '$kategori_id', supplier_id = '$supplier_id' WHERE id = '$id' ");

?>