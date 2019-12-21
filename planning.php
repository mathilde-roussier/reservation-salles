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

    <main>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th> Lundi </th>
                    <th> Mardi </th>
                    <th> Mercredi </th>
                    <th> Jeudi </th>
                    <th> Vendredi </th>
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