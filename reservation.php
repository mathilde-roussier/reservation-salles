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
    <title> Réservation - Réservation salles </title>
    <link rel="stylesheet" href="css/reservation-salles.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main>

        <h1 id='vu'> Evènement </h1>

        <section class='reservation'>

            <article>
                <h3> Créé par : </h3>
                <div><?php echo $event['login']; ?> </div>
            </article>

            <article>
                <h3> Titre : </h3>
                <div> <?php echo $event['titre']; ?> </div>
            </article>

            <article>
                <h3> Description : </h3>
                <div> <?php echo $event['description']; ?> </div>
            </article>

            <article>
                <h3> Du </h3>
                <div> <?php echo $event['debut']; ?> </div>
            </article>

            <article>
                <h3> Au </h3>
                <div> <?php echo $event['fin']; ?> </div>
            </article>

        </section>

    </main>

    <?php mysqli_close($connexion);
    include 'include/footer.php' ?>

</body>

</html>