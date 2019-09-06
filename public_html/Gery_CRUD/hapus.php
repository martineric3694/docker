<?php
	include("conn.php");
	$id = $_GET['kode_barang'];
	$result = mysqli_query($conn, "DELETE FROM barang WHERE KODE_BRG='".$id."'");
	header("Location:inss.php");
?>