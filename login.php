<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RW-KU | Pelayanan Masyarakat</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/style.css">

  <!-- link Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>


  <!-- Login page -->
  <script src="JS/theme.js"></script>
  <div class="navbar navbar-expand-lg bg-primary">
    <nav class="nav">
      <a class="nav-link disabled" style="color:white">Selamat Datang di Halaman Login RW-KU</a>
      <a class="nav-link disabled" style="color:white">RW-Ku || @RWku2023</a>
    </nav>
  </div>
  <section class="login d-flex">
    <div class="login-left w-50 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
          <div class="header">
            <h1>Selamat Datang</h1>
            <p>Silahkan login dengan mengisi username dan password di bawah</p>
          </div>
          <form action="cek_login.php" method="post">
            <div class="login-form">
              <label for="email" class="form-label">NIK</label>
              <input type="text" class="form-control" id="email" placeholder="silahkan masukkan NIK" name="username">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="silahkan masukkan password" name="password">
              <a href="#" class="text-decoration-none text-center">lupa password?</a>
              <button class="signin">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="login-right w-50 h-100">
      <div class="img">
        <img src="images/login.png" alt="undraw" class="img-fluid w-100">
      </div>
    </div>
</section>

  <script src="JS/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="JS/bootstrap.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
</body>

</html>