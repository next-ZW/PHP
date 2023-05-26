<?php
function langstewoord($worden){
    $words  = explode(' ', $worden);

    $langstewoord = '';
    $lengte = 0;

    foreach ($words as $woord) {
       if (strlen($woord) > $lengte) {
          $lengte = strlen($woord);
          $langstewoord = $woord;
       }
    }

    return $langstewoord;
}

$dieren = 'kat hond olifant';

$result = langstewoord($dieren);

echo $result; 
?>

