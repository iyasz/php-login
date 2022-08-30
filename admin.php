<?php
include "koneksi.php";


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FavNime - Tempat Nonton Anime Favorit Mu!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand text-light h1 mb-0 ps-1" href="#">FavNime</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Terbaru</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light" href="#">Terpopuler</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Genre
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item " href="#">Romance</a></li>
              <li>
                <hr class="dropdown-divider bg-secondary">
              </li>
              <li><a class="dropdown-item" href="#">Lebih Banyak</a></li>
            </ul>
          </li>

          <span class="navbar-text opacity-75 col-6 col-lg-auto ms-3">
            <a class=" pe-2" href="#"><i class="bi bi-facebook"></i></a>
            <a class=" pe-2" href="#"><i class="bi bi-instagram"></i></a>
            <a class=" pe-2" href="#"><i class="bi bi-twitter"></i></a>
            <a class=" pe-2" href="#"><i class="bi bi-discord"></i></a>
          </span>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="row">
                <div class="col-lg-4">
                  <label for="">Anjime</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>No Telp</th>
                  <th>Kontak</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pt Jampud</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>