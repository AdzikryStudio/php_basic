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
            return "$this->merk, $this->seri, $this->spek, $this->harga";
        }

    // public function dodolanhape(){
    //     return " murahmeriah";
    // }
}

class CetakInfoProduk{
    public function cetak(Produk $produk ){
        $str = "{$produk->merk} | {$produk->getLabel()} | (Rp {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new Produk("XIAOMI","13T", "DIMENSITY 9000", 5600000);
$produk2 = new Produk("ACER","NITRO V15", "I5-13240H", 9850000);
$produk3 = new Produk("OPPO","FINDX 8", "SNAPDRAGON 8 GEN3", 12500000);
$produk4 = new Produk("LENOVO","LOQ-ITL", "I5-13240H", 12500000);
$produk5 = new Produk("SAMSUNG","A55", "EXYNOS 7840", 5300000);
$produk6 = new Produk("ASUS","TUF-A15", "RYZEN 5 7535HS", 9850000);

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
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1 ->cetak($produk1);
?>
