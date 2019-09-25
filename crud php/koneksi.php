<?php
$koneksi = mysqli_connect("localhost","root","","nama");

if (mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_errno();
}
?>