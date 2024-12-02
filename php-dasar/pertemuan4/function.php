<?php
function salam($waktu ="datang", $user ="admin") {
    return "selamat $waktu, $user";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> latihan function</title>
</head>
<body class="halo">
    <h1><?= salam("siang", "adzikry"); ?> </h1>    
</body>
</html>