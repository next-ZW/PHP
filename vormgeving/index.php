<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>

<?php
require 'db.php';
 $sql = "SELECT id, name, avatar, health, attack, defense FROM characters ORDER BY name";
$stmt = $conn->prepare(query: $sql);
$stmt->execute();
$characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
$totalCharacters = count(value: $characters);
?>

<header><h1>Alle <?= $totalCharacters ?> characters uit de database</h1></header>

</header>

<div id="container">
    <?php if ($totalCharacters > 0): ?>
        <?php foreach ($characters as $character): ?>
            <a class="item" href="character.php?id=<?= $character['id'] ?>">
                <div class="left">
                <img class="avatar" src="resources/images/<?= htmlspecialchars($character['avatar']) ?>" alt="<?= htmlspecialchars($character['name']) ?>">
                </div>
                <div class="right">
                    <h2><?= htmlspecialchars($character['name']) ?></h2>
                    <div class="stats">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $character['health'] ?></li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $character['attack'] ?></li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $character['defense'] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php $conn = null; ?>
</div>
<footer>&copy; [Nawfal] 2024</footer>
</body>
</html>