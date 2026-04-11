<?php
$ball = 'purple'; // coba ubah: red, yellow, blue, green, purple

if ($ball == 'red') {
    $redbox = $ball;
} elseif ($ball == 'yellow') {
    $yellowbox = $ball;
} elseif ($ball == 'blue') {
    $bluebox = $ball;
} elseif ($ball == 'green') {
    $greenbox = $ball;
} elseif ($ball == 'purple') {
    $purplebox = $ball;
} else {
    $colorlessbox = $ball;
}

echo "redbox : $redbox <br>";
echo "yellowbox : $yellowbox <br>";
echo "bluebox : $bluebox <br>";
echo "greenbox : $greenbox <br>";
echo "purplebox : $purplebox <br>";
echo "colorlessbox : $colorlessbox <br>";
?>