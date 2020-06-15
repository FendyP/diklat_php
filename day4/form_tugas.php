<?php
	require_once "conn.php"; 
	// PARAM
	$edit = isset($_GET['edit']) ? $_GET['edit'] : "";
	$delete = isset($_GET['delete']) ? $_GET['delete'] : "";

	if ($edit != '') {
		$proses = "EDIT";
		$id = $edit;
		$sql = "";
	}elseif ($delete != '') {
		$proses = "DELETE";
		$id = $delete;
	}else{
		$proses = "ADD";
		$id = '';
	}

	if ($id != '') {
		$getSiswas = mysqli_query($conn,"SELECT * FROM tbl_siswa WHERE id_siswa=$id");
		while ($dataSiswa = mysqli_fetch_array($getSiswas)) {
			$nama = $dataSiswa['nama'];
			$alamat = $dataSiswa['alamat'];
			$no_telp = $dataSiswa['no_telp'];
			$no_induk = $dataSiswa['no_induk'];
		}
	}

	// POST LOGIC
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$id = isset($_POST['id']) ? $_POST['id'] : "";
		$action = isset($_POST['action']) ? $_POST['action'] : "";

		$nama = strtoupper(isset($_POST['nama']) ? $_POST['nama'] : "");
		$no_induk = strtoupper(isset($_POST['no_induk']) ? $_POST['no_induk'] : "");
		$no_telp = strtoupper(isset($_POST['no_telp']) ? $_POST['no_telp'] : "");
		$alamat = strtoupper(isset($_POST['alamat']) ? $_POST['alamat'] : "");
		// print_r($_POST);die();
		if ($action == 'ADD') {
			$sql = mysqli_query($conn, "INSERT INTO tbl_siswa (id_siswa, no_induk, no_telp, nama, alamat)
								VALUES ('', '$no_induk', '$no_telp', '$nama', '$alamat')");
			if ($sql) {
				header("location:tugas.php?notif=Tambah Data Berhasil !");			
			}else{
				header("location:tugas.php?notif=Tambah Data Gagal !");		
			}
		}elseif($action == 'EDIT'){
			$sql = mysqli_query($conn, "UPDATE tbl_siswa SET nama='$nama', no_induk='$no_induk', no_telp='$no_telp', alamat='$alamat' WHERE id_siswa='$id'");
			if ($sql) {
				header("location:tugas.php?notif=Update Data Berhasil !");
			}else{
				header("location:tugas.php?notif=Update Data Gagal !");
			}

		}elseif($action == 'DELETE'){
			$sql = mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id_siswa='$id'");
			if ($sql) {
				header("location:tugas.php?notif=Delete Data Berhasil !");
			}else{
				header("location:tugas.php?notif=Delete Data Gagal !");
			}
		}else{
			header("location:tugas.php?notif=Action tidak terdaftar !");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM <?php echo $proses; ?> SISWA</title>
</head>
<body>
	<hr>
		FORM <?php echo $proses; ?> SISWA
	<hr><br>
	<a href="tugas.php"><button>List Data</button></a><br><br>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="id" value="<?php echo $id ?>" required>
		<input type="hidden" name="action" value="<?php echo $proses ?>" required>

		<?php if ($proses != 'DELETE'){ ?>
			<input type="text" name="nama" placeholder="Nama" value="<?php echo isset($nama) ? $nama : ''; ?>" required><br>
			<input type="text" name="no_induk" placeholder="No. Induk" value="<?php echo isset($no_induk) ? $no_induk : ''; ?>" required><br>
			<input type="text" name="no_telp" placeholder="No. Telp" value="<?php echo isset($no_telp) ? $no_telp : ''; ?>" required><br>
			<textarea name="alamat" cols="" width="" placeholder="Alamat"><?php echo isset($alamat) ? $alamat : ''; ?></textarea><br><br>
			
		<?php }else{ ?>
			<p><b>Apakah anda akan yakin menghapus data "<i><?php echo $nama; ?></i>" ?</b></p>
		<?php } ?>

		<button type="submit"><?php echo $proses != "DELETE" ? "Simpan" : "Hapus"; ?></button>
	</form>
	<a href="tugas.php"><button>Batal</button></a>
</body>
</html>