<?php
//cek pakh tidak ada data di 
//$_GET
/*if( !isset($_GET["name"])) {
    header("Location: latihan1.php");
    exit;
}
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL MHASISWA</title>
</head>
<body class="bd">
    <ul>
        <li><img src="img/<?= $_GET["picture"]; ?>"></li>
        <li><?= $_GET["name"]; ?></li>
        <li><?= $_GET["NIM"]; ?></li>
        <li><?= $_GET["JABATAN"]; ?></li>
        <li><?= $_GET["JURUSAN"]; ?></li>
        <li><?= $_GET["EMAIL"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar MAHASISWA</a>
</body>
</html>