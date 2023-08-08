<?php
class persegi {
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function hitungKelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    public function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function hitungKelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
}
?>
