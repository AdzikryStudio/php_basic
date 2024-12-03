<?php
//ARRAY NUMERIK
$guru = [
    ["NAMA", "nisn", "jabatan", "jurusan", "ig"],
    ["NAMA", "nisn", "jabatan", "jurusan", "ig"],
    ["NAMA", "nisn", "jabatan", "jurusan", "ig"],
    ["-", "nisn", "jabatan", "jurusan", "ig"],
    ["-", "nisn", "jabatan", "jurusan", "ig"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas NGW</title>
</head>
<body>
    <h1 class="text">DAFTAR PENGURUS</h1>
<?php foreach( $guru as $tch) : ?>
    <ul>
    <li>NAMA : <?= $tch[0]; ?></li>
        <li>NISN : <?= $tch[1]; ?></li>
        <li>JABATAN : <?= $tch[2]; ?></li>
        <li>JURUSAN : <?= $tch[3]; ?></li>
        <li>INSTAGRAM : <?= $tch[4];; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>



