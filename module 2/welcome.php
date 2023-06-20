<?php
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Naam"])) {
        $nameErr = "Naam is verplicht";
    } else {
        $name = test_input($_POST["Naam"]);
    }
    
    if (empty($_POST["Email"])) {
        $emailErr = "Email is verplicht";
    } else {
        $email = test_input($_POST["Email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "email is not a valid email address";
        }
    }
    
    if (empty($nameErr) && empty($emailErr)) {
        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Welcome</title>
                    <link rel='stylesheet' href='welcome.css'>
                </head>
                <body>
                    <h1>De ingevulde gegevens zijn:</h1>
                    <p>Naam: $name</p>
                    <p>E-mailadres: $email</p>
                </body>
                </html>";
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="Naam">Naam:</label><br>
        <input type="text" id="Naam" name="Naam" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr;?></span><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="Email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr;?></span><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>