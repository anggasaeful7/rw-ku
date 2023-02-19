<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$rw = $_POST['rw'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO `rw` (`id`, `id_rw`, `nama`, `nik`, `alamat`, `agama`, `status`, `pendidikan`) VALUES (NULL, '$rw', '$nama', '$nik', '$alamat', '$agama', '$status', '$pendidikan')");

// mengalihkan halaman kembali ke index.php
header("location:Data-warga.php");
