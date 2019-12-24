<?php session_start(); ?>

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

        <h1 id='vu'> Planning </h1>

        <table>
            <thead>
                <tr>
                    <th class='jours'></th>
                    <th class='jours'> Lundi </th>
                    <th class='jours'> Mardi </th>
                    <th class='jours'> Mercredi </th>
                    <th class='jours'> Jeudi </th>
                    <th class='jours'> Vendredi </th>
                </tr>
            </thead>
            <tbody>
                <?php include 'include/traitement-tableau.php' ?>
            </tbody>
        </table>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>