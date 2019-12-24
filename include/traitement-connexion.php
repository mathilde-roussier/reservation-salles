<!-- Traitement php et sql connexion -->

<?php

if (isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
    $recup_inscri = "SELECT * from utilisateurs WHERE login = '" . $login . "'";
    $query_recupinscri = mysqli_query($connexion, $recup_inscri);
    $resultat_recupinscri = mysqli_fetch_assoc($query_recupinscri);

    if (!empty($resultat_recupinscri)) {
        if (password_verify($password, $resultat_recupinscri['password'])) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $resultat_recupinscri['id'];
            header('Location:planning.php#vu');
        } else { ?>
            <span> /!\ Erreur de mot de passe /!\ </span>
        <?php }
    } else { ?>
        <span> Cet utilisateur n'existe pas ! </span>
<?php }
    mysqli_close($connexion);
} ?>