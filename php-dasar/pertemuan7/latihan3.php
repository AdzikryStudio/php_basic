<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<?php if( isset($_POST["submit"])) : ?>
<h1> welcome <?= $_POST["nama"]; ?> </h1>
<?php endif; ?>
<body>
    <form action="" method="post">
        Masukkan nama :
    <input type="text" name="nama" id="">
    <br>
    <button type="submit" name="submit" >POST</button>
    </form>
</body>
</html>