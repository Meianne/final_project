<?php
require "../model/dataBase.php";
require "../model/vocabulary.php";

//Récupère les données dans l'URL
if(isset($_GET['id']))
{
  // id dans l'url
  $id = $_GET['id'];
}

$vocabulary = getAllVocabulary($bdd);
// var_dump($vocabulary);

require "../view/indexView.php";
