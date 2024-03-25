<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
    <style>
        h2{
            margin-left: 20px;
        }
        H1{
            text-align: center;
        }
    </style>

</head>
<body>
    <h1> Lorem Ipsum</h1>
<?php
    foreach(range(1,10) as $i)
        require 'content.php';

?>
</body>
</html>