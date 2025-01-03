<?php

//jual produk
//hp
//laptop

class Produk {
    private $merk,
        $seri,
        $spek,
        $harga,
        $diskon = 0;

    public function __construct($merk = "merk", $seri = "seri", $spek = "spek", $harga = 0) {
        $this->merk = $merk;
        $this->seri = $seri;
        $this->spek = $spek;
        $this->harga = $harga;
    }

    public function getJudul() {
        return $this->merk;
    }

    public function setJudul($merk) {
        $this->merk = $merk;
    }

    public function getSeri() {
        return $this->seri;
    }

    public function setSeri($seri) {
        $this->seri = $seri;
    }

    public function getSpek() {
        return $this->spek;
    }

    public function setSpek($spek) {
        $this->spek = $spek;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getLabel() {
        return "$this->seri, $this->spek";
    }

    public function getInfoLengkap() {
        $str = "{$this->merk} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
}

class smartphone extends Produk {
    public $tahunRilis;

    public function __construct($merk, $seri, $spek, $harga, $tahunRilis) {
        parent::__construct($merk, $seri, $spek, $harga);
        $this->tahunRilis = $tahunRilis;
    }

    public function getInfoLengkap() {
        $str = "tipe : " . parent::getInfoLengkap() . " - {$this->tahunRilis} Tahun Rilis.";
        return $str;
    }
}

class laptop extends Produk {
    public $windows;

    public function __construct($merk, $seri, $spek, $harga, $windows) {
        parent::__construct($merk, $seri, $spek, $harga);
        $this->windows = $windows;
    }

    public function getInfoLengkap() {
        $str = "tipe : " . parent::getInfoLengkap() . " - {$this->windows} windows.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->merk} | {$produk->getLabel()} | (Rp {$produk->harga}) ";
        return $str;
    }
}
$produk1 = new smartphone("XIAOMI","13T", "DIMENSITY 9000", 5600000, 2023);
$produk2 = new laptop("ACER","NITRO V15", "I5-13240H", 9850000,11);
$produk3 = new smartphone("OPPO","FINDX 8", "SNAPDRAGON 8 GEN3", 5600000, 2024);
$produk4 = new laptop("LENOVO","LOQ-ITL", "I5-13240H", 12500000, 11);
$produk5 = new smartphone("SAMSUNG","A55", "EXYNOS 7840", 5300000, 2024);
$produk6 = new laptop("ASUS","TUF-A15", "RYZEN 5 7535HS", 9850000, 10);

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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga(); 
echo "<hr>";

$produk1->setJudul("judul");
echo $produk1->getJudul();


?>
