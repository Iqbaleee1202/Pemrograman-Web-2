<?php

// Menghapus cookie dengan mengatur waktu kedaluwarsa ke masa lalu
setcookie("username", "", time() - 3600);

setcookie("namalengkap", "", time() - 3600);

echo "<h1>Cookie Berhasil Dihapus</h1>";

echo "<h2>
        Klik <a href='cookie1.php'>
        di sini
        </a> untuk membuat cookies kembali
      </h2>";

echo "<h2>
        Klik <a href='cookie2.php'>
        di sini
        </a> untuk memeriksa cookies
      </h2>";

?>