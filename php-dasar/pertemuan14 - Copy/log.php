<?php
session_start();
$aem = "succes@gmail.com";
$aps = password_hash("123123", PASSWORD_DEFAULT);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
if($email == $aem){
    if(password_verify($password, $aps)){
       // echo "login";
       $_SESSION['email'] = $email;
        header('Location: index.php');
        exit;
    } else {
        echo "<script>
        alert('password salah');
        window.location.href = 'login.php';s
        </script>";
    }
}else {
    echo $email."-".$password;
}
}