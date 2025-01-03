<?php

//jual produk
//hp
//laptop
interface InfoProduk {
    public function getInfoLengkap();
}

 abstract class Produk {
    protected $merk,
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
    
   abstract public function getInfo();
    
}

class smartphone extends Produk implements InfoProduk {
    public $tahunRilis;

    public function __construct($judul, $penulis, $penerbit, $harga, $tipe) {
        parent::__construct($judul, $penulis, $penerbit, $harga); // Memanggil konstruktor kelas induk
        $this->tipe = $tipe;
    }

    public function getInfo() {
        $str = "{$this->merk} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap() {
        $str = "tipe : " . $this->getInfo() . " - {$this->tahunRilis} Tahun Rilis.";
        return $str;
    }
}

class laptop extends Produk implements InfoProduk{
    public $windows;

    public function __construct($merk, $seri, $spek, $harga, $windows) {
        parent::__construct($merk, $seri, $spek, $harga);
        $this->windows = $windows;
    }

    public function getInfo() {
        $str = "{$this->merk} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap() {
        $str = "tipe : " . $this->getInfo() . " - {$this->windows} windows.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk: <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "{$p->getInfoLengkap()} <br>"; 
        return $str;
    }
}
}

$produk1 = new smartphone("XIAOMI","13T", "DIMENSITY 9000", 5600000, 2023);
$produk2 = new laptop("ACER","NITRO V15", "I5-13240H", 9850000,11);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





?>
