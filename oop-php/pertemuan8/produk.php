<?php

//jual produk
//hp
//laptop

class Produk{
    public $merk = "xiaomi",
        $seri = "13t",
        $spek = "dimenisty",
        $harga = 20;

        public function getLabel(){
            return "$this->merk, $this->seri";
        }

    // public function dodolanhape(){
    //     return " murahmeriah";
    // }
}

// $produk1 = new Produk();
// $produk1 ->merk = "oppo";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 ->merk = "sumng";
// $produk2->tambahProperty = "genjutsu";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->merk = "samsung";
$produk3->seri = "s24ultra";
$produk3->spek = "exynos9000";
$produk3->harga = 20000000;
// var_dump($produk3);

// echo "SmartPhone : $produk3->merk, $produk3->seri, $produk3->spek, $produk3->harga"; 
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";

$produk4 = new Produk();
$produk4->merk = "axioo";
$produk4->seri = "hype 6 amd x5";
$produk4->spek = "ryen 5 6600h";
$produk4->harga = 22200000;

echo "smartphone: ". $produk3->getLabel();
echo "<br>";
echo "laptop: ". $produk4->getLabel();
?>
