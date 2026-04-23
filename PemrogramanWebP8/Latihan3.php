<HTML>
<HEAD>
    <TITLE> Latihan 3 </TITLE>
</HEAD>
<BODY>
<?php
    function luas_segitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    $alas = 10;
    $tinggi = 20;

    echo "Menghitung Luas Segitiga <br>";
    echo "Alas = $alas <br>";
    echo "Tinggi = $tinggi <br>";
    echo "Maka Luas Segitiga adalah = " . luas_segitiga($alas, $tinggi);
?>
</BODY>
</HTML>