<?php
$uzenet = "";
$sikeres=false;
if (isset($_POST["login"])) {
    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "" || !isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "") {
        $uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";
    } else {
        $felhasznalonev = $_POST["felhasznalonev"];
        $jelszo = $_POST["jelszo"];


        $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

        foreach ($fiokok as $fiok) {

            if ($fiok["felhasznalonev"] === $felhasznalonev && password_verify($jelszo, $fiok["jelszo"])) {
                $uzenet = "Sikeres";
                $_SESSION["user"] = $fiok;
                $sikeres = true;
                break;
            }
        }
        if($sikeres){
            echo '<script>alert("Sikeres bejelentkezés")</script>';
            echo '<meta http-equiv="Refresh" content="0;url=cookieudvozzles.php">';
        }else{
            echo '<script>alert("Sikertelen belépés! A belépési adatok nem megfelelők!")</script>';
        }
    }

}
?>

<div id="id01" class="modal">

    <form class="modal-content animate" method="POST">
        <div class="closeBtn">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="uname"><b>Felhasználónév</b></label>
            <input type="text" placeholder="Add meg a felhasználónevet" id="uname" name="felhasznalonev" required>
            <label for="psw"><b>Jelszó</b></label>
            <input type="password" placeholder="Add meg a jelszót" id="psw" name="jelszo" required>
            <button type="submit" name="login" class="nagy">Login</button>
            <button type="button" class="nagy" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'">Register</button>
            <button type="reset" class="mini">Reset</button>
        </div>
        <br>
    </form>
</div>
