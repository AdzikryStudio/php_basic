<?php
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
