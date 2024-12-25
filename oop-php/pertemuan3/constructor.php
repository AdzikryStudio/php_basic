<?php

//jual produk
//hp
//laptop

class Produk{
    public $merk,
        $seri,
        $spek,
        $harga;
        public function __construct($merk="merk", $seri= "seri", $spek= "spek", $harga=0){
            $this->merk = $merk;
            $this->seri = $seri;
            $this->spek = $spek;
            $this->harga = $harga;
            // echo "HALO DUNYO";
}

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

$produk1 = new Produk("XIAOMI","13T", "DIMENSITY 9000", 5600000);
$produk2 = new Produk("ACER","NITRO V15", "I5-13240H", 9850000);
$produk3 = new Produk("OPPO","FINDX 8", "SNAPDRAGON 8 GEN3", 12500000);
$produk4 = new Produk("LENOVO","LOQ-ITL", "I5-13240H", 12500000);
$produk5 = new Produk("SAMSUNG","A55", "EXYNOS 7840", 5300000);
$produk6 = new Produk("ASUS","TUF-A15", "RYZEN 5 7535HS", 9850000);
// $produk3->merk = "samsung";
// $produk3->seri = "s24ultra";
// $produk3->spek = "exynos9000";
// $produk3->harga = 20000000;
// // var_dump($produk3);

// echo "SmartPhone : $produk3->merk, $produk3->seri, $produk3->spek, $produk3->harga"; 
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";


// $produk4->merk = "axioo";
// $produk4->seri = "hype 6 amd x5";
// $produk4->spek = "ryen 5 6600h";
// $produk4->harga = 22200000;

echo "smartphone: ". $produk1->getLabel();
echo "<br>";
echo "laptop: ". $produk2->getLabel();
echo "<br>";
echo "HP: ". $produk3->getLabel();
echo "<br>";
echo "laptop: ". $produk4->getLabel();
echo "<br>";
echo "HP: ". $produk5->getLabel();
echo "<br>";
echo "laptop: ". $produk6->getLabel();
?>
