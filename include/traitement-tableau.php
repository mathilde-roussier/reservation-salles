<?php 

// recup liste evenements
$connexion = mysqli_connect('localhost','root','','reservationsalles');
$check_event = "SELECT * FROM reservations JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id";
$resultat_event = mysqli_query($connexion,$check_event);

for ($h = 8; $h <= 18; $h++)
{
    echo "<tr><td>". $h ."</td>";

    for ($j = 1; $j <= 5; $j++) 
    {
        $creneau = $j."-".$h;
        echo "<td> <a href='reservation-form.php'> Réserver ce créneau ".$creneau."</a> </td>";
    }

    echo "</tr>";
}

foreach ($resultat_event as $donnees)
{
    var_dump($donnees);

    // Récupération jour et heure de la date séparément:
    $date = explode(' ',$donnees['debut']);
    // Jour
    list($annee,$mois,$jour) = explode('-',$date[0]);
    $jour = date('N',mktime(0,0,0,$mois,$jour,$annee));
}

?>