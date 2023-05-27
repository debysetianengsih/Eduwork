<?php

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sex = $_POST['sex'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	include('connect.php');

	$result = mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`) VALUES ('$nama', '$username', '$password', '$sex', '$telp', '$alamat', '$email'); ");

	header("Location:index.php");
?>