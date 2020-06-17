<?php
$fileSize = $_FILES['berkas']['size'];
$namaFile = $_FILES['berkas']['name'];
$tempFile = $_FILES['berkas']['tmp_name'];

$dirUpload = "upload/";

if ($fileSize > 50000) {
	echo "File Max 50 KB";
	echo "<br><a href='form_upload.php'>Kembali</a>";
}else{
	$upload = move_uploaded_file($tempFile, $dirUpload.$namaFile);

	if ($upload) {
	    echo "Upload berhasil!<br/>";
	    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	} else {
	    echo "Upload Gagal!";
	}
}

?>