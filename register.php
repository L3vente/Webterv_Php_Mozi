<?php
include "users.php";


function uploadProfilePicture($username) {
    global $fajlfeltoltes_hiba;

    if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
      $allowed_extensions = ["png", "jpg", "jpeg"];
      $extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));

      if (in_array($extension, $allowed_extensions)) {
        if ($_FILES["profile-pic"]["error"] === 0) {
          if ($_FILES["profile-pic"]["size"] <= 31457280) {
            $path = "images/" . $username . "." . $extension;

            if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) {
              $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
            }
          } else {
            $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
          }
        } else {
          $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
        }
      } else {
        $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
      }
    }
  }

$fiokok = loadUsers("users.txt");
$hibak = [];
if (isset($_POST["regiszt"])) {

    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "")
        $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
        $hibak[] = "E-mail cím megadása kötelező!";

    if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" || !isset($_POST["jelszo2"]) || trim($_POST["jelszo2"]) === "")
        $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

    $felhasznalonev = $_POST["felhasznalonev"]  ?? 'default';;
    $email = $_POST["email"] ?? 'default';
    $jelszo = $_POST["jelszo"];
    $jelszo2 = $_POST["jelszo2"];
    if(!isset($_POST["phone"]) || trim($_POST["phone"]) === ""){
        $telefon = "Nincs megadva!";
    }else{
        $telefon = $_POST["phone"];
    }
    if(!isset($_POST["address"]) || trim($_POST["address"]) === ""){
        $cim = "Nincs megadva!";
    }else{
        $cim= $_POST["address"];
    }

    foreach ($fiokok as $fiok) {
        if ($fiok["felhasznalonev"] === $felhasznalonev){
            $hibak[] = "A felhasználónév már foglalt!";
        }

        if ($fiok["email"] === $email){
            $hibak[] = "Ez az e-mail cím már foglalt!";
        }

    }

    if (strlen($jelszo) < 8)
        $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";

    if ($jelszo !== $jelszo2)
        $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $hibak[] = "Hibás e-mail formátum!";
    }

    $fajlfeltoltes_hiba = "";
    uploadProfilePicture($felhasznalonev);

    if ($fajlfeltoltes_hiba !== "")
      $hibak[] = $fajlfeltoltes_hiba;

    if (count($hibak) === 0) {
        $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
        $fiokok[] = ["felhasznalonev" => $felhasznalonev, "jelszo" => $jelszo,  "email" => $email, "telefon" => $telefon, "cim" => $cim];
        saveUsers("users.txt", $fiokok);
        $siker = TRUE;
    } else {
        $siker = FALSE;
    }
}

if (isset($siker) && $siker === TRUE) {

    echo '<script>alert("Sikeres regisztráció!")</script>';
    echo '<meta http-equiv="Refresh" content="0;url=home.php">';
    } else {
    foreach ($hibak as $hiba)
    echo "<script> alert('$hiba')</script>";
}


?>

<div id="id02" class="modal">
    <form class="modal-content animate" method="POST">
        <div class="closeBtn">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <h1 class="text-center">Regisztráció</h1>
            <input type="text" name="felhasznalonev" placeholder="Felhasználónév" value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>" required>
            <input type="email" name="email" placeholder="Email cím" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>
            <input type="password" name="jelszo" id="pw1" minlength="8" placeholder="Jelszó" required>
            <input type="password" name="jelszo2" id="pw2" placeholder="Jelszó megerősítése" required>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{2}/[0-9]{7}" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" placeholder="Telefonszáma(Opc.:30/0123456)">
            <input type="text" name="address" id="address" placeholder="Címe(Opc.)" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>">
            <input type="checkbox" required> <a href="#">Adatkezelési feltételek...</a>
            <label>Profilkép: <input type="file" name="profile-pic" accept="image/*"/></label>
            <input type="submit" class="nagy" name="regiszt" id="btn" value="Regisztráció">
            <button type="button" class="mini" onclick="document.getElementById('id02').style.display='none'; document.getElementById('id01').style.display='block'">Bejelentkezés</button><br>
            <a href="home.php" class="mini" style="text-decoration: none; font-size: 15px">Kezdőlap</a>
        </div>
    </form>

</div>