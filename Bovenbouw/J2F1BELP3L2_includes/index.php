<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php



	//!-- laad hier via php je header in (vanuit je includes map) -->
 include("includes/header.php");

	//!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->

  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'Squad':
            include 'pages/squad.php';
            break;
        case 'Rainbow six siege':
            include 'pages/Rainbow six siege.php';
            break;
        case 'Dales and Dawson':
            include 'pages/dale and dawson.php';
            break;
        case 'DCS World':
            include 'pages/Dcs World.php';
            break;
    }
  } 
	//!-- laad hier via php je footer in (vanuit je includes map)-->
  include("includes/footer.php");
?>
</body>
</html>