<html>
<body>
<?php include 'variables.php';
echo "Fruitsoorten";

echo "<ul>";
foreach ($fruitsoorten as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";
?>
</body>
</html>