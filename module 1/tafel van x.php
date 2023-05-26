<?php

function tafelVan($getal) {
    for ($i = 1; $i <= 10; $i++) {
        $resultaat = $getal * $i;
        echo $getal . " x " . $i . " = " . $resultaat . "<br>";
    }
    echo "<br>";
}




$waardes = array(3, 5, 6, 8, 12);

foreach ($waardes as $waarde) {
    tafelVan($waarde);
}

?>
