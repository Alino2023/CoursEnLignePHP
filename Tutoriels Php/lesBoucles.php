<?php

// *********** BOUCLE WHILE ---- (TANT QUE) ------- 

$chiffre = null;
while ($chiffre < 11 ){

       $chiffre = (int)readline('Entrez un chiffre multiplicateur: ');
break;

}
 
echo "VOICI LA TABLE DE MULTIPLICATION DE $chiffre \n";


// *********** BOUCLE FOR ------ (POUR) -------------

for ($i=0; $i <= 12 ; $i++) { 
       # code...
       echo "- $i x 2 = ". $i*$chiffre . "\n";
} 



// *********** BOUCLE FOREACH ------- (POUR CHAQUE) ------

$notes = [10, 15, 16];

foreach ($notes as $note)
{
       echo " - $note \n";
}


$apprenants = [
     'Informatique'=> ['DOSSOU Yovo', 'DAFLOND Maurice', 'VANGOG Ludovic', 'TRAORE Inoussa'],
     'Comptabilité & Finances' => ['KOMBOUARE Marc', 'LAROCHE Bénoit', 'VALON Etienne']  
];

foreach ($apprenants as $programme => $listeApprenants) 
{
       # code...
       echo "Le programme $programme:\n";
              foreach ($listeApprenants as $apprenant)
              {
                     echo" - $apprenant\n";
              }
              echo"\n";
}
?>