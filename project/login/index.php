<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<button class="button" onclick="toggleForm()">Voeg Toe</button>

<form id="myForm" class="hidden" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <br>

    <label for="email"></label>
    <input type="email" id="email" name="email">

    <br>

    <input type="submit" value="Submit">
</form>

<script>
    function toggleForm() {
        var form = document.getElementById("myForm");
        form.classList.toggle("hidden");
    }
</script>

</body>
</html>