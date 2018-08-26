<?php
require_once "../model/dataBase.php";
require_once "../model/vocabulary.php";

//Récupère les données dans l'URL
if(isset($_GET['id']))
{
  // id dans l'url
  $id = $_GET['id'];
}

$vocabulary = getAllVocabulary($bdd);
// var_dump($vocabulary);

require_once "../view/template/header.php";

require_once "../view/indexView.php";

require_once "../view/template/footer.php";
