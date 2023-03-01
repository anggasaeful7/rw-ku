<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RW-KU | Input Data Keluarga</title>

  <link rel="stylesheet" href="assets/css/main/app.css" />
  <link rel="stylesheet" href="assets/css/main/app-dark.css" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />
</head>

<body>
  <script src="assets/js/initTheme.js"></script>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="index.html"><span class="rw">RW</span>-KU.co.id</a>
            </div>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer" />
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
              </svg>
            </div>
            <div class="sidebar-toggler x">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item">
              <a href="index.php" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard Admin</span>
              </a>
            </li>

            <li class="sidebar-item active">
              <a href="Input-Data-Keluarga.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data Kartu Keluarga</span>
              </a>
            </li>
            <li class="sidebar-item has-active">
              <a href="Input-RT.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data RT</span>
              </a>
            </li>
            <li class="sidebar-item has-active">
              <a href="Input RW.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data RW</span>
              </a>
            </li>

            <li class="sidebar-item has-active">
              <a href="surat.php" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Data Surat On Proses</span>
              </a>
            </li>
            <li class="sidebar-item has-active">
              <a href="Data-Warga.php" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Data Warga</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <div class="page-title">
          <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Input Data Kartu Keluarga</h3>
              <p class="text-subtitle text-muted">
                silahkan isi beberapa kolom di bawah untuk memasukkan data
                Kartu Keluarga.
              </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Input Data Kartu Keluarga
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <section class="section">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Masukkan Data Kartu Keluarga</h4>
            </div>
          <form action="tambahwarga.php" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="no-kk">NO KK</label>
                    <input type="text" class="form-control" id="no-kk" name="kk_kk" placeholder="Masukkan Nomor Kartu Keluarga" />
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik_kk" placeholder="Masukkan NIK" />
                  </div>
                  <div class="form-group">
                    <label for="no-kk">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="nama-kk" name="nama_kk" placeholder="Masukkan Nama Kepala Keluarga" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="formFileSm" class="form-label">Gambar Scan Kartu Keluarga</label>
                    <input class="form-control form-control-sm" name="gambar_kk" id="formFileSm" type="file" />
                  </div>
                  <div class="form-group">
                    <label for="RT">RT</label>
                    <input type="text" class="form-control" id="RT" name="rt_kk" placeholder="Kartu Keluarga Masuk ke RT berapa" />
                  </div>
                  <div class="form-group">
                    <label for="RW">RW</label>
                    <input type="text" class="form-control" id="RW" name="rw_kk" placeholder="Kartu Keluarga Masuk ke RW berapa" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        
        <h6 class="card-title mt-3 text-danger mb-2">
                  *Masukkan Data Anggota Keluarga Pertama Sebagai Kepala Keluarga
                </h6>
        
        <!--  -->
        
          <!-- Form 1 -->
          <section id="section">
            <div class="card form-row">
              <div class="card-header">
                <h4 class="card-title">
                  Masukkan Data Anggota Keluarga Pertama
                </h4>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="no-kk">NO KK</label>
                      <input type="text" class="form-control" id="no-kk" name="kk[]" placeholder="Masukkan Nomor Kartu Keluarga" />
                    </div>
                    <div class="form-group">
                      <label for="nik-anggota1">NIK</label>
                      <input type="text" class="form-control" id="nik-anggota1" name="nik[]" placeholder="Masukkan NIK" />
                    </div>
                    <div class="form-group">
                      <label for="no-kk">Nama Anggota Keluarga</label>
                      <input type="text" class="form-control" id="nama-kk1" name="nama[]" placeholder="Masukkan Anggota Keluarga" />
                    </div>
                    <div class="form-group">
                      <label for="jk1">Jenis Kelamin</label>
                      <select class="choices form-select" name="jk[]">
                        <option value="LK">Laki - Laki</option>
                        <option value="PR">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="TTL1">Tempat Tanggal Lahir</label>
                      <input type="text" class="form-control" id="TTL" name="ttl[]" placeholder="Masukkan Tempat Tanggal Lahir" />
                    </div>
                    <div class="form-group">
                      <label for="Status">Status</label>
                      <select class="choices form-select" name="status[]">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                      </select>
                        <button type="button" class="btn btn-primary mt-3" name="add" id="add">Tambahkan Form Anggota Keluarga</button>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pendidikan">Pendidikan</label>
                      <select class="choices form-select" name="pendidikan[]">
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1/D4">S1/D4</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pendidikan">Pekerjaan</label>
                      <select class="choices form-select" name="pekerjaan[]">
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1/D4">S1/D4</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pendidikan">Agama</label>
                      <select class="choices form-select" name="agama[]">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Lain-lain">Lain-Lain</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Alamat">Alamat</label> 
                      <input type="text" class="form-control" name="alamat[]" id="alamat" placeholder="Masukkan Alamat" />
                    </div>
                    <div class="form-group">
                      <label for="kewarganegaraan">Kewarganegaraan</label>
                      <select class="choices form-select" name="warga[]">
                        <option value="WNI">Warna Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--  -->

          <button type="submit" id='submit' name="submit" class="btn btn-success mt-5 " value="Save">Simpan Data Keluarga</button>
        </form>
      </div>
      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2023 &copy; RW-KU</p>
          </div>
          <div class="float-end">
            <p>
              Created
              <span class="text-danger"><i class="bi bi-heart"></i></span> by
              <a href="#">AHA</a>
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      var i = 1;
      $('#add').click(function(){
        i++;
        $('#section').append('<div class="card form-row" id="row' + i + '"><div class="card-header"><h4 class="card-title">Masukkan Data Anggota Keluarga</h4></div><div class="card-body"><div class="row"><div class="col-md-6"><div class="form-group"><label for="no-kk">NO KK</label><input type="text" class="form-control" id="no-kk" name="kk[]" placeholder="Masukkan Nomor Kartu Keluarga" /></div><div class="form-group"><label for="nik-anggota1">NIK</label><input type="text" class="form-control" id="nik-anggota1" name="nik[]" placeholder="Masukkan NIK" /></div><div class="form-group"><label for="no-kk">Nama Anggota Keluarga</label><input type="text" class="form-control" id="nama-kk1" name="nama[]" placeholder="Masukkan Anggota Keluarga" /></div><div class="form-group"><label for="jk1">Jenis Kelamin</label><select class="choices form-select" name="jk[]"><option value="LK">Laki - Laki</option><option value="PR">Perempuan</option></select></div><div class="form-group"><label for="TTL1">Tempat Tanggal Lahir</label><input type="text" class="form-control" id="TTL" name="ttl[]" placeholder="Masukkan Tempat Tanggal Lahir" /></div><div class="form-group"><label for="Status">Status</label><select class="choices form-select" name="status[]"><option value="Menikah">Menikah</option><option value="Belum Menikah">Belum Menikah</option></select><button type="button" name="add" class="btn btn-danger btn_remove mt-4" id="' + i + '">Hapus Form Keluarga</button></div></div><div class="col-md-6"><div class="form-group"><label for="pendidikan">Pendidikan</label><select class="choices form-select" name="pendidikan[]"><option value="SD/Sederajat">SD/Sederajat</option><option value="SMP/Sederajat">SMP/Sederajat</option><option value="SMA/Sederajat">SMA/Sederajat</option><option value="D3">D3</option><option value="S1/D4">S1/D4</option><option value="S2">S2</option><option value="S3">S3</option></select></div><div class="form-group"><label for="pendidikan">Pekerjaan</label><select class="choices form-select" name="pekerjaan[]"><option value="SD/Sederajat">SD/Sederajat</option><option value="SMP/Sederajat">SMP/Sederajat</option><option value="SMA/Sederajat">SMA/Sederajat</option><option value="D3">D3</option><option value="S1/D4">S1/D4</option><option value="S2">S2</option><option value="S3">S3</option></select></div><div class="form-group"><label for="pendidikan">Agama</label><select class="choices form-select" name="agama[]"><option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Katholik">Katholik</option><option value="Buddha">Buddha</option><option value="Hindu">Hindu</option><option value="Lain-lain">Lain-Lain</option></select></div><div class="form-group"><label for="Alamat">Alamat</label><input type="text" class="form-control" id="alamat" name="alamat[]" placeholder="Masukkan Alamat" /></div><div class="form-group"><label for="kewarganegaraan">Kewarganegaraan</label><select class="choices form-select" name="warga[]"><option value="WNI">Warna Negara Indonesia</option><option value="WNA">Warga Negara Asing</option></select></div>')
      });
      $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");

                $('#row' + button_id + '').remove();
            });
    })
  </script>
</body>

</html>