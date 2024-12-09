<?php
//koneksi ke database
$con = mysqli_connect("localhost" ,"root", "", "php");

//mengambil data dari data mahasiswa (query)
$result = mysqli_query($con, "SELECT * FROM mahasiswa");

//AMBIL DATA DARI RESULT
//mysqli_fetch_row() => mengembaplikan array numerik
//mysqli_fetch_assoc() => mengembaplikan array associative
//mysqli_fetch_array() => mengembaplikan semua array
//mysqli_fetch_object() => mengembaplikan 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Pengurus Universitas NGW</h1>  
<!-- <div class="tabel">-->
    <table border="1" cellpadding="10" cellspacing=0>

    <tr>
        <th>No. </th>
        <th>Nama</th>
        <th>Foto</th>
        <th>NIM</th>
        <th>Jabatan</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
<?php $i =1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i ?> </td>
        <td><?= $row["nama"]; ?></td>
        <td><img src="img/<?= $row["picture"]; ?>w"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["jabatan"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td>
            <a href="edit"></a>
            <a href="delete"></a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    </table>

    
    <!-- </div>-->
</body>
</html>