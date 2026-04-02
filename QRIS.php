<?php
require_once 'Pembayaran.php';
require_once 'cetak.php';

class QRIS extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran QRIS berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "
        Metode : QRIS <br>
        Jumlah : Rp $this->jumlah <br>
        Diskon : Rp ".$this->diskon()."<br>
        Pajak : Rp ".$this->pajak()."<br>
        Total Bayar : Rp ".$this->totalBayar()."
        ";
    }
}
?>