<?php
session_start();
if(isset($_SESSION['email'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Data Universitas NGW</title>
    <!-- font awesome-->
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

     <!-- css -->
      <style type="text/css">
        body {
            height: 90vh;
            display: flex;
            align-items: center;
            background-image: url(img/Windows-11-Stock-Wallpaper-01.jpg);
        }
        .formlg{
             max-width: 330px;
            margin: auto;
        }
      </style>
    <script type="text/javascript">
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirm = document.getElementById("confirm").value;

        // Memeriksa apakah password dan konfirmasi password sama
        if (password !== confirm) {
            alert("Konfirmasi password tidak sesuai");
            return false; // Mencegah form untuk disubmit
        }
        return true; // Memungkinkan form untuk disubmit
    }
</script>
</head>
<body>
    <div class="container mt-5 ">
        <form action="daftar.php" method="post" class="formlg" onsubmit="return validatePassword()">
            <h1 class="text-center">Registrasi Akun</h1>
            <?php 
                if(isset($_SESSION['log'])){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal,</strong> Email sdah terdaftar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             <?php
                session_unset();
                }
             ?>
            <div class="form-floating mt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" required autocomplete="off">
            <label for="email">Email : </label>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="off">
            <label for="password">Password : </label>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Konfirmasi Password" required autocomplete="off">
            <label for="confirm">Konfirmasi Password : </label>
            <button type="submit" class="btn btn-primary w-100 mt-3"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</button>
            <p class="text-center mt-3">Sudah Mempunyai Akun? <a href="login.php">Sign In</a></p>
        </div>
        </form>  
    </div>
</body>
</html>