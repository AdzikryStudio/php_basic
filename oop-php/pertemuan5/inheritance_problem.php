<?php

//jual produk
//hp
//laptop

class Produk{
    public $merk,
        $seri,
        $spek,
        $harga,
        $tahunRilis,
        $windows,
        $tipe;

        public function __construct($merk="merk", $seri= "seri", $spek= "spek", $harga=0,  $tahunRilis=0, $windows=0, $tipe="tipe"){
            $this->merk = $merk;
            $this->seri = $seri;
            $this->spek = $spek;
            $this->harga = $harga;
            $this->tahunRilis = $tahunRilis;
            $this->windows = $windows;
            $this->tipe = $tipe;
          // echo "HALO DUNYO";
}

        public function getLabel(){
            return "$this->seri, $this->spek";
        }
            public function getInfoLengkap(){
            $str = "{$this->tipe} : {$this->merk} | {$this->getLabel()} | (Rp. {$this->harga})";

            if($this->tipe == "smartphone") {
                $str .= " - {$this->tahunRilis}Tahun Rilis. ";

            } else if($this->tipe == "laptop") {
                $str .= " - {$this->windows}windowss. ";    
        }
        return $str;
}
}

class CetakInfoProduk{
    public function cetak(Produk $produk ){
        $str = "{$produk->merk} | {$produk->getLabel()} | (Rp {$produk->harga}) ";
        return $str;
    }
    
}

$produk1 = new Produk("XIAOMI","13T", "DIMENSITY 9000", 5600000, 2023, 0 ,"smartphone");
$produk2 = new Produk("ACER","NITRO V15", "I5-13240H", 9850000,0, 11, "laptop");
$produk3 = new Produk("OPPO","FINDX 8", "SNAPDRAGON 8 GEN3", 2024, 0, "smartphone");
$produk4 = new Produk("LENOVO","LOQ-ITL", "I5-13240H", 12500000,0, 11, "laptop");
$produk5 = new Produk("SAMSUNG","A55", "EXYNOS 7840", 5300000, 2024, 0,"smartphone");
$produk6 = new Produk("ASUS","TUF-A15", "RYZEN 5 7535HS", 9850000,0, 10, "laptop");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
echo "<br>";
echo $produk5->getInfoLengkap();
echo "<br>";
echo $produk6->getInfoLengkap();
echo "<br>";
?>
