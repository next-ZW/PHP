<!DOCTYPE html>
<html>
<head>
<title>Goedemorgen!</title>
<style>
h1 {
  color: darkblue;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

h2{
  color: darkblue;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);


}

#time {
    background-size: cover;
    background-position: center;
    width: 400px;
    height: 550px;
}

</style>

</head>
<body id="time">
<?php
date_default_timezone_set("Europe/Amsterdam");
$time = date("H:i:s");
$ochtend = 'images/morning.png';
$middag = "images/afternoon.png";
$avond = "images/evening.png";
$nacht = "images/night.png";

if ($time >= "06:00:00" && $time < "12:00:00") {
    echo '<style>#time { background-image: url("'.$ochtend.'"); }</style>';
    echo '<h2>Goede morgen!</h2>';
} elseif ($time >= "12:00:00" && $time < "18:00:00") {
    echo '<style>#time { background-image: url("'.$middag.'"); }</style>';
    echo '<h2>Goede middag!</h2>';
} elseif ($time >= "18:00:00" && $time < "00:00:00") {
    echo '<style>#time { background-image: url("'.$avond.'"); }</style>';
    echo '<h2>Goede avond!</h2>';
} else {
    echo '<style>#time { background-image: url("'.$nacht.'"); }</style>';
    echo '<h2>Goede nacht!</h2>';
}
?>

<h1><?php echo 'het is nu ',$time ?></h1>
</body>
</html>
