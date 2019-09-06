<?php

$conn;
$result = false;
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}else{
	$conn = mysqli_connect("mysql", "root", "rootpassword", "adpphp");
}

?>