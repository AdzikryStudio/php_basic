<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Tambah atau Update data</title>
    <!-- font awesome-->
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark fw-bold ml-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Tambah atau Update Data
      </a>
    </div>
  </nav>
<div class="container mt-5">
      <form action="proses.php" method="POST">
      <div class="mb-3 row">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nip" name="nip" placeholder="1234567890123345678">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama_dosen" placeholder="Lorem Ipsum">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="foto" name="foto_dosen" placeholder="name.ext">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="example">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="email" placeholder="name@domain.com">
        </div>
      </div>
      </div>

      <div class="container mt-3 col">
  <?php 
    if(isset($_GET['ubah'])){
  ?>
    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
      <i class="fa fa-floppy-o" aria-hidden="true"></i>Simpan Perubahan</button>
  <?php
    } else{
      ?>
      <button type="submit" name="aksi" value="add" class="btn btn-primary">
      <i class="fa fa-floppy-o" aria-hidden="true"></i>Tambahkan Data</button>
      <?php
    }
    ?>
  <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>Batal</a>
  </form>
</div>
  </body>
  </html>