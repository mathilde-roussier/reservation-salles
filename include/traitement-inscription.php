<!-- Traitement php et sql inscription -->

<?php

if (isset($_POST['inscription'])) {
    $login = $_POST['login'];

    $connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
    $check = "SELECT login from utilisateurs WHERE login = '" . $login . "'";
    $querycheck = mysqli_query($connexion, $check);
    $resultatcheck = mysqli_fetch_all($querycheck);

    if (!empty($resultatcheck)) { ?>
        <span> Ce logo est déjà utilisé ! </span>
    <?php } elseif ($_POST['password'] != $_POST['password_conf']) { ?>
        <span> /!\ Les mots de passe sont différents ! </span>
    <?php } else {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 12));

        $insert_inscri = "INSERT INTO utilisateurs (login,password) VALUE ('" . $login . "','" . $password . "')";
        $query_inscri = mysqli_query($connexion, $insert_inscri);
        header('Location:connexion.php');
    }

    mysqli_close($connexion);
}
?>