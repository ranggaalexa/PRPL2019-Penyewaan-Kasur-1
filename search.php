<?php 
require "conf.php";
$pelanggan = query("SELECT * FROM pelanggan"); 
	if (isset($_POST["kirim"]) ) {
		$pelanggan = kirim($_POST["cari"]);
	}
?>

<table border="5" cellpadding="5" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
		</tr>

		
		<?php foreach ($pelanggan as $row) : ?>

		<tr>	
				<td><?= $row["ID"]; ?></td>
				<td><?= $row["Nama"]; ?></td>
				<td><?= $row["Alamat"]; ?></td>
				<td><?= $row["Notelp"]; ?></td>
			
		</tr>
		
		<?php endforeach; ?>
	</table>