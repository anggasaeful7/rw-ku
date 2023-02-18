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

            <li class="sidebar-item">
              <a href="Input-Data-Keluarga.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data Kartu Keluarga</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="Input-RT.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data RT</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="Input RW.php" class="sidebar-link">
                <i class="bi bi-collection-fill"></i>
                <span>Input Data RW</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="surat.php" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Data Surat On Proses</span>
              </a>
            </li>
            <li class="sidebar-item active">
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
              <h3 class="mb-4">Data Warga Keseluruhan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Data Semua Warga
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <section class="section mt-4">
          <div class="row" id="table-bordered">
            <div class="col-12">
              <div class="card">
                <div class="card-content">
                  <!-- table bordered -->
                  <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                      <thead>
                        <tr>
                          <th>No KK</th>
                          <th>NIK </th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>TTL</th>
                          <th>Kewarganegaraan</th>
                          <th>Status</th>
                          <th>Pendidikan</th>
                          <th>Agama</th>
                          <th>Alamat</th>
                          <th>RT</th>
                          <th>RW</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-bold-500">321792024568</td>
                          <td>321782146524</td>
                          <td class="text-bold-500">Abdul Rohimin</td>
                          <td>Laki - Laki</td>
                          <td>Bandung,23-77-1998</td>
                          <td>WNI</td>
                          <td>Menikah</td>
                          <td>S1/Sederajat</td>
                          <td>Islam</td>
                          <td>Sumedang kulon</td>
                          <td>1</td>
                          <td>2</td>

                        </tr>
                        <tr>
                          <td class="text-bold-500">31122276</td>
                          <td>3121316333</td>
                          <td class="text-bold-500">Angga Saeful Umam</td>
                          <td>Laki - Laki</td>
                          <td>Bandung,23-77-1945</td>
                          <td>WNI</td>
                          <td>Jomblo</td>
                          <td>S1/Sederajat</td>
                          <td>Islam</td>
                          <td>Banjaran Legok</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination-primary">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-primary">
                <li class="page-item">
                  <a class="page-link" href="#">Prev</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </section>
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
  <script src="<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

  </script>
</body>

</html>