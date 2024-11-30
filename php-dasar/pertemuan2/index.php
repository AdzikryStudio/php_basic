<?php
// ini adalah komentar
/*
komentar baanyak naris
*/

//pertemuan 2

//standar 
//echo, print =sama
//print_r
//var_dump=string

//Penulisan sintaks PHP

//1. HTML-PHP
//2. PHP-HTML

//VARIABEL DAN TIPE DATA
//variabel(tidak boleh diawali angka, boleh mengandung angka
//$nama ="Adzikry Studio";
//echo 'hello my name is $nama';

//OPERATOR

//aritmatika(+ - /* %)
/*$x ="12";
$y ="15";
echo $x + $y;
*/

//CONCAT(PENGGABUNG STRING)
/*
$nama_depam ="Azikry";
$nama_belakang ="Studio";
echo $nama_depam . " " . $nama_belakang;
*/

//OPERATOR ASSIGNEMT
//=, +=, *=, /=, %=, .=
/*$X = 1;
$X *= 15;
echo $X;*/

/*
$nama ="Adzikry";
$nama .=" ";
$nama .="Studio";
echo $nama;
*/

//OPERATOR PERBANDINGAN
//<, > <=, >=, ==
//var_dump(1 =="1");

//identity
/*===, !==
var_dump(1 === "1");
*/

//OPERTOR LOGIKA
//&&, ||, !
//&& -> harus 2 benar
/*$x =50;
var_dump($x < 20 && $x % 2 == 0)
*/

//|| -> boleh salah satu benar
/*$x =50;
var_dump($x < 20 && $x % 2 == 0)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 2</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
    <div class="sy">
    <h1>PERTEMUAN 2 PHP DASAR</h1>
    <p> membahas tentang sintaks dasar php</p>

    <h4>standar sintaks</h4>
    <li>echo, print = sama</li>
      <li>print_r = menampilkan variabel</li>
      <li>var_dump = string </li>

      <h4>PENULISAN SINTAKS PHP</h4>
      <li>HTML di dalam PHP</li>
      <li>PHP di dalam HTML </li>

      <h4>PVARIABEL DAN TIPE DATA</h4>
     <p>variabel tidak boleh diawali angka, boleh mengandung angka</p>

     <h4>OPERATOR</h4>
      <li>aritmatika</li>
      <li>concat</li>
      <li>assignemt</li>
      <li>perbandingan </li>
      <li>identitas</li>
      <li>logika </li>
    </div>
</body>
</html>