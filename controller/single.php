<?php
if(empty($_GET["id"]) || !$_GET["id"] > 0) {
  header('Location: index.php');
}

//Récupère les données dans l'URL
$id = $_GET['id'];
// var_dump($id);

//Connexion basse de donnée
require_once "../model/dataBase.php";
require_once "../model/vocabulary.php";
require_once "../model/subject.php";

$voca = vocabulary($bdd, $id);
// var_dump($voca);

require "../view/singleView.php";
