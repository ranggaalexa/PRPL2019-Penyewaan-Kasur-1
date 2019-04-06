<?php 

	$conn = mysqli_connect("localhost", "root", "", "penyewaankasur");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;}

function kirim($cari) {
	$query = "SELECT * FROM pelanggan WHERE Nama LIKE '%$cari%'";

	return query($query);
}

 ?>