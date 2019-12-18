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

        <form method='POST' action='connexion.php'>

            <article>
                <label> Login </label>
                <input type='text' name='login' required />
            </article>

            <article>
                <label> Mot de passe </label>
                <input type='password' name='password' required />
            </article>

            <input type='submit' name='connexion' value='Connexion' />

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>