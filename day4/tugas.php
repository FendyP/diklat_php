<?php 
	require_once "conn.php"; 
	$getSiswas = mysqli_query($conn,"SELECT * FROM tbl_siswa");
	$notif = isset($_GET['notif']) ? $_GET['notif'] : "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<hr>
		TUGAS - DATA SISWA
	<hr>
	<p style='color:green;'><b><?php echo isset($notif) ? $notif :'';?></b></p>
	<a href="form_tugas.php"><button>Tambah Data</button></a><br><br>
	<table border="1" width="100%">
		<thead>
			<td>No</td>
			<td>Aksi</td>
			<td>No. Induk</td>
			<td>Nama</td>
			<td>No.Telp</td>
			<td>Alamat</td>
		</thead>
		<tbody>
			<?php
				$no=1;
				while ($dataSiswa = mysqli_fetch_array($getSiswas)) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>
						<a href="form_tugas.php?edit=<?php echo $dataSiswa['id_siswa']; ?>">Edit</a> | 
						<a href="form_tugas.php?delete=<?php echo $dataSiswa['id_siswa']; ?>">Hapus</a>
					</td>
					<td><?php echo $dataSiswa['nama']; ?></td>
					<td><?php echo $dataSiswa['no_induk']; ?></td>
					<td><?php echo $dataSiswa['no_telp']; ?></td>
					<td><?php echo $dataSiswa['alamat']; ?></td>
				</tr>
			<?php } ?>
			<tr></tr>
		</tbody>
	</table>
</body>
</html>