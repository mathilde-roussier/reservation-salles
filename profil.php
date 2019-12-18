<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title> Site de Mathilde </title>
    <link rel="stylesheet" href="css/reservation-salles.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main>

        <form method='POST' action='profil.php'>

            <article>
                <label> Login </label>
                <input type="text" name="login" />
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

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>