<?php

	$foto 		 = $_POST['foto'];
	$nama 		 = $_POST['nama'];
	$harga		 = $_POST['harga'];
	$stok 		 = $_POST['stok'];
	$kategori_id = $_POST['kategori_id'];
	$supplier_id = $_POST['supplier_id'];

	include('connect.php');

	$result = mysqli_query($conn, "INSERT INTO `produk` (`foto`, `nama`, `harga`, `stok`, `kategori_id`, `supplier_id`) VALUES ('$foto', $nama', '$harga', '$stok', '$kategori_id', '$supplier_id'); ");

	header("Location:index.php");
?>