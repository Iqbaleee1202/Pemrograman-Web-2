<HTML>
<HEAD>
    <TITLE> Latihan 2 </TITLE>
</HEAD>
<BODY>
<?php
    $A = 10;
    $B = 5;

    function jumlah($A, $B) {
        $jumlahbil = $A + $B;
        return $jumlahbil;
    }

    function kurang($A, $B) {
        $kurangbil = $A - $B;
        return $kurangbil;
    }

    function kali($A, $B) {
        $kalibil = $A * $B;
        return $kalibil;
    }

    function bagi($A, $B) {
        $bagibil = $A / $B;
        return $bagibil;
    }

    echo "Bilangan Pertama : $A <br>";
    echo "Bilangan Kedua : $B <br><br>";

    echo "Hasil Penjumlahan: " . jumlah($A, $B) . "<br>";
    echo "Hasil Pengurangan: " . kurang($A, $B) . "<br>";
    echo "Hasil Perkalian: " . kali($A, $B) . "<br>";
    echo "Hasil Pembagian: " . bagi($A, $B) . "<br>";
?>
</BODY>
</HTML>