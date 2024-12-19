<?php
require 'koneksi.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    
    if($result){
        if(password_verify($password, $result['password'])){
        // echo "login";
        $_SESSION['email'] = $email;
            header('Location: index.php');
            exit;
        } else {
            echo "<script>
            alert('password salah');
            window.location.href = 'login.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('email tidak terdaftar');
        window.location.href = 'login.php';
        </script>";  
        //echo $email."-".$password;
    }
    }