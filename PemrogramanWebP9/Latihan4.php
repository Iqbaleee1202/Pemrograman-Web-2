<HTML>
<HEAD>
    <TITLE> Tanggal </TITLE>
</HEAD>
<BODY>
    <font size="10px">
    <?php
        echo "Sekarang tanggal ";
        echo date('d-F-Y'); // Menampilkan tanggal-Bulan-Tahun
        echo "<br>dan jam ";
        echo date('h:i:s A'); // Menampilkan jam:menit:detik AM/PM
    ?>
    </FONT>
</BODY>
</HTML>