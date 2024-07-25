<?php

/* On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert */


$creneau = [];
    
while (true) 
{
    $debut = (int) readline ('Heure d\'ouverture : ');
    $fin = (int)readline ('Heure de fermeture : ');

    if ($debut >= $fin) {
        # code...
        echo "Le créneaux ne peut être enregistré car l'heure d'ouverture ($debut) est supérieure à l'heure de fermeture";
    } 
    else {
        # code...
        $creneaux[] = [$debut, $fin];
        $action = readline ('Voulez-vous enregistrer un nouveau créneau ? (o/n)');
        if ($action === 'n') {
            # code...
            break;
        }

    }
}

print_r($creneaux);
?>