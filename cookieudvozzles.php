<?php
session_start();
$page="cookie";
?>
<?php
if (isset($_POST["submit-btn"])) {
    if (isset($_POST["lang"]) && trim($_POST["lang"]) !== "") {
        $lang = $_POST["lang"];
        setcookie("lang", $lang, time() + 86400);
        header("Location: cookieudvozzles.php");
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <link rel="stylesheet" href="css/cookieStyle.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <title>Üdözöllek</title>
</head>
<body>
<?php
include "menu.php";
include "register.php";
include "login.php";
?>
    <form action="cookieudvozzles.php" method="POST" id="form">
        <label for="language" id="nyelv" style="color: #2ecc71">Language:</label>
        <select id="language" name="lang">
            <option value="en" <?php if (isset($_COOKIE["lang"]) && $_COOKIE["lang"] === "en") echo "selected"; ?>>English</option>
            <option value="de" <?php if (isset($_COOKIE["lang"]) && $_COOKIE["lang"] === "de") echo "selected"; ?>>Deutsch</option>
            <option value="hu" <?php if (isset($_COOKIE["lang"]) && $_COOKIE["lang"] === "hu") echo "selected"; ?>>Magyar</option>
        </select>
        <input type="submit" name="submit-btn" value="OK">
    </form>


<?php


if (isset($_COOKIE["lang"]) && $_COOKIE["lang"] === "hu") {
    echo "<h1>Üdvözöllek a weboldalamon!</h1>";
} elseif (isset($_COOKIE["lang"]) && $_COOKIE["lang"] === "de") {
    echo "<h1>Willkommen auf meiner Seite!</h1>";
} else {
    echo "<h1>Welcome to my website!</h1>";
}
?>
<div class="delete">
    <a href="delete_lang.php">Delete cookies</a>
</div>
<?php
include "footer.php";
?>
</body>
</html>
