<?php

require_once 'app/init.php';


$produk1 = new smartphone("XIAOMI","13T", "DIMENSITY 9000", 5600000, 2023);
$produk2 = new laptop("ACER","NITRO V15", "I5-13240H", 9850000,11);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();