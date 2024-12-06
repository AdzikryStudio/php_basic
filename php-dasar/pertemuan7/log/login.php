<?php
//apakah tombl submit sudah ditekan
if( isset($_POST["submit"])) {
//cek usr dan pw
if ( $_POST["username"] == "admin" && $_POST["password"] ==
"123") {
//jika benar ke admin
header("Location: admin.php");
exit;
} else {
//jika salah pesan kesalahan
$error = true;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <?php if( isset($error)) : ?>
    <p style="color: red; font-family: Arial; font-style: italic;">username/password salah</p>
    <?php endif; ?>
    <h1>Sign In</h1>
    <ul>
    <form action="" method="post">
        <li>
            <label for="usr">Username or Email : </label>
            <input type="text"name="username" id="usr">
        </li>
        <li>
            <label for="pw">Password : </label>
            <input type="password"name="password" id="pw">
        </li>
        <li>
            <button type="submit" name="submit">Sign Up</button>
        </li>
    </form>
    </ul>
</body>
</html>