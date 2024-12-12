<?php
include 'koneksi.php';

if(isset($_POST["aksi"])){
    if($_POST["aksi"] == "add"){
        $nip = $_POST['nip'];
        $nama_dosen = $_POST['nama_dosen'];
        $foto_dosen = $_POST['foto_dosen'];
        $jabatan = $_POST['jabatan'];
        $email = $_POST['email'];

        $query ="INSERT INTO dt_dosen VALUES(null, '$nip', '$nama_dosen', '$foto_dosen','$jabatan', '$email')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header('location: index.php');
            //echo "Data Berhasil Ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }

        //echo $nip. " | ".$nama_dosen. " | ".$foto_dosen. " | ".$jabatan. " | ".$email;

       // echo "Tambah Data <a href='index.php'>Home</a>";
    } else if($_POST["aksi"] == "edit"){
        echo "Update Data <a href='index.php'>Home</a> ";
    }
}
if(isset($_GET["delete"])){
    $id_dosen = $_GET['delete'];
    $query = "DELETE FROM dt_dosen WHERE id_dosen = $id_dosen";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location: index.php');
        //echo "Data Berhasil Ditambahkan <a href='index.php'>Home</a>";
    } else {
        echo $query;
    }

    //echo "Delete Data <a href='index.php'>Home</a> ";
}
?>