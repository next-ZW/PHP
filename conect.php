<?php
$db_host = 'mariadb';
$db_user = 'root';
$db_password = 'mysql';
$db_database = 'Studenten admin';

$db = new PDO('mysql:host='.$db_host.'; port=3306; dbname='.$db_database, $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$select = $db->prepare("SELECT voornaam, tussenvoegsel, achternaam FROM student");
$select->execute();
$students = $select->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">5
    <title>Table</title>
</head>
<body>
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['voornaam']; ?></td>
                <td><?php echo $student['tussenvoegsel']; ?></td>
                <td><?php echo $student['achternaam']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
