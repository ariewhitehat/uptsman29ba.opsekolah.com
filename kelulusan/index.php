<?php 
  session_start();
  if(! isset($_SESSION['is_login']))
  {
    header('location:../index.php');
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
    <link rel="stylesheet" href="../assets/css/form-validation.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
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
      <div class="pt-4 text-center">
        <img class="d-block mx-auto mb-4" src="../assets/img/Logo.png" alt="Logo UPT SMAN 29 Banyuasin" width="120" height="150">
        <h2>UPT SMAN 29 BANYUASIN</h2>
        <p class="lead">"Unggul dalam prestasi, berbudi pekerti luhur, berbudaya lingkungan dan berwawasan kebangsaan"</p>
      </div> 
      <div class="row p-3 border rounded-3 bg-light">
        <h2 class="pb-4"><i class="bi bi-card-heading"></i> Data Kelulusan Peserta Didik TP. 2020/2021</h2>
        <div class="col-md-3">
          <img class="d-block mb-4 img-thumbnail" src="../assets/img/siswa/<?php echo $_SESSION['foto']; ?>">
          <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <tbody>
                <tr>
                  <td>Nama Peserta</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['nama_pd']; ?></td>
                </tr>
                <tr>
                  <td>NISN</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                  <td>Tempat, Tanggal Lahir</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['ttl']; ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['jk']; ?></td>
                </tr>
                <tr>
                  <td>Kelas / Program</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['kelas']; ?> / <?php echo $_SESSION['prodi']; ?></td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <td colspan="3" class="h5">Daftar Nilai Kelompok Umum</td>
                </tr>
                <tr>
                  <th scope="col">Matematika</th>
                  <th scope="col">B. Indonesia</th>
                  <th scope="col">B. Inggris</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>78.00</td>
                  <td>80.00</td>
                  <td>85.70</td>
                </tr>
                <tr>
                  <td>90.56</td>
                  <td>80.70</td>
                  <td>79.00</td>
                </tr>
                <tr>
                  <td>89.90</td>
                  <td>88.00</td>
                  <td>82.98</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <td colspan="3" class="h5">Daftar Nilai Kelompok Peminatan</td>
                </tr>
                <tr>
                  <th scope="col">Fisika</th>
                  <th scope="col">Kimia</th>
                  <th scope="col">Biologi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>78.00</td>
                  <td>79.94</td>
                  <td>89.00</td>
                </tr>
                <tr>
                  <td>80.88</td>
                  <td>79.00</td>
                  <td>85.87</td>
                </tr>
                <tr>
                  <td>85.00</td>
                  <td>84.76</td>
                  <td>85.00</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <tbody>
                <tr class="h6">
                  <td>Nilai Rata-rata Ujian</td>
                  <td>:</td>
                  <td><?php echo $_SESSION['nilai_rata_rata']; ?></td>
                </tr>
                <tr class="h6">
                  <td>Keterangan</td>
                  <td>:</td>
                  <td class="text-success"><?php echo $_SESSION['keterangan']; ?> </td>
                </tr>
              <!-- </tbody> -->
            </table>
          </div> <!-- /end of .table-responsive -->
        </div> <!-- /end of .col-md-9 -->
        <div class="pt-2 text-center">
          <a href="../assets/downloads/SKL/<?php echo $_SESSION['download']; ?>" download class="btn btn-primary btn-md"><i class="bi bi-download"></i> Download Surat Keterangan Kelulusan</a>
        </div>
      </div> <!-- /end of .row-->
    </main>
    <!-- End of Main -->
    <!-- Footer -->
    <footer class="container my-5 text-muted text-center text-small">
        <hr class="my-2">
        <p class="mb-1">&copy; Copyright 2021 UPT SMAN 29 BANYUASIN | Develop by <a href="https://instagram.com/ariewhitehat"><span class="text-danger"><i class="bi bi-instagram"></i></span> Samsul Bari</a></p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://my.idcloudhost.com/aff.php?aff=4257" target="_blank"><i class="bi bi-hdd-rack text-primary"></i> Server</a></li>
          <li class="list-inline-item"><a href="https://opsekolah.com" target="blank"><i class="bi bi-megaphone text-warning"></i> Support</a></li>
          <li class="list-inline-item"><a href="mailto:contact.samsulbari@gmail.com"><i class="bi bi-bug text-danger"></i> Report Bug</a></li>
        </ul>
      </footer>
      <!-- End of Footer-->
      <!-- Modal -->
      <!-- Full screen modal -->
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title h4" id="exampleModalFullscreenLabel"><img class="mx-auto" src="../assets/img/Logo.png" width="30" height="40" alt="Icon SMAN 29 Banyuasin"> UPT SMAN 29 Banyuasin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-5 mt-2 text-center">
                <h4><ins>Pengumuman Kelulusan Online</ins></h4>
                <span>No. : 421.3/420/UPTSMAN29BA/V/2021</span>
              </div>
              <p style="text-align: justify">Yang bertanda tangan dibawah ini, Kepala UPT SMA Negeri 29 Banyuasin Kecamatan Sumber Marga Telang, Kabupaten Banyuasin Provinsi Sumatera Selatan menerangkan bahwa :</p>
              <div class="table-responsive mt-2">
                <table class="table table-borderless py-2">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td>: <?php echo $_SESSION['nama_pd']; ?></td>
                    </tr>
                    <tr>
                      <td>NISN</td>
                      <td>: <?php echo $_SESSION['username']; ?></td>
                    </tr>
                    <tr>
                      <td>T.T.L.</td>
                      <td>: <?php echo $_SESSION['ttl']; ?></td>
                    </tr>
                    <tr>
                      <td>Nama Orang Tua</td>
                      <td>: <?php echo $_SESSION['nama_ortu']; ?></td>
                    </tr>
                    <tr>
                      <td>Kelas / Program</td>
                      <td>: <?php echo $_SESSION['kelas']; ?> / <?php echo $_SESSION['prodi']; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center mb-5">
                <P class="my-3">Dinyatakan :</p>
                <h2 class="mb-3">LULUS / <del>TIDAK LULUS</del></h2>
                <p>dengan Nilai Rata-rata : <?php echo $_SESSION['nilai_rata_rata']; ?></p>
              </div>
              <p style="text-align: justify">dari satuan pendidikan berdasarkan kriteria kelulusan dan rapat dewan guru UPT SMA Negeri 29 Banyuasin pada tanggal 29 April 2021 tahun pelajaran 2020/2021.</p>
              <p style="text-align: justify">Demikian Keterangan Pengumuman Kelulusan ini, agar dapat dipergunakan dengan sebagaimana mestinya.</p>
              <div class="text-center mt-5">
                <img src="../assets/img/ttd-el-nobg.png" width="300" height="150">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal"><i class="bi bi-eye"></i> Lihat Data Kelulusan</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Modal -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="../assets/js/form-validation.js"></script>
      <script>
        $(document).ready(function(){
          setTimeout(function(){
            $('#myModal').modal('show');
          }, 60);
        });
      </script>
    </body>
  </html>
  <!-- Jayalah Indonesiaku  -->