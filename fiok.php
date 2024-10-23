<?php
session_start();

$page="fiok";
if (!isset($_SESSION["user"])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navStyle.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fiokStyle.css">
    <script src="script.js"></script>
    <title>Fiók</title>

    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">

</head>
<body onload="loginClose()">
<header>
    <h1>Fiók adatok:</h1>
</header>
<?php
include "menu.php"
?>

        <?php
        	// a profilkép elérési útvonalának eltárolása egy változóban

          $profilkep = "images/admin.png";      // alapértelmezett kép, amit akkor jelenítünk meg, ha valakinek nincs feltöltött profilképe
          $utvonal = "images/" . $_SESSION["user"]["felhasznalonev"]; // a kép neve a felhasználó nevével egyezik meg

          $kiterjesztesek = ["png", "jpg", "jpeg"];     // a lehetséges kiterjesztések, amivel egy profilkép rendelkezhet

          foreach ($kiterjesztesek as $kiterjesztes) {  // minden kiterjesztésre megnézzük, hogy létezik-e adott kiterjesztéssel profilképe a felhasználónak
            if (file_exists($utvonal . "." . $kiterjesztes)) {
              $profilkep = $utvonal . "." . $kiterjesztes;  // ha megtaláltuk a felhasználó profilképét, eltároljuk annak az elérési útvonalát egy változóban
            }
          }
        ?>

<main>
    <div class="grid-container">
        <div class="grid-item">Felhasználónév:</div>
        <div class="grid-item">E-mail cím:</div>
        <div class="grid-item">Telefonszám:</div>
        <div class="grid-item">Cím:</div>
        <div class="grid-item"><?php echo $_SESSION["user"]["felhasznalonev"]; ?></div>
        <div class="grid-item"><?php echo $_SESSION["user"]["email"]; ?></div>
        <div class="grid-item"><?php echo $_SESSION["user"]["telefon"]; ?></div>
        <div class="grid-item"><?php echo $_SESSION["user"]["cim"]; ?></div>
    </div>
    <div id="profil">
        <table class="profile-data">
            <caption>Profilkép</caption>
          <tr>
            <th>
              <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200"/>
              <?php if ($_SESSION["user"]["felhasznalonev"] !== "default") {  ?>
                <form action="fiok.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="profile-pic" accept="image/*"/>
                  <input type="submit" name="upload-btn" value="Profilkép módosítása"/>
                </form>
              <?php } ?>
            </th>
          </tr>
        </table>    
    </div>
    <?php
        include "register.php";

        include "login.php";
    ?>
    <?php
          // a profilkép módosítását elvégző PHP kód

          if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {  // ha töltöttek fel fájlt...
            $fajlfeltoltes_hiba = "";                                       // változó a fájlfeltöltés során adódó esetleges hibaüzenet tárolására
            uploadProfilePicture($_SESSION["user"]["felhasznalonev"]);      // a kozos.php-ban definiált profilkép feltöltést végző függvény meghívása

            $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));    // a feltöltött profilkép kiterjesztése
            $utvonal = "images/" . $_SESSION["user"]["felhasznalonev"] . "." . $kit;            // a feltöltött profilkép teljes elérési útvonala

            // ha nem volt hiba a fájlfeltöltés során, akkor töröljük a régi profilképet, egyébként pedig kiírjuk a fájlfeltöltés során adódó hibát

            if ($fajlfeltoltes_hiba === "") {
              if ($utvonal !== $profilkep && $profilkep !== "images/admin.png") {   // az ugyanolyan névvel feltöltött képet és a default.png-t nem töröljük
                unlink($profilkep);                         // régi profilkép törlése
              }

              echo '<meta http-equiv="Refresh" content="0;url=fiok.php">';              // weboldal újratöltése
            } else {
              echo "<p>" . $fajlfeltoltes_hiba . "</p>";
            }
          }
        ?>
</main>
<div id="torles">
    <form  method="POST">
        <input  type="submit" name="torles" value="Fiók törlése">
    </form>
</div>

<?php
if (isset($_POST["torles"])){
    for($i=0; $i<count($fiokok);$i++){
        if ($fiokok[$i]["felhasznalonev"] === $_SESSION["user"]["felhasznalonev"]){
            array_splice($fiokok, $i, 1);
            break;


        }
    }

    saveUsers("users.txt",$fiokok);
    session_unset();
    session_destroy();
    echo '<meta http-equiv="Refresh" content="0;url=home.php">';
}


?>

<?php
include "footer.php";
?>
</body>
</html>