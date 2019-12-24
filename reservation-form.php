<?php
session_start();

date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title> Réserver - Réservation salles </title>
    <link rel="stylesheet" href="css/reservation-salles.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main >

    <?php if (isset($_SESSION['login'])) { ?>

        <h1 id='vu'> Réservation </h1>

        <form method='POST' action='reservation-form.php#vu'>

            <article>
                <label> Titre </label>
                <input type="text" name="titre" required />
            </article>

            <article>
                <label> Description </label>
                <textarea name='description'></textarea>
            </article>

            <aside> Les créneaux disponibles sont des créneaux d'une heure, du Lundi au Vendredi uniquement.</aside>

            <article>
                <label> Début </label>
                <div>
                    <input type='date' name='datedebut' required />
                    <input type='time' name='timedebut' min='08:00' max='18:00' value='08:00' required />
                </div>
            </article>

            <article>
                <label> Fin </label>
                <div>
                    <input type='date' name='datefin' required />
                    <input type='time' name='timefin' min='09:00' max='19:00' value='09:00' required />
                </div>
            </article>

            <input type="submit" name='reservation' value='Réserver' />

            <?php include 'include/traitement-reservation-form.php' ?>

        </form>

    <?php } else { ?>

        <section id='vu' class='reservation'>
            Veuillez vous connecter pour accéder à cette page !
        </section>

    <?php } ?>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>