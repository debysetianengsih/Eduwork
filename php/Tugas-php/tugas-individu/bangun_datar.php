<?php 
/** 
 1. Luas Bangun persegi_panjang
*/
function luas_persegi_panjang($panjang,$lebar)
{
    $hasil = $panjang * $lebar;
    echo "Hasil Perhitungan Luas Bangun Persegi Panjang dengan panjang = ".$panjang." & Lebar = ".$lebar." = ".$hasil."<br>"; 
}
luas_persegi_panjang(10,5);

/** 
 2. Luas Bangun persegi
*/
function persegi($sisi)
{
 return pow($sisi,2);
}
echo "Hasil Perhitungan Luas Bangun Persegi dengan sisi 9 = ".persegi(9,2);
echo "<br>";

/** 
 3. Luas Bangun segitiga
*/
function segitiga($alas,$tinggi)
{
    $luas = ($alas)/2 * $tinggi;
    return $luas;
}
echo "Hasil Perhitungan Luas Bangun Segitiga dengan alas 6 dan tinggi 15 = ".segitiga(6,15);
echo "<br>";

/** 
 4. Luas Bangun jajar_genjang
*/
function jajar_genjang($alas,$tinggi)
{
 return $alas * $tinggi;
}
echo "Hasil Perhitungan Luas Bangun Jajar Genjang dengan alas 13 dan tinggi 8 = ".jajar_genjang(13,8);
echo "<br>";

/** 
 5. Luas Bangun belah_ketupat
*/
function belah_ketupat($d1,$d2){
 return 0.5 * $d1 * $d2;
}
echo "Hasil Perhitungan Luas Bangun Belah Ketupat dengan d1 17 dan d2 7 = ".belah_ketupat(17,7);
echo "<br>";
?>