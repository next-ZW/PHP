<?php

function tafelVan($getal) {
    for ($x = 1; $x <= 10; $x++) {
        $resultaat = $getal * $x;
        echo $getal . " x " . $x . " = " . $resultaat . "<br>";
    }
    echo "<br>";
}


$waardes = array(3, 5, 6, 8, 12);

foreach ($waardes as $waarde) {
    tafelVan($waarde);
}

$getal1 = mt_rand(1,10);
$getal2 = mt_rand(1,10);

echo $getal1 , " + ", $getal2 , " = ", $getal1 + $getal2 , "<br>";
echo $getal1 , " x ", $getal2 , " = ", $getal1 * $getal2 , "<br>";
echo $getal1 , " - ", $getal2 , " = ", $getal1 - $getal2 , "<br>";
echo $getal1 , " : ", $getal2 , " = ", $getal1 / $getal2 , "<br>";

?>
