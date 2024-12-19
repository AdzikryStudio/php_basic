<?php
require 'koneksi.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm = $_POST['confirm'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    if($result){
        $_SESSION['log'] = "email sudah digunakan";
        header('Location: register.php');
    } else {
        $query = "INSERT INTO user(email, password) VALUES('$email', '$password')";

        if ($conn->query($query) === true) {
        echo "<script>
        alert('Akun berhasil ditambahkan, Silahkan log in');
        window.location.href = 'login.php';
        </script>";
    // } else {
    //     echo "<script>
    //     alert('Terjadi kesalahan saat menambahkan akun: " . $conn->error . "');
    //     window.location.href = 'daftar.php'; // Atau halaman lain yang sesuai
    //     </script>";
    // }
    }
    // // echo $email."-".$password."-".$confirm;
    
    $conn-> close();
}
}
?>