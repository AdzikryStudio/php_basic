<?php
include 'koneksi.php';

function tambah_data($data, $files){
        $nip = htmlspecialchars($data['nip']);
        $nama_dosen = htmlspecialchars($data['nama_dosen']);

        $split = explode('.', $files['foto_dosen']['name']);
        $extend = $split[count($split)-1];

        $foto_dosen = $nip. '.' .$extend;
        $jabatan = htmlspecialchars($data['jabatan']);
        $email = htmlspecialchars($data['email']);

        $dir = "img/";
        $tmpFile = $files['foto_dosen']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$foto_dosen);

        $query ="INSERT INTO dt_dosen VALUES(null, '$nip', '$nama_dosen', '$foto_dosen','$jabatan', '$email')";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
}

function edit_data($data, $files){
        $id_dosen = $data['id_dosen'];
        $nip = htmlspecialchars($data['nip']);
        $nama_dosen = htmlspecialchars($data['nama_dosen']);
        $jabatan = htmlspecialchars($data['jabatan']);
        $email = htmlspecialchars($data['email']);
 
        $queryShow = "SELECT * FROM dt_dosen WHERE id_dosen = '$id_dosen';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

         if($files['foto_dosen']['name'] == ""){
            $foto_dosen = $result['foto_dosen'];
        } else {

            $split = explode('.', $files['foto_dosen']['name']);
            $extend = $split[count($split)-1];

            $foto_dosen = $files['nip']. '.' .$extend;
            unlink("img/".$result['foto_dosen']);
            move_uploaded_file($files['foto_dosen']['tmp_name'], 'img/'.$foto_dosen);
        }

        $query = "UPDATE dt_dosen SET nip='$nip', nama_dosen='$nama_dosen', jabatan='$jabatan', email='$email', foto_dosen = '$foto_dosen' WHERE id_dosen ='$id_dosen';"; 

        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
}

function delete_data($data){
    $id_dosen = $data['delete'];

    $queryShow = "SELECT * FROM dt_dosen WHERE id_dosen = '$id_dosen';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    $file_path = trim("img/".$result['foto_dosen']);
    unlink($file_path);
    
    $query = "DELETE FROM dt_dosen WHERE id_dosen = '$id_dosen';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

?>
