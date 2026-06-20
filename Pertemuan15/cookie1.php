<?php

$value  = "Muhammad";
$value2 = "Muhamad Iqbal";

// Cookie username
setcookie("username", $value);

// Cookie namalengkap berlaku 1 jam
setcookie("namalengkap", $value2, time() + 3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";

echo "<h2>
        Klik <a href='cookie2.php'>
        di sini
        </a> untuk pemeriksaan cookies
      </h2>";

?>