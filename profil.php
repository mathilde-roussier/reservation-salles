<?php
session_start();

if (isset($_SESSION['login'])) {
} else header('Location:index.php');

include 'include/traitement-profil.php'
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

        <h1 id='vu'> Profil </h1>

        <form method='POST' action='profil.php#vu'>

            <article>
                <label> Login </label>
                <input type="text" name="login" value=<?php echo $resultat_data['login']; ?> />
            </article>

            <article>
                <label> Mot de passe actuel </label>
                <input type="password" name="old_password" required />
            </article>

            <article>
                <label> Nouveau mot de passe </label>
                <input type="password" name="password" />
            </article>

            <article>
                <label> Confirmation du nouveau mot de passe </label>
                <input type="password" name="password_conf" />
            </article>

            <input type="submit" name='profil' value='Modifier' />

            <?php include 'include/affichage-profil.php' ?>

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>