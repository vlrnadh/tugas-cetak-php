<?php

abstract class pembayaran {

    protected $jumlah;

    public function __construct($jumlah){
        $this->jumlah = $jumlah;
    }

    public function getJumlah(){
        return $this->jumlah;
    }

    abstract public function prosesPembayaran();

    public function validasi(){
        return $this->jumlah > 0;
    }

    public function diskon(){
        return $this->getJumlah() * 0.10;
    }

    public function pajak(){
        return $this->getJumlah() * 0.11;
    }

    public function totalBayar(){
        return $this->getJumlah() - $this->diskon() + $this->pajak();
    }
}
?>