<?php
session_start();

if (!isset($_SESSION['login'])) {
} else header('Location:index.php');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title> Site de Mathilde </title>
    <link rel="stylesheet" href="css/reservation-salles.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main >

        <h1 id='vu'> Inscription </h1>

        <form method='POST' action='inscription.php#vu'>

            <article>
                <label> Login </label>
                <input type="text" name="login" required />
            </article>

            <article>
                <label> Mot de passe </label>
                <input type="password" name="password" required />
            </article>

            <article>
                <label> Confirmation du mot de passe </label>
                <input type="password" name="password_conf" required />
            </article>

            <input type="submit" name='inscription' value='Inscription' />

            <?php include 'include/traitement-inscription.php' ?>

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>