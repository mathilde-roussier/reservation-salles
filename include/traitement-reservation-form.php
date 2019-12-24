<!-- Traitement php et sql reservation -->

<?php

if (isset($_POST['reservation'])) {
    // Création des variables 
    $titre = addslashes($_POST['titre']);
    $description = addslashes($_POST['description']);
    $date_debut = $_POST['datedebut'] . " " . $_POST['timedebut'];
    $date_fin = $_POST['datefin'] . " " . $_POST['timefin'];

    $connexion = mysqli_connect('localhost', 'root', '', 'reservationsalles');
    $verif_event = "SELECT id FROM reservations WHERE debut = '" . $date_debut . "'";
    $query_verifevent = mysqli_query($connexion, $verif_event);
    $resultat_verifevent = mysqli_fetch_assoc($query_verifevent);
    // var_dump($resultat_verifevent);

    // Evaluation de la durée du créneau 
    $timedebut = explode(":", $_POST['timedebut']);
    $timefin = explode(":", $_POST['timefin']);
    $timedebut_fini = $timedebut[0] . $timedebut[1];
    $timefin_fini = $timefin[0] . $timefin[1];
    $duree = $timefin_fini - $timedebut_fini;
    // echo $duree;

    if (empty($resultat_verifevent)) 
    {
        if ($_POST['datedebut'] < date('Y-m-d H:i:s')) 
        { ?>
            <span>/!\ Ce créneau est passé !</span>
            <?php } else 
            {
            if ($_POST['datedebut'] == $_POST['datefin']) 
            {
                if ($duree == 100) 
                {
                    $insert_event = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUE ('$titre','$description','$date_debut','$date_fin','" . $_SESSION['id'] . "')";
                    $query_event = mysqli_query($connexion, $insert_event);
                    header('Location:planning.php#vu');
                } elseif ($duree < 100) 
                { ?>
                    <span> /!\ Heure de fin inférieur à l'heure du début. </span>
                <?php } else 
                { ?>
                    <span> /!\ Créneau de plus d'une heure ! </span>
                <?php }
            } elseif ($_POST['datefin'] < $_POST['datedebut']) 
            { ?>
                <span> /!\ Jour de fin inférieur au jour du début. </span>
            <?php } else 
            { ?>
                <span> /!\ Créneau de plus d'un jour ! </span>
        <?php }
        }
    } else 
    { ?>
        <span> Créneau non disponible ! </span>
<?php }
} ?>