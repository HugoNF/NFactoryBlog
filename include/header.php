<?php
session_start();
?>
<header>
    <ul>
        <li><a href="index.php?page=acceuil">Accueil</a></li>
        <li><a href="index.php?page=inscription">inscription</a></li>
        <li><a href="index.php?page=login">Login</a></li>
    </ul>
    <?php

    echo("SALUT MON BRO" . $_SESSION['$mail']);
    ?>
</header>