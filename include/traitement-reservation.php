<!-- Traitement php et SQL reservation.php -->

<?php

$connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
$recup_event = "SELECT * FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur WHERE reservations.id = '" . $_GET['id'] . "'";
$query_recup_event = mysqli_query($connexion, $recup_event);
$event = mysqli_fetch_assoc($query_recup_event);

// var_dump($event);

?>