<?php
//ASSOSIATIVE ARRAY
//key = string dibut sendiri

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
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>

    <?php foreach( $student as $std ): ?>
        <ul>
            <li>
                <img src="img/<?= $std["picture"]; ?>" alt="gamar mhs" class="pic" >
            </li>
            <li>Nama : <?= $std["name"]; ?></li>
            <li>NIM : <?= $std["NIM"]; ?></li>
            <li>Jabatan : <?= $std["JABATAN"]; ?></li>
            <li>Jurusan : <?= $std["JURUSAN"]; ?></li>
            <li>Email : <?= $std["EMAIL"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>

