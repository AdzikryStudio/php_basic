<?php

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