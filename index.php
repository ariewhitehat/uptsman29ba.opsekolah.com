<?php 
  session_start();
  include_once('kelulusan/cfg.php');

  $database = new database();

  if(isset($_SESSION['is_login']))
  {
    header('location:kelulusan/');
  }
  
  if(isset($_COOKIE['username']))
  {
    $database->relogin($_COOKIE['username']);
    header('location:kelulusan/');
  }
  
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:kelulusan/');
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UPT SMA Negeri 29 Banyuasin">
    <meta name="author" content="Samsul Bari and Bootstrap Team">
    <title>UPT SMAN 29 Banyuasin - Pengumuman Kelulusan</title>
    <!-- Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/form-validation.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <main class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/Logo.png" alt="Logo UPT SMAN 29 Banyuasin" width="100" height="120">
        <h2>UPT SMAN 29 BANYUASIN</h2>
        <p class="lead">"Unggul dalam prestasi, berbudi pekerti luhur, berbudaya lingkungan dan berwawasan kebangsaan"</p>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6 p-3 border rounded-3 bg-light">
          <h4 class="mb-3">
            <span class="text-success">
              <i class="bi bi-card-heading"></i> Form Pengumuman Kelulusan
            </span>
          </h4>
          <form action="" method="POST" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="username" class="form-label">Nomor Induk Siswa Nasional (NISN)</label>
                <div class="input-group has-validation">
                  <span class="input-group-text"><i class="bi bi-credit-card-2-front-fill"></i></span>
                  <input type="number" name="username" class="form-control" id="username" placeholder="NISN Anda" required>
                  <div class="invalid-feedback"><i class="bi bi-exclamation-diamond-fill"></i> Maaf, NISN Anda salah dan wajib diisi !</div>
                </div>
              </div>
              <div class="col-sm-12">
                <label for="firstName" class="form-label"> Password</label>
                <div class="input-group has-validation">
                  <span class="input-group-text"><i class="bi bi-file-lock2"></i></span>
                  <input type="password" name="password" class="form-control" id="firstName" placeholder="Password yang diberikan Operator" value="" required>
                  <div class="invalid-feedback">
                    <i class="bi bi-exclamation-diamond-fill"></i> 
                    Maaf, Password Anda salah dan wajib diisi !
                  </div>
                </div>
              </div>
              <div class="my-2"></div>
            </div>
            <div class="checkbox mb-3">
             <label>
                <input type="checkbox" value="remember-me" name="remember"> Remember me
              </label>
            </div>
            <button class="btn btn-success btn-md" type="submit" name="login"><i class="bi bi-search"></i> Cek Kelulusan</button>
          </form>
        </div>
        <div class="col-md-6 col-lg-6 order-md-last p-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-warning"><i class="bi bi-geo-alt-fill"></i> Alamat</span>
          </h4>
          <p>Jalur 3 Desa Sumber Jaya Kec. Sumber Marga Telang Kab. Banyuasin Prov. Sumatera Selatan - 30974</p>
          <p><i class="bi bi-phone"></i> <a href="tel:081367542565"> +62 813 6754 2565</a></p>
          <p><i class="bi bi-whatsapp"></i> <a href="tel:081271734334"> +62 812 7173 4334</a></p>
          <p><i class="bi bi-envelope"></i> <a href="mailto:sman29banyuasin@gmail.com">sman29banyuasin@gmail.com</a></p>
        </div>
      </div>
    </main>
    <!-- End of Main -->
    <!-- Footer -->
    <footer class="container my-5 text-muted text-center text-small">
      <hr class="my-2">
      <p class="mb-1">&copy; Copyright 2021 UPT SMAN 29 BANYUASIN | Develop by <a href="https://instagram.com/ariewhitehat"><span class="text-danger"><i class="bi bi-instagram"></i></span> Samsul Bari</a></p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="https://my.idcloudhost.com/aff.php?aff=4257"><i class="bi bi-hdd-rack text-primary"></i> Server</a></li>
        <li class="list-inline-item"><a href="https://opsekolah.com"><i class="bi bi-megaphone text-warning"></i> Support</a></li>
        <li class="list-inline-item"><a href="mailto:contact.samsulbari@gmail.com"><i class="bi bi-bug text-danger"></i> Report Bug</a></li>
      </ul>
    </footer>
    <!-- End of Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="assets/js/form-validation.js"></script>
  </body>
</html>
<!-- Jayalah Indonesiaku  -->