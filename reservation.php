<?php
session_start();

if (isset($_SESSION['login'])) {
} else header('Location:index.php');

include 'include/traitement-reservation.php';
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

    <main>

        <section>

            <article>
                <p> Créé par : <?php echo $event['login']; ?> </p>
            </article>

            <article>
                <p> Titre : <?php echo $event['titre']; ?> </p>
            </article>

            <article>
                <p> Description : <?php echo $event['description']; ?> </p>
            </article>

            <article>
                <p> Du <?php echo $event['debut']; ?> </p>
            </article>

            <article>
                <p> Au <?php echo $event['fin']; ?> </p>
            </article>

        </section>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>