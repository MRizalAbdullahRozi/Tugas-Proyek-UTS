<?php
	include "connected.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$pesanan = $_POST['pesanan'];
	$alamat = $_POST['alamat'];
	$bayar = $_POST['bayar'];

	$sql = "INSERT INTO form_pesanan ( id_pesanan, nama, pesanan, alamat, bayar)
	VALUES  ('id_pesanan','$nama','$pesanan','$alamat','bayar')";
	if (mysqli_query($con, $sql)) {
		echo"<script>alert('Pesanan Anda telah diterima, silahkan melakukan pembayaran dengan datang ke alamat')</script>";
	} else {
		echo "Erorr : " . $sql . "<br>" .  mysqli_error($con);
	}

	mysqli_close($con);
?>
	<meta http-equiv="refresh" content="0; url=http://localhost/TugasProyek/pesanan.php">
