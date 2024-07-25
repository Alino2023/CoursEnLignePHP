<?php
/*
Demander à l'utilisateur de rentrer une note ou de taper "fin"
Chaque note est sauvegardée dans un tableau $notes ($notes[])
A la fin on affiche le tableau des notes sous forme de liste
*/
$notes = [];

$action = null;

//TANT QUE l'utilisateur ne tape pas "fin"
 while ($action !== "fin")
 {
   $action = readline ("Entrez une nouvelle note (ou 'fin' pour terminer la saisie) : ");

    if ($action !== "fin")
    {
      $notes[] = (int)$action;

  }
}

// OU 

/*  $notes = [];

while (true)
{
    $action = readline ("entrez une nouvelle note (ou 'fin' pour terminer la saisie) : ");

   if (strtolower($action) === "fin")
    {
      break;
 }
  else 
   {
       $notes[] = (int)$action;

  }
} */
    //On ajoute la note tapée au tableau $notes
// POUR CHAQUE note DANS notes
foreach($notes as $note)
{
    //ON AFFICHE "- $note"
    echo "- $note \n";
}
    


   
?>