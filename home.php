<?php
session_start();
$page="home";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/homeStyle.css">
   <link rel="stylesheet" href="css/formStyle.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">

    <title>Főoldal</title>


</head>
<body onload="loginClose()" id="body">
<?php
include "menu.php"
?>

<header>
    <div class="hetkoznap">
        <table id="idopont">
            <caption><h1>Válassz időpontot:</h1></caption>
            <tr>
                <th><a href="javascript:void(0)" onclick="idopont(0)" class="napok">Hé</a></th>
                <th><a href="javascript:void(0)" onclick="idopont(1)" class="napok">Ke</a></th>
                <th><a href="javascript:void(0)" onclick="idopont(2)" class="napok">Sze</a></th>
                <th><a href="javascript:void(0)" onclick="idopont(3)" class="napok">Csü</a></th>
                <th><a href="javascript:void(0)" onclick="idopont(4)" class="napok">Pé</a></th>
            </tr>
        </table>
    </div>
</header>
<hr class="csik">

<main>
    <div id="filmek" class="asd">
        <div class="tabla">
            <table>
                <tr>
                    <th><img src="img/250px-Nincs_ido_meghalni.jpg" width="250" height="370" alt="007"></th>

                </tr>
                <tr>
                    <td class="kepszoveg">007 Nincs idő meghalni</td>

                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>

                </tr>


            </table>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th class="filmkepek"><img src="img/572.jpg" alt="Daddy's home" width="250" height="370"></th>
                </tr>
                <tr>
                    <td class="kepszoveg">Megjött apuci 2.</td>
                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th class="filmkepek"><img src="img/796.jpg" alt="Dune" width="250" height="370"></th>
                </tr>
                <tr>
                    <td class="kepszoveg">Dűne</td>
                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th><img src="img/852.jpg" width="250" height="370" alt="pokember"></th>

                </tr>
                <tr>
                    <td class="kepszoveg">Pókember: Nincs hazaút</td>

                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>

                </tr>

            </table>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th class="filmkepek"><img src="img/331424_1582931071.5146.jpg" alt="Szokes" width="250" height="370">
                    </th>
                </tr>
                <tr>
                    <td class="kepszoveg">Szökés Pretoriából</td>
                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th class="filmkepek"><img src="img/336421_1601978875.7002.jpg" alt="bolygo" width="250" height="370">
                    </th>
                </tr>
                <tr>
                    <td class="kepszoveg">Egy élet a bolygónkon</td>
                </tr>
                <tr>
                    <td class="gombok">
                        <button>10:30</button>
                        <button>13:30</button>
                        <button>16:15</button>
                        <button>18:00</button>
                        <button>20:00</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php
    include "register.php";

    include "login.php";
    ?>

</main>

<?php
include "footer.php";
?>
</body>
</html>
