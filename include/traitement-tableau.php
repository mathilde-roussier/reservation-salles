<?php 

// recup liste evenements
$connexion = mysqli_connect('localhost','root','','reservationsalles');
$check_event = "SELECT * FROM reservations JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id";
$query_check_event = mysqli_query($connexion,$check_event);
$resultat_check_event = mysqli_fetch_all($query_check_event,MYSQLI_ASSOC);
// var_dump($resultat_check_event);

for ($i = 8; $i <= 18; $i++)
{
    echo "<tr><td>". $i ."</td>";

    for ($j = 0; $j <= 4; $j++) 
    {
        echo "<td> <a href='reservation-form.php'> Réserver ce créneau </a> </td>";
    }

    echo "</tr>";
}

?>