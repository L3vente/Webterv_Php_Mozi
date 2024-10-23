<?php
session_start();
$page="jegyek";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navStyle.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <title>Jegyek</title>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <link rel="stylesheet" href="css/jegyekStyle.css">

</head>
<body onload="loginClose()">
<?php
include "menu.php"
?>
<header>
    <h1>Jegy típusok és árak</h1>
</header>
    <main>
        <table class="table">
            <tbody>
            <tr>
                <th id="tipus">Típus</th>
                <th id="idoszak">Időszak</th>
                <th id="ar">Ár</th>
            </tr>
            <tr>
                <td rowspan="3" headers="tipus"> 3D </td>
                <td headers="idoszak"> Délelőtt </td>
                <td headers="ar">1500Ft</td>
            </tr>

            <tr>
                <td headers="idoszak"> Délután </td>
                <td headers="ar">2000Ft</td>
            </tr>

            <tr>
                <td headers="idoszak"> Este </td>
                <td headers="ar">1000Ft</td>
            </tr>

            <tr>
                <td rowspan="3" headers="tipus"> 2D </td>
                <td headers="idoszak"> Délelőtt </td>
                <td headers="ar">1000Ft</td>
            </tr>

            <tr>
                <td headers="idoszak"> Délután </td>
                <td headers="ar">1500Ft</td>
            </tr>

            <tr>
                <td headers="idoszak"> Este </td>
                <td headers="ar">800Ft</td>
            </tr>
            </tbody>
        </table>
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