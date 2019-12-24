<?php

// recup liste evenements
$connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
$check_event = "SELECT * FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur WHERE WEEK(reservations.debut) = WEEK(CURDATE()) ";
$resultat_event = mysqli_query($connexion, $check_event);

$creneaupris = false;

for ($h = 8; $h <= 18; $h++) {
    echo "<tr><td class='heures'>" . $h . "</td>";

    for ($j = 1; $j <= 5; $j++) {
        $creneau = $j . $h;

        echo "<td class='creneaux' >";

        if (isset($resultat_event)) {
            foreach ($resultat_event as $donnees) {
                // var_dump($donnees);

                // Récupération jour et heure de la date séparément:
                $date = explode(' ', $donnees['debut']);
                // Jour
                list($y, $m, $d) = explode('-', $date[0]);
                $jour = date('N', mktime(0, 0, 0, $m, $d, $y));
                // heures
                list($he, $mi, $se) = explode(':', $date[1]);
                $heure = date('G', mktime($he, $mi, $se, 0, 0, 0));

                if ($jour . $heure == $creneau) {
                    $creneaupris = true;
                    break;
                } else {
                    $creneaupris = false;
                }
            }
            if ($creneaupris == true) {
                $id = $donnees['id'];
?>
                <a href='reservation.php?id=<?php echo $id ?>#vu'>
                    <div class='event'>
                        <?php echo $donnees['login'] ?> <br />
                        <?php echo $donnees['titre'] ?>
                    </div>
                </a>
            <?php } else { ?> <a href='reservation-form.php#vu'>
                    <article class='dispo'>
                        Disponible
                    </article>
                </a>
            <?php }
        } else {
            ?>
            <a href='reservation-form.php#vu'>
                <article class='dispo'>
                    Disponible
                </article>
            </a>

<?php }
        echo '</td>';
    }
    echo "</tr>";
}

mysqli_close($connexion);
?>