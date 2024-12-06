<?php
//VARIABLE SCOPE (LINGKUP VARIABLE)
/*$X = 10;

function tampilx() {
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;
*/

//SUPERGLOBLAL
//variable milik php
//merpakan Aray Associative
/*
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV
--var_dump($_SERVER);--
*/

//$_GET
$student =[
    [
    "name" => "Aristotle", 
    "NIM" => "2192898291",
    "JABATAN" => "Rektor",
    "JURUSAN" => "Teknik Informatika",
    "EMAIL" => "aristotle16@outlook.com",
    "picture" => "images.png"
    ],
    [
        "name" => "Lavender", 
        "NIM" => "2192898292",
        "JABATAN" => "Dekan Teknik",
        "JURUSAN" => "Teknik Elektro",
        "EMAIL" => "lavender16@outlook.com",
        "picture" => "images.png"
        ],
        [
            "name" => "ginkgo", 
            "NIM" => "2192898293",
            "JABATAN" => "Dekan kedokteran",
            "JURUSAN" => "Kedokteran",
            "EMAIL" => "ginkgo16@outlook.com",
            "picture" => "images.png"
            ],
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>universitas ngw</title>
    <link rel="stylesheet" href="style7.css"/>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
<ul>
    <?php foreach( $student as $std ): ?>
        <li>
            <a href="latihan2.php?NAME=<?= $std["name"]; ?>&NIM=<?= $std["NIM"]; ?>&JABATAN=<?= $std["JABATAN"]; ?>&JURUSAN=<?= $std["JURUSAN"]; ?>&EMAIL=<?= $std["EMAIL"]; ?>&PICTURE=<?= $std["picture"]; ?>"><?= $std["name"]; ?></a>
        </li>   
        <?php endforeach; ?> 
    </ul>
</body>
</html>
