<!DOCTYPE html>
<html>
<head>
<title>Goedemorgen!</title>
<style>
h1 {
  color: white;
  text-align: center;

}

#time {
    
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i:s");
    $ochtend = 'images/morning.png';
    $middag = "images/afternoon.png";
    $avond = "images/evening.png";
    $nacht = "images/night.png";

    if ($time >= "06:00:00" && $time < "12:00:00") {
        echo "background-image: url('$ochtend');";
    } elseif ($time >= "12:00:00" && $time < "18:00:00") {
        echo "background-image: url('$middag');";
    } elseif ($time >= "18:00:00" && $time < "00:00:00") {
        echo "background-image: url('$avond');";
    } else {
        echo "background-image: url('$nacht');";
    }
    ?>
}
</style>
</head>
<body id="time">
<h1><?php echo $time?></h1>
</body>
</html>
