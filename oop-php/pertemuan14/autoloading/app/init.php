<?php

// require_once 'Produk/InfoProduk';
// require_once 'Produk/Produk';
// require_once 'Produk/Smartphone';
// require_once 'Produk/Laptop';
// require_once 'Produk/CetakInfoProduk';
spl_autoload_register(function($class) {
    require_once 'produk/' . $class . '.php';
});