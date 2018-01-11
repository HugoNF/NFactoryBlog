<?php
if(isset($_POST["formulaire"])) {
    $tabErreur = array();
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];


    if($_POST["mail"] == "")
        array_push($tabErreur, "Veuillez saisir votre e-mail");
    if($_POST["mdp"] == "")
        array_push($tabErreur, "Veuillez saisir un mot de passe");
    if(count($tabErreur) != 0) {
        $message = "<ul>";
        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        include("./include/login.inc.php");
    }
    else {
        $connexion = mysqli_connect("localhost", "root", "", "nfactoryblog");
        $mdp=sha1($_POST['#mdp'])
        $requete = "SELECT * FROM t_users WHERE USERMAIL='$mail' AND USERPASSWORD='$mdp'";
        mysqli_query($connexion, $requete);
        mysqli_close($connexion);

    }
}
else {
    echo("Je viens d'ailleurs");
    include("./include/login.inc.php");
}
