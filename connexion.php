<?php
session_start();

if (!isset($_SESSION['login'])) {
} else header('Location:index.php');

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title> Connexion - Réservation salles</title>
    <link rel="stylesheet" href="css/reservation-salles.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main >

        <h1 id='vu'> Connexion </h1>

        <form method='POST' action='connexion.php#vu'>

            <article>
                <label> Login </label>
                <input type='text' name='login' required />
            </article>

            <article>
                <label> Mot de passe </label>
                <input type='password' name='password' required />
            </article>

            <input type='submit' name='connexion' value='Connexion' />

            <?php include 'include/traitement-connexion.php' ?>

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>