<?php

$id_anggota = $_GET['id_anggota'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['sex'];
$telpon = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

include('connect.php');

$result = mysqli_query($conn, "UPDATE anggota SET nama = '$nama', username = '$username', password = '$password', jenis_kelamin = '$sex', telpon = '$telp', alamat = '$alamat', email = '$email' WHERE id_anggota = '$id_anggota' ");

header("Location:index.php");

?>