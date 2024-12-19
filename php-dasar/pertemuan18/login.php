<?php
session_start();
if(isset($_SESSION['email'])){
  header('Location: index.php');
  echo $_SESSION['email'];
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
</head>
<body>
    <div class="container mt-5 ">
        
        <form action="log.php" method="POST" class="formlg">
            <h1 class="text-center">Masuk Akun</h1>
            <div class="form-floating mt-3">
            <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail" required autocomplete="off">
            <label for="email">Email : </label>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="off">
            <label for="password">Password : </label>
        </div>
            <div class="mt-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="remember">Remember Me</label>
              </div>
            <button type="submit" class="btn btn-primary w-100 mt-3"><i class="fa fa-sign-in " aria-hidden="true"></i>Sign In</button>
            <p class="text-center mt-3">Belum Mempunyai Akun? <a href="register.php">Sign Up</a></p>
        </div>
        </form>  
    </div>
</body>
</html>