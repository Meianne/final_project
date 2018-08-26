<?php
  if (isset($_POST['Valider'])) {
  // Le chat
  //Si la variable $_POST['chat'] chat existe
  if (isset($_POST['chat'])) {
    //On securise les variables
    $chat = htmlentities($_POST['chat']);
    //On assigne la valeur 0 a $note
    if(!isset($note)) $note = 0;

    //Si la variable chat est bien chat
    if ($chat == 'chat')
     {
       //On lui ajoute 20
       $note = $note+20;
       //On lui dit que sa reponse est correct
       echo 'Correct';
     }
     else //Sinon
     {
      //On lui dit non
      echo 'Faux';
     }
  }

  // L'oiseau
  if (isset($_POST['oiseau'])) {
   $oiseau = htmlentities($_POST['oiseau']);
   $note=0;

   if ($oiseau == 'oiseau')
    {
      $note = $note+20;
      echo 'Correct';
    }
    else
    {
     echo 'Faux';
    }
  }

  // La fleur
  if (isset($_POST['fleur'])) {
   $fleur = htmlentities($_POST['fleur']);
   $note = 0;

   if ($fleur == 'fleur')
    {
      $note = $note+20;
      echo 'correct';
    }
    else
    {
     echo 'Faux';
    }
  }

  // La maison
  if (isset($_POST['maison'])) {
   $maison = htmlentities($_POST['maison']);
   $note = 0;
   if ($maison == 'maison')
    {
      $note = $note+20;
      echo 'correct';
    }
    else
    {
     echo 'Faux';
    }
  }

  // Les légumes
  if (isset($_POST['legumes'])) {
   $legumes = htmlentities($_POST['legumes']);
   $note = 0;
   if ($legumes == 'legumes')
    {
      $note = $note+20;
      echo 'correct';
    }
    else
    {
     echo 'Faux';
    }
  }


  switch ($note) { // on indique sur quelle variable on travaille

  case 0: // dans le cas où $note vaut 0
  echo "0/20";
  echo "<br />";
  echo "Vous n'avez pas travaillé !!!";
  break;

  case 100:// dans le cas où $note vaut 100
  echo "20/20";
  echo "<br />";
  echo "Excellent travail, c'est parfait !";
  break;

  //sinon
  default:
  echo "Il faudra travailler d'avantage.";
  }
  }
