<?php
include 'koneksi.php';
session_start();

$query = "SELECT * FROM dt_dosen;";
$sql = mysqli_query($conn, $query);

$no = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Data Universitas NGW</title>
    <!-- font awesome-->
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

     <!-- DATA TABLES -->
     <link href="datatables/datatables.min.css" rel="stylesheet">
      <script src="datatables/datatables.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/images.png " width="25px" class="text-center" style="margin-right: 15px;">Data Universitas NGW
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ps-auto" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logcopy.php">Log Out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cetak.php">Print data</a>
          </li>
        </ul>
        </div>
    </div>
  </nav>
<!-- judul-->
 <div class="container mt-5">
 <span class="badge rounded-pill bg-primary">
  Selamat datang kembali,
  <?php
  if(!isset($_SESSION['email'])){
    header('Location: login.php');
    echo $_SESSION ['email'];
  }
  ?>
 </span>
 <h1 class="fw-bold">Data Dosen Universitas NGW</h1>
  <figure>
    <blockquote class="blockquote">
      <p class="fw-bold">Tahun Ajaran 2024/2025</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      CopyRight Universitas NGW <cite title="Source Title">2024/2025</cite>
    </figcaption>
  </figure>
<a href="kelola.php?plus" type="button" class="btn btn-primary mb-2">
  <i class="fa fa-plus"></i>
  Tambah Data</a>

  <?php
    if(isset($_SESSION['eksekusi'])){
    ?>
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      <strong>
      <?php echo $_SESSION['eksekusi'];?>
      </strong> You should check in on some of those fields below.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
session_destroy();
      }
   ?>

   <script type="text/javascript">
    $(document).ready( function () {
    $('#data').DataTable();
} );
   </script>
<div class="table-responsive">
<table class="table table-hover align-middle table-bordered mt-2" id="data">
  <thead class="text-center">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
            while($result = mysqli_fetch_assoc($sql)){ 
      ?>
      <td  class="text-center"><?php echo ++$no; ?></td>
      <td><?php echo $result['nip']; ?></td>
      <td><?php echo $result['nama_dosen']; ?></td>
      <td class="text-center">
      <img src="img/<?php echo $result['foto_dosen']; ?>" width="70" alt="Foto Dosen">
      </td>
      <td><?php echo $result['jabatan']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td class="text-center">
        <a href="kelola.php?ubah=<?php echo $result['id_dosen']; ?>" type="button" class="btn-sm btn-warning">
          Update</a>
        <a href="proses.php?delete=<?php echo $result['id_dosen']; ?>" type="button" class="btn-sm btn-danger" onClick = "return confirm('Apakah anda yakin?')">
          Delete </a>
      </td>
    </tr>
    <?php
            }
            ?>
             </tbody>
</table>
</div>
</div>
<div class="mb-5"></div>
          </body>
</html>