<?php



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
    <form action="welcome.php" method="post">
        <label for="Naam">Naam:</label><br>
        <span class="error">*<?php echo $nameErr;?></span>
        <input type="text" id="Naam" name="Naam" ><br>
        <label for="Email">Email:</label><br>
        <span class="error">*<?php echo $emailErr;?></span>
        <input type="text" id="Email" name="Email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
