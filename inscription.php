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

        <form method='POST' action='inscription.php'>

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

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>