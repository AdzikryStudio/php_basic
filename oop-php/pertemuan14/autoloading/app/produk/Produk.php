<?php

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