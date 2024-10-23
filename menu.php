<div  class="topnav" id="myTopnav">
    <?php if (isset($_SESSION["user"])) { ?>
        <a href="home.php" class="<?php if($page=="home"){?>active<?php } ?>">Főoldal</a>
        <a href="jegyek.php" class="<?php if($page=="jegyek"){?>active<?php } ?>">Jegyek</a>
        <a href="filmek.php" class="<?php if($page=="filmek"){?>active<?php } ?>">Filmek</a>
        <a href="galeria.php" class="<?php if($page=="galeria"){?>active<?php } ?>">Galéria</a>
        <a href="fiok.php" class="<?php if($page=="fiok"){?>active<?php } ?>">Fiók</a>
        <a href="jelszo.php" class="<?php if($page=="jelszo"){?>active<?php } ?>">Jelszo</a>
        <a href="cookieudvozzles.php" class="<?php if($page=="cookie"){?>active<?php } ?>">Üdvözlégy</a>
        <?php if($_SESSION['user']['felhasznalonev']=='admin'){?>
            <a href="admin.php" class="<?php if($page=="admin"){?>active<?php } ?>">Admin</a>
        <?php } ?>
        <a href="logout.php" style="width:auto; float: right; height: auto" class="login">Logout</a>
    <?php } else { ?>
        <a href="home.php" class="<?php if($page=="home"){?>active<?php } ?>">Főoldal</a>
        <a href="jegyek.php" class="<?php if($page=="jegyek"){?>active<?php } ?>">Jegyek</a>
        <a href="filmek.php" class="<?php if($page=="filmek"){?>active<?php } ?>">Filmek</a>
        <a href="galeria.php" class="<?php if($page=="galeria"){?>active<?php } ?>">Galéria</a>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;" class="login">Login</button>
    <?php } ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
