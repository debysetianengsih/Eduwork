<?php

$id = $_GET['id'];

include('connect.php');

$query = mysqli_query($conn, "DELETE FROM produk  WHERE id = '$id' ");

header("Location:index.php");
?>