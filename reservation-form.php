<?php 
session_start(); 

if(isset($_SESSION['login']))
{}
else header('Location:index.php');
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

        <form method='POST' action='reservation-form.php'>

            <article>
                <label> Titre </label>
                <input type="text" name="titre" required />
            </article>

            <article>
                <label> Description </label>
                <textarea name='description'></textarea>
            </article>

            <article>
                <label> Début </label>
                <input type='date' name='datedebut' required />
                <input type='time' name='timedebut' required />
            </article>

            <article>
                <label> Fin </label>
                <input type='date' name='datefin' required />
                <input type='time' name='timefin' required />
            </article>

            <input type="submit" name='reservation' value='Réserver' />

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>