Salut le monde du Php
<?php
$nom = "LERICHE";
$prenom = "Francis";
$note1 = 10;
$note2 = 20;
$moyenne = ($note1+$note2)/2;
echo "Bonjour" . ' '. $prenom . " " . $nom; 
echo "\n";
echo 'Vous avez obtenu la moyenne de: ' . ($note1 + $note2 ) / 2;
echo "\nBonjour $prenom $nom vous avez obtenu une moyenne de $moyenne";

//Les notions de base des tableaux en php

$notes= [10, 20, 15, 12];
echo "\n$notes[1]"; //affiche la deeuxieme valeur du tableau notes qui se trouve à l'index 1
$eleves = ['Dosseh', 'Abalo',[18, 14, 19, 12]];
echo "\n";
echo $eleves[2][2];

//Notation de tableau avec index personnalisé
$etudiants = [
    'matricule' => 10000, 
    'nom' => 'LAFLEUR', 
    'prenom' => 'Xavier', 
    'note' => [12, 18, 20, 18, 16]
            ];
echo $etudiants['matricule']." ".$etudiants['prenom']." ".$etudiants['nom']." ".$etudiants['note'][1];

//autre exemple de tableau complexe

$apprenant = [
    'matricule' => [10001, 10002, 10003, 10004],
    'nom' => ['KONDO', 'NOAGBODJI', 'LAWSON', 'PARENT'],
    'prenom' => ['Koffi', 'Marc', 'Anani', 'Ludovic'],
    'note' => [12, 15, 18, 14]
             ];

    echo "\n";
    echo "\n";
   // echo "MATRICULE".' '."PRENOM".' '."NOM".' '."NOTE";
    echo "\n";
    echo $apprenant['matricule'][0].' '.$apprenant['prenom'][0].' '.$apprenant['nom'][0].' '.$apprenant['note'][0];
    echo "\n";
    echo "\n";

    echo "LISTES DES APPRENANTS AVEC LEURS NOTES RESPECTIVES";
    echo "\n";
    echo "\n";
    /*$i = 0;
    while ($i < 4)
        {
            echo $apprenant['matricule'][i].' '.$apprenant['prenom'][i].' '.$apprenant['nom'][i].' '.$apprenant['note'][i];
            $i++;
        }
*/
  

//--------------------------- GESTION DE TABLEAUX DANS UN TABLEAUX --------------------------------//

$classe = [
    [
        'matricule' => 10001,
        'nom' => 'KLOUVI',
        'prenom'=> 'Kodjo',
        'dateNaiss'=>'05/06/1986',
        'sexe'=>'Masculin',
        'notes'=>[8, 16, 18, 20, 13]
    ],
    [
        'matricule' => 10002,
        'nom' => 'DONOU',
        'prenom'=> 'Maurice',
        'dateNaiss'=>'28/08/1981',
        'sexe'=>'Masculin',
        'notes'=>[17, 15, 18, 14, 18]
    ],
    [
        'matricule' => 10003,
        'nom' => 'MONTAGNE',
        'prenom'=> 'Emilie',
        'dateNaiss'=>'03/11/1991',
        'sexe'=>'Feminin',
        'notes'=>[12, 14, 07, 16, 10]
    ]
    ];

    $classe[0]['notes'][0]=(int)readline ('Entrez votre note: ');
    if ($classe[0]['notes'][0] > 12){
        echo "Bravo vous avez la moyenne";
    } 
    elseif ($classe[0]['notes'][0] === 12){
        echo "Vous avez juste la moyenne";
    } else
    {
        echo 'Vous n\'avez pas la moyenne';
    }
    echo"\n";
echo $classe[0]['notes'][0];

?>





Comment ça va?