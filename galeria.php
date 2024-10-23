<?php
session_start();
$page="galeria";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/galleryCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <script src="script.js"></script>
    <title>Geléria</title>
</head>
<body onload="loginClose()">
<?php
include "menu.php"
?>
<header>
    <h1>Képek a moziról:</h1>
</header>
<main>
    <div class="cards"><img src="img/1.jpg" alt="nekem8"></div>
    <div class="cards"><img src="img/2.jpg" alt="popcorn"></div>
    <div class="cards"><img src="img/3.jpg" alt="moziterem"></div>
    <div class="cards"><img src="img/4.jpg" alt="gandalf"></div>
    <div class="cards"><img src="img/1.jpg" alt="nekem8"></div>
    <div class="cards"><img src="img/2.jpg" alt="popcorn"></div>
    <div class="cards"><img src="img/3.jpg" alt="moziterem"></div>
    <div class="cards"><img src="img/4.jpg" alt="gandalf"></div>
</main>
<?php
include "register.php";

include "login.php";
?>

<?php
include "footer.php";
?>
</body>
</html>