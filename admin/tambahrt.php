<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$rt = $_POST['rt'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$rw = $_POST['rw'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO `rt` (`id`, `id_rt`, `nama`, `nik`, `id_rw`, `alamat`, `agama`, `status`, `pendidikan`) VALUES (NULL, '$rt', '$nama', '$nik', '$rw', '$alamat', '$agama', '$status', '$pendidikan')");

// mengalihkan halaman kembali ke index.php
header("location:Data-warga.php");
