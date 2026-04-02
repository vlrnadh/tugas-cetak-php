<?php

require_once 'pembayaran.php';
require_once 'cetak.php';

class COD extends Pembayaran implements Cetak {

    public function prosesPembayaran(){
        if($this->validasi()){
            return "Pembayaran COD berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk(){
        return "
        Metode : COD <br>
        Jumlah : Rp $this->jumlah <br>
        Diskon : Rp ".$this->diskon()."<br>
        Pajak : Rp ".$this->pajak()."<br>
        Total Bayar : Rp ".$this->totalBayar()."
        ";
    }
}
?>