<?php
require 'db.php'; // Database connection

// Get the character ID from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Invalid character ID.";
    exit;
}

// Query to fetch the character based on the provided ID
$sql = "SELECT id, name, avatar, health, attack, defense, bio, color, armor, weapon 
        FROM characters 
        WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$character = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the character exists
if (!$character) {
    echo "Character not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?= htmlspecialchars($character['name']) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($character['name']) ?></h1>
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    </header>
    <div id="container">
        <div class="detail">
            <div class="left">
                <img class="avatar" src="resources/images/<?= htmlspecialchars($character['avatar']) ?>" alt="<?= htmlspecialchars($character['name']) ?>">
                <div class="stats" style="background-color: <?= htmlspecialchars($character['color']) ?>;">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= htmlspecialchars($character['health']) ?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= htmlspecialchars($character['attack']) ?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= htmlspecialchars($character['defense']) ?></li>
                    </ul>
                    <ul class="gear">
                        <li><b>Weapon</b>: <?= htmlspecialchars($character['weapon']) ?></li>
                        <li><b>Armor</b>: <?= htmlspecialchars($character['armor']) ?></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p><?= nl2br(htmlspecialchars($character['bio'])) ?></p>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
    <footer>&copy; Nawfal Kouzmane 2024</footer>
</body>
</html>
