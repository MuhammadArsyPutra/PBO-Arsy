<?php
require('../class/persegi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bangunDatar = new persegi();

    if (isset($_POST["hitung_persegi"])) {
        $sisi = $_POST["sisi_persegi"];
        $luas_persegi = $bangunDatar->hitungLuasPersegi($sisi);
        $keliling_persegi = $bangunDatar->hitungKelilingPersegi($sisi);

        echo "Luas Persegi: $luas_persegi<br>";
        echo "Keliling Persegi: $keliling_persegi<br>";
    }

    if (isset($_POST["hitung_persegi_panjang"])) {
        $panjang = $_POST["panjang_persegi_panjang"];
        $lebar = $_POST["lebar_persegi_panjang"];
        $luas_persegi_panjang = $bangunDatar->hitungLuasPersegiPanjang($panjang, $lebar);
        $keliling_persegi_panjang = $bangunDatar->hitungKelilingPersegiPanjang($panjang, $lebar);

        echo "Luas Persegi Panjang: $luas_persegi_panjang<br>";
        echo "Keliling Persegi Panjang: $keliling_persegi_panjang<br>";
    }

    if (isset($_POST["hitung_segitiga"])) {
        $alas = $_POST["alas_segitiga"];
        $tinggi = $_POST["tinggi_segitiga"];
        $luas_segitiga = $bangunDatar->hitungLuasSegitiga($alas, $tinggi);

        echo "Luas Segitiga: $luas_segitiga<br>";
    }
}
?>

<form method="post" action="">
    <h2>Persegi</h2>
    Masukkan sisi persegi: <input type="number" name="sisi_persegi"><br>
    <input type="submit" name="hitung_persegi" value="Hitung Persegi"><br>

    <h2>Persegi Panjang</h2>
    Masukkan panjang: <input type="number" name="panjang_persegi_panjang"><br>
    Masukkan lebar: <input type="number" name="lebar_persegi_panjang"><br>
    <input type="submit" name="hitung_persegi_panjang" value="Hitung Persegi Panjang"><br>

    <h2>Segitiga</h2>
    Masukkan alas: <input type="number" name="alas_segitiga"><br>
    Masukkan tinggi: <input type="number" name="tinggi_segitiga"><br>
    <input type="submit" name="hitung_segitiga" value="Hitung Segitiga"><br>
</form>
