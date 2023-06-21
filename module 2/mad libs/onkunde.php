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
        <h2>Onkunde</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kunnen = $_POST["kunnen"];
            $persoon = $_POST["persoon"];
            $getal = $_POST["getal"];
            $verveelt = $_POST["verveelt"];
            $vakantie = $_POST["vakantie"];
            $eigenschap = $_POST["eigenschap"];
            $overkomen = $_POST["overkomen"];

            // Server-side validation
            if (empty($kunnen) || empty($persoon) || empty($getal) || empty($verveelt) || empty($vakantie) || empty($eigenschap) || empty($overkomen)) {
                echo "<p>Alle velden zijn verplicht.</p>";
            } else {
                $result = "Onkunde! " . $persoon . " zou graag " . $kunnen . " willen kunnen. ";
                $result .= "Helaas heeft " . $persoon . " nog geen talent hiervoor ontwikkeld. ";
                $result .= "Met een getal als " . $getal . " weet " . $persoon . " nog steeds niet ";
                $result .= "hoe hij/zij " . $verveelt . " moet vermijden. " . $persoon . " heeft altijd ";
                $result .= $vakantie . " bij zich als hij/zij op vakantie gaat. ";
                $result .= "Zijn/haar slechtste eigenschap is " . $eigenschap . ". ";
                $result .= "Het ergste dat " . $persoon . " kan overkomen is " . $overkomen . ".";

                echo "<p>" . $result . "</p>";
            }
        }
        ?>

        <a href="onkunde.html">Terug naar Onkunde </a>
    </main>

    <footer>
        <p>Deze website is gemaakt door Nawfal.</p>
    </footer>
    
</body>
</html>
