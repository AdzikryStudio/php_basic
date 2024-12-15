<?php
include 'function.php';
session_start();

if(isset($_POST["aksi"])){
    if($_POST["aksi"] == "add"){
        $_SESSION['eksekusi'] = "Data Berhasil ditambahkan";
        $succes = tambah_data($_POST, $_FILES);
        if($succes){
            header('location: index.php');
            //echo "Data Berhasil Ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $succes;
        }

    } else if($_POST["aksi"] == "edit"){
        $succes = edit_data($_POST, $_FILES);
        if($succes){
            $_SESSION['eksekusi'] = "Data Berhasil diperarui";
            header('location: index.php');
            //echo "Data Berhasil Ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $succes;
        }

    }

}
if(isset($_GET["delete"])){
$succes = delete_data($_GET);
    if($succes){
        $_SESSION['eksekusi'] = "Data Berhasil dihapus";
        header('location: index.php');
        //echo "Data Berhasil Ditambahkan <a href='index.php'>Home</a>";
    } else {
        echo $succes;
    }

    //echo "Delete Data <a href='index.php'>Home</a> ";
}
?>