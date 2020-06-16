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
		$getUsers = mysqli_query($conn,"SELECT * FROM tbl_users WHERE id_user=$id");
		while ($dataUser = mysqli_fetch_array($getUsers)) {
			$nama = $dataUser['nama'];
			$alamat = $dataUser['alamat'];
		}
	}

	// POST LOGIC
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$id = isset($_POST['id']) ? $_POST['id'] : "";
		$action = isset($_POST['action']) ? $_POST['action'] : "";

		$nama = strtoupper(isset($_POST['nama']) ? $_POST['nama'] : "");
		$alamat = strtoupper(isset($_POST['alamat']) ? $_POST['alamat'] : "");

		if ($action == 'ADD') {
			$sql = mysqli_query($conn, "INSERT INTO tbl_users (id_user, nama, alamat)
								VALUES ('', '$nama', '$alamat')");
			if ($sql) {
				header("location:user.php?notif=Tambah Data Berhasil !");			
			}else{
				header("location:user.php?notif=Tambah Data Gagal !");			
			}
		}elseif($action == 'EDIT'){
			$sql = mysqli_query($conn, "UPDATE tbl_users SET nama='$nama', alamat='$alamat' WHERE id_user='$id'");
			if ($sql) {
				header("location:user.php?notif=Update Data Berhasil !");
			}else{
				header("location:user.php?notif=Update Data Gagal !");
			}

		}elseif($action == 'DELETE'){
			$sql = mysqli_query($conn, "DELETE FROM tbl_users WHERE id_user='$id'");
			if ($sql) {
				header("location:user.php?notif=Delete Data Berhasil !");
			}else{
				header("location:user.php?notif=Delete Data Gagal !");
			}
		}else{
			header("location:user.php?notif=Action tidak terdaftar !");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM <?php echo $proses; ?> USER</title>
</head>
<body>
	<hr>
		FORM <?php echo $proses; ?> USER
	<hr><br>
	<a href="user.php"><button>List Data</button></a><br><br>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="id" value="<?php echo $id ?>" required>
		<input type="hidden" name="action" value="<?php echo $proses ?>" required>

		<?php if ($proses != 'DELETE'){ ?>
			<input type="text" name="nama" placeholder="Nama" value="<?php echo isset($nama) ? $nama : ''; ?>" required><br>
			<textarea name="alamat" cols="" width="" placeholder="Alamat"><?php echo isset($alamat) ? $alamat : ''; ?></textarea><br><br>
			
		<?php }else{ ?>
			<p><b>Apakah anda akan yakin menghapus data "<i><?php echo $nama; ?></i>" ?</b></p>
		<?php } ?>

		<button type="submit"><?php echo $proses != "DELETE" ? "Simpan" : "Hapus"; ?></button>
	</form>
	<a href="user.php"><button>Batal</button></a>
</body>
</html>