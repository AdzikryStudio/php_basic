<?php
//DATE AND TIME
//menampilkan tanggal dengan format tertentu
 /* -- echo date("l, d-M-Y"); -- */

 // --TIME--
 // UNIX timestap / EPOCH tIME
 // DETIK DARI 1 JANUARI 1970 - SEKARANG (WAKTU AWAL KOMPUTER)
 // echo time();
 // --echo date("l, d M Y", time()+60*60*24*200);--

 //MKTIME
 //membuat detik sendiri
 //jam, menit, detik, bulan, tanggal, tahun
 // -- echo date("l, d-M-Y", mktime(0, 0, 0, 7, 12, 2008)); --

//STRTOTIME
// --echo date("l", strtotime("25 jul 2008")) --
?>