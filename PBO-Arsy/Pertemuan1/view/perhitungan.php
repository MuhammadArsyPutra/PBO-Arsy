<?php

require('../class/perhitungan.php');
$siswa = new Siswa("123456", "John Doe");

$siswa->simpan();
$siswa->update("Jane Doe");
$siswa->delete();

?>