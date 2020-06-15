<?php 
	require_once "conn.php"; 
	$getUsers = mysqli_query($conn,"SELECT * FROM tbl_users");
	$notif = isset($_GET['notif']) ? $_GET['notif'] : "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<hr>
		DATA USER
	<hr>
	<p style='color:green;'><b><?php echo isset($notif) ? $notif :'';?></b></p>
	<a href="form_user.php"><button>Tambah Data</button></a><br><br>
	<table border="1" width="100%">
		<thead>
			<td>No</td>
			<td>Aksi</td>
			<td>Nama</td>
			<td>Alamat</td>
		</thead>
		<tbody>
			<?php
				$no=1;
				while ($dataUser = mysqli_fetch_array($getUsers)) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>
						<a href="form_user.php?edit=<?php echo $dataUser['id_user']; ?>">Edit</a> | 
						<a href="form_user.php?delete=<?php echo $dataUser['id_user']; ?>">Hapus</a>
					</td>
					<td><?php echo $dataUser['nama']; ?></td>
					<td><?php echo $dataUser['alamat']; ?></td>
				</tr>
			<?php } ?>
			<tr></tr>
		</tbody>
	</table>
</body>
</html>