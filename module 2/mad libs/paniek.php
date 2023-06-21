<!DOCTYPE html>
<html>
<head>
    <title>Resultaat</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="paniek.html">Er heerst paniek...</a>
            <a href="onkunde.html">Onkunde</a>
        </nav>
    </header>
    <main>
        <h2>Er heerst paniek</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $huisdier = $_POST["huisdier"];
            $persoon = $_POST["persoon"];
            $land = $_POST["land"];
            $verveelt = $_POST["verveelt"];
            $speelgoed = $_POST["speelgoed"];
            $spijbel = $_POST["spijbel"];
            $geld = $_POST["geld"];
            $bezigheid = $_POST["bezigheid"];

            if (empty($huisdier) || empty($persoon) || empty($land) || empty($verveelt) || empty($speelgoed) || empty($spijbel) || empty($geld) || empty($bezigheid)) {
                echo "<p>Alle velden zijn verplicht.</p>";
            } else {
                $result = "Er heerst paniek! " . $persoon . " is vermist in het woeste oerwoud van " . $land . ". ";
                $result .= "Met een leger van " . $speelgoed . " en " . $verveelt . " weet " . $persoon . " ";
                $result .= "te ontsnappen aan de gevaarlijke " . $huisdier . ". " . $persoon . " heeft een talent ";
                $result .= "voor " . $bezigheid . " en gebruikt dat om de wereld te redden. ";
                $result .= "Maar niet voordat " . $spijbel . " in een onbewaakt moment het hele fortuin van " . $geld . " heeft gestolen!";

                echo "<p>" . $result . "</p>";
            }
        }
        ?>

        <a href="paniek.html">Terug naar Er heerst paniek </a>
    </main>

    <footer>
        <p>Deze website is gemaakt door Nawfal.</p>
    </footer>
    
</body>
</html>
