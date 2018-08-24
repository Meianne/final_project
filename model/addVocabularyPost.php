<?php
//Connexion à la base de données
require_once "dataBase.php";

//Requete en base de données
$request = $bdd->prepare("INSERT INTO vocabulary(subject, french, kanji, hiragana)
VALUES(:subject, :french, :kanji, :hiragana)");
$request->execute([
  "subject" => $_POST["subject"],
  "french" => $_POST["french"],
  "kanji" => $_POST["kanji"],
  "hiragana" => $_POST["hiragana"]
]);
//Redirige l'utilisateur*
header("Location: ../view/index.php");

 ?>
