<!-- Footer -->

<footer>

    <nav>

        <ul>
            <li><a href="index.php#vu"> Accueil </a></li>
            <li><a href="planning.php#vu"> Planning </a></li>

            <?php if (isset($_SESSION['login'])) { ?>

                <li><a href="reservation-form.php#vu"> Réserver une salle </a></li>
                <li><a href="profil.php#vu"> Mon profil </a></li>
                <li><a href="include/deconnexion.php"> Déconnexion </a></li>

            <?php } else { ?>

                <li><a href="connexion.php#vu"> Connexion </a></li>
                <li><a href="inscription.php#vu"> Inscription </a></li>

            <?php } ?>
        </ul>

    </nav>

    <aside> Copyright 2019 Coding School | All Rights Reserved | Project by Mathilde. </aside>

</footer>