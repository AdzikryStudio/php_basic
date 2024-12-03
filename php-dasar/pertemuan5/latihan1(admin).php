<?php
//ARRAY 
//variabel yang memiliki banyak nilai
//elemen boleh memiliki tipe data yang berbeda
//PASANGAN ANTARA KEY AND VALUE(cardump)
//key = index dimulai dari 0

//CARA MEMBUAT ARRAY(CARA LAMA)
$hari = array("senin", "selasa", "Rabu");
// CARA BARU
$bulan =["januari", "februari", "maret"];
$arr1 =[123, "tulisan", false];

//MENAMPILKAN ARRAY
//vardump, print-r
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//MENAMPILKAN 1 ARRAY
echo $arr1[0];
echo "<br>";

//MENMBAHKAN ELEMEN BARU
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
?>
