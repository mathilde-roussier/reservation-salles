<!-- Header -->

<header>

<aside>
    <img src="img/stress.png"/>
    <h1> CASSE-COU : <br> Viens te défouler ! </h1>
</aside>

    <nav>

        <ul>
            <li><a href="index.php"> Accueil </a></li>
            <li><a href="planning.php"> Planning </a></li>

            <?php if (isset($_SESSION['login'])) { ?>

                <li><a href="reservation-form.php"> Réserver une salle </a></li>
                <li><a href="profil.php"> Mon profil </a></li>
                <li><a href="include/deconnexion.php"> Déconnexion </a></li>

            <?php } else { ?>

                <li><a href="connexion.php"> Connexion </a></li>
                <li><a href="inscription.php"> Inscription </a></li>

            <?php } ?>
        </ul>

    </nav>
    
</header>