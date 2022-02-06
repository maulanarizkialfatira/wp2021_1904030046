<?php


require 'function.php';
$cam = query("SELECT*FROM buku");

if (isset($_POST['cari'])) {
  $cam = cari($_POST['keyword']);
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font-->
  <link rel="stylesheet" href="tema/fontawesome/fontawesome/css/all.min.css">

  <title>CRUD
  </title>
</head>

<body>
  <!--- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><i class="fas fa-store-alt"></i> MRA STORE ||</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="text-white">
          <?php echo date('l,d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- setdebar-->

  <div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
      <!--menu-->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.html"><i class="fas fa-tachometer-alt"></i>
            Dashbroad</a>
          <hr class="bg-dark">
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="buku.php"><i class="fas fa-book"></i>
            Jenis Buku</a>
        </li>
        <hr>

        <li class="nav-item">
          <a class="nav-link text-white" href="tulis.php"><i class="fas fa-pencil-ruler"></i>
            Jenis Alat Tulis</a>
          <hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!--konten-->
      <h3><i class="fas fa-table"></i>Daftar Barang</h3>
      <hr>
      <!--Pencarian data -->
      <form action="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
      </form>
      <br>

      <table class="table table-striped">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Stok Barang</th>
              <th scope="col">Foto Barang</th>
              <th scope="col">Pesanan</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <?php if (empty($cam)) : ?>
            <tr>
              <td colspan="4" class="alert alert-danger text-center" role="alert">
                <p><b> Data Barang tidak ada </p></b>

              </td>
            </tr>
          <?php endif; ?>

          <tbody>
            <?php $id = 1; ?>
            <?php
            foreach ($cam as $cmb) : ?>
              <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $cmb['nama']; ?></td>
                <td><?php echo $cmb['harga']; ?></td>
                <td><?php echo $cmb['stok']; ?></td>
                <td><img src="image/<?php echo $cmb['foto']; ?>" width="50px"></td>
                <td><a class="btn btn-primary" role="button"><i class="fas fa-shopping-basket" width="50px"></i> Beli </a></td>
                <td><a href="detail.php?id=<?= $cmb['id']; ?>" class="btn btn-warning" role="button"><i class="fas fa-info" width="50px"></i> Detail</a></td>

              </tr>
              <?php $id++ ?>
            <?php endforeach ?>
          </tbody>

        </table>
    </div>
  </div>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>