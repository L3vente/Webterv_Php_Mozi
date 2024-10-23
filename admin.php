<?php
session_start();
$page="admin";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <link rel="stylesheet" href="css/formStyle.css">
    <link rel="stylesheet" href="css/filmekStyle.css">
    <link rel="stylesheet" href="css/jegyekStyle.css">
    <title>Admin felület!</title>


</head>
<body >
<?php
include "login.php";
?>
<?php
include "register.php";
?>
<?php
include "menu.php"
?>
<header>
    <h1>Admin felület!</h1>
</header>
<main>
    <table class="table">
        <tr>
            <th>Felhasználónév</th>
            <th>E-mail</th>
            <th>Jelszó</th>
            <th>Telefonszám</th>
            <th>Cím</th>

        </tr>
            <?php
        foreach ($fiokok as $fiok) {
        echo "<tr>
                <td>".$fiok["felhasznalonev"]."
                </td><td>".$fiok["email"]."</td>
                <td>".$fiok["jelszo"]."</td>
                <td>".$fiok["telefon"]."</td>
                <td>".$fiok["cim"]."</td>
                </tr>";
        }?>

    </table>
</main>

<?php
include "footer.php";
?>
</body>
</html>

