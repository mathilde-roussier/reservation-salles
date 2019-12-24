<!-- Traitement php et sql profil -->

<?php

$connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
$recup_data = "SELECT * FROM utilisateurs WHERE login = '" . $_SESSION['login'] . "'";
$query_data = mysqli_query($connexion, $recup_data);
$resultat_data = mysqli_fetch_assoc($query_data);
// var_dump($resultat_data);

if (isset($_POST['profil'])) {

    // Création variables 
    $login = $_POST['login'];
    $old_password = $_POST['old_password'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    // Création booléen pour l'affichage des messages
    $modif_log = false;
    $modif_password = false;
    $erreur_log = false;
    $erreur_oldpassword = false;
    $erreur_password = false;

    if (password_verify($old_password, $resultat_data['password'])) 
    {
        if ($login != $resultat_data['login']) 
        {
            $verif = "SELECT login FROM utilisateurs WHERE login = '" . $login . "'";
            $query_verif = mysqli_query($connexion, $verif);
            $resultat_verif = mysqli_fetch_assoc($query_verif);

            if (!empty($resultat_verif)) 
            {
                $erreur_log = true;
            } else 
            {
                $update_log = "UPDATE utilisateurs SET login = '$login' WHERE id = '" . $resultat_data['id'] . "'";
                $query_updatelog = mysqli_query($connexion, $update_log);
                $resultat_data['login'] = $login;
                $_SESSION['login'] = $login;
                $modif_log = true;
            }
        }

        if (!empty($password)) 
        {
            if ($password == $password_conf) 
            {
                $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $update_password = "UPDATE utilisateurs SET password = '$password' WHERE id = '" . $resultat_data['id'] . "'";
                $query_updatepassword = mysqli_query($connexion, $update_password);
                $modif_password = true;
            } else 
            {
                $erreur_password = true;
            }
        }
    } else 
    {
        $erreur_oldpassword = true;
    }
    mysqli_close($connexion);
}
