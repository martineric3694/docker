<?php
	include('conn.php');
	$query = "SELECT * FROM barang";
	$result = mysqli_query($conn,$query);
?>

<form action="#" method="post" name="edit">
	<table>
		<tr>
			<td>Kode Barang : </td>
			<td><input type="text" name="kode_barang"></td>
		</tr>
		<tr>
			<td>Nama Barang : </td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Harga Barang : </td>
			<td><input type="text" name="harga_barang"></td>
		</tr>
		<tr>
			<td>Stok Barang : </td>
			<td><input type="text" name="stok_barang"></td>
			<td><input type="submit" value="INSERT" name="insert"></td>
			<td><input type="submit" value="SIMPAN" name="simpan" ></td>
		</tr>
		
	</table>
</form>

<?php
if (!empty($_POST['kode_barang']) && !empty($_POST['insert'])) {
		# code...
	
	
			$kode = $_POST['kode_barang'];
			$nama = $_POST['nama_barang'];
			$harga = $_POST['harga_barang'];
			$stok = $_POST['stok_barang'];
			
			$query = "INSERT INTO barang VALUES('".$kode."','".$nama."','".$harga."','".$stok."')";
			mysqli_query($conn,$query);
			header('refresh:0');
		 
	}
	?>
	<table border="1">
	<tr>
		<th>KODE BARANG</th>
		<th>NAMA BARANG</th>
		<th>HARGA BARANG</th>
		<th>STOK</th>
	</tr>
	<?php
		if ($result) {
		while ($row = mysqli_fetch_array($result)) {

	?>	
	
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>	
		<td><?php echo"<a href='hapus.php?kode_barang=$row[0]'>DELETE</a>"?></td>
		<td><?php echo"<a href='inss.php?kode_barang=$row[0]'>EDIT</a>"?></td>
	</tr>
	<?php
	}
}
function inserts(){
	
}
?>