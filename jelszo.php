
<!DOCTYPE html>
<html lang="hu">
<?php
session_start();
$page="jelszo";

?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <title>Jelszó változatás</title>
</head>
<body>
<?php
include "menu.php";
include "register.php";

include "login.php";
?>
<form name="frmChange" method="post" onSubmit="return validatePassword()">
    <div id="div" style="width:500px;">
        <div class="message"></div>
        <table id="jelszo" class="tblSaveForm">
            <tr class="tableheader">
                <td colspan="2">Jelszó megváltozatása</td>
            </tr>
            <tr>
                <td style="margin: 0 auto"><h4>Aktuális jelszó</h4></td>
                <td><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
            </tr>
            <tr>
                <td><h4>Új jelszó</h4></td>
                <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
            </tr>
            <tr>
            <td><h4>Új jelszó újra</h4></td>
            <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
            </tr>
            <tr>
                <td id="submitt" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
            </tr>
        </table>
    </div>
</form>
<?php
include "footer.php";
?>
</body>
<?php
if (isset($_POST["submit"])){
    for($i=0; $i<count($fiokok);$i++){
        if ($fiokok[$i]["felhasznalonev"] === $_SESSION["user"]["felhasznalonev"]){
            if(isset($_POST["currentPassword"])){
                if(password_verify($_POST["currentPassword"], $fiokok[$i]["jelszo"])){
                    if(isset($_POST["newPassword"])){
                        if(isset($_POST["confirmPassword"]) && $_POST["confirmPassword"] === $_POST["newPassword"]){
                            $fiokok[$i]["jelszo"]=password_hash($_POST["newPassword"], PASSWORD_DEFAULT);
                            saveUsers("users.txt",$fiokok);
                            session_unset();
                            session_destroy();
                            echo '<meta http-equiv="Refresh" content="0;url=home.php">';
                            break;
                    }else{
                            $hib="A két új jelszó nem egyezik meg!";
                            echo "<script> alert('$hib')</script>";
                            echo '<meta http-equiv="Refresh" content="0;url=jelszo.php">';
                        }

                    }else{
                        $hib="Nem adtad meg az új jelszót!";
                        echo "<script> alert('$hib')</script>";
                        echo '<meta http-equiv="Refresh" content="0;url=jelszo.php">';
                    }
                }else{
                    $hib="A megadott jelszó nem egyezik a az aktuális jelszóddal!";
                    echo "<script> alert('$hib')</script>";
                    echo '<meta http-equiv="Refresh" content="0;url=jelszo.php">';
                }

            }else{
                $hib="Nem adtad meg a jelszavad!";
                echo "<script> alert('$hib')</script>";
                echo '<meta http-equiv="Refresh" content="0;url=jelszo.php">';
            }



        }
    }


}
?>
</html>
