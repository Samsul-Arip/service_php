<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

	$name = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];

	$sql = "INSERT INTO tb_karyawan(nama,alamat,jenis_kelamin) VALUES ('$name','$alamat','$jk')";

	require_once('koneksi.php');

	if(mysqli_query($con,$sql)){
		echo 'Berhasil tambah data';
	} else {
		echo 'Gagal tambah data';
	}

	mysqli_close($con);
}