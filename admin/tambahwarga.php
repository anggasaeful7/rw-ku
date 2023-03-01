<?php
// koneksi database
include '../koneksi.php';
                if (isset($_POST['submit'])) {

                    $kk_kk = $_POST['kk_kk'];
                    $nama_kk = $_POST['nama_kk'];
                    $nik_kk = $_POST['nik_kk'];
                    $gambar_kk = $_POST['gambar_kk'];
                    $rt_kk = $_POST['rt_kk'];
                    $rw_kk = $_POST['rw_kk'];

                    $query = "INSERT INTO `kk` (`id`, `nokk`, `kepala`, `nik`, `id_rt`, `id_rw`) VALUES (NULL, '$kk_kk', '$nama_kk', '$nik_kk', '$rt_kk', '$rw_kk');";

                    $result = mysqli_query($koneksi, $query);
                    $student_id = $conn->insert_id;


                    foreach ($_POST['kk'] as $key => $value) {
                        $query_warga = "INSERT INTO `warga` (`id`, `nokk`, `nik`, `nama`, `jk`, `ttl`, `kewarganegaraan`, `status`, `pendidikan`, `pekerjaan`, `agama`, `alamat`) VALUES (NULL, '" . $_POST['kk'][$key] . "', '" . $_POST['nik'][$key] . "', '" . $_POST['nama'][$key] . "', '" . $_POST['jk'][$key] . "', '" . $_POST['ttl'][$key] . "', '" . $_POST['warga'][$key] . "', '" . $_POST['status'][$key] . "', '" . $_POST['pendidikan'][$key] . "', '" . $_POST['pekerjaan'][$key] . "', '" . $_POST['agama'][$key] . "', '" . $_POST['alamat'][$key] . "')";
                        mysqli_query($koneksi, $query_warga);
                    }
                }
                header("location:Data-warga.php");
                ?>