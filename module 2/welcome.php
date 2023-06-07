<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    $errors = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Naam"])) {
            $errors[] = "Naam is verplicht.";
        }

        if (empty($_POST["Email"])) {
            $errors[] = "E-mailadres is verplicht.";
        }

        if (count($errors) == 0) {
            echo "<h1>De ingevulde gegevens zijn:</h1>";
            echo "<p>Naam: " . htmlspecialchars($_POST['Naam']) . "</p>";
            echo "<p>E-mailadres: " . htmlspecialchars($_POST['Email']) . "</p>";
        }
    }
    ?>

    <h1>De ingevulde gegevens zijn:</h1>
    <form action="welcome.php" method="post">
        <label for="Naam">Naam:</label><br>
        <?php if (in_array("Naam is verplicht.", $errors)) { echo "<span class='error'>*</span>"; } ?>
        <input type="text" id="Naam" name="Naam"><br>
        <label for="Email">Email:</label><br>
        <?php if (in_array("E-mailadres is verplicht.", $errors)) { echo "<span class='error'>*</span>"; } ?>
        <input type="text" id="Email" name="Email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
