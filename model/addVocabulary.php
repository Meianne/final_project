<?php
require_once "../model/dataBase.php";

if (isset($_POST['ajoutVocabulaire'])) {
  //Requete en base de données
  $requete = $bdd->prepare("INSERT INTO vocabulary(subject, french, kanji, hiragana)
  VALUES(:subject, :french, :kanji, :hiragana)");
  $requete->execute([
    "subject" => $_POST["subject"],
    "french" => $_POST["french"],
    "kanji" => $_POST["kanji"],
    "hiragana" => $_POST["hiragana"]
  ]);
  //Redirige l'utilisateur*
  header("Location: ../controller/index.php");
}
