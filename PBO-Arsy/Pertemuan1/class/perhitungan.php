<?php

class Siswa {
    var $nis;
    var $nama;

     function __construct($nis, $nama) {
        $this->nis = $nis;
        $this->nama = $nama;
    }

     function simpan() {
        echo "Data {$this->nama} dengan NIS {$this->nis} berhasil disimpan.";
    }

     function update($namaBaru) {
        $this->nama = $namaBaru;
        echo "Data {$this->nama} dengan NIS {$this->nis} berhasil diupdate.";
    }

     function delete() {
        echo "Data {$this->nama} dengan NIS {$this->nis} berhasil dihapus.";
    }
}

?>