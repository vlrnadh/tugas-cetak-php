<?php

require_once 'pembayaran.php';
require_once 'cetak.php';

class Ewallet extends Pembayaran implements Cetak {

    public function prosesPembayaran(){
        if($this->validasi()){
            return "Pembayaran E-Wallet berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk(){

        $jumlah = $this->getJumlah();
        $diskon = $this->diskon();
        $pajak = $this->pajak();
        $total = $this->totalBayar();

        return "
        Metode : E-Wallet <br>
        Jumlah : Rp $jumlah <br>
        Diskon : Rp $diskon <br>
        Pajak : Rp $pajak <br>
        Total Bayar : Rp $total
        ";
    }
}
?>