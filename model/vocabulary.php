<?php
//Récupère l'ensemble du vocabulaire (en BDD)
function getAllVocabulary($bdd) {
  $request = $bdd->query('SELECT *
    FROM vocabulary');
  $allVoca = $request ->fetchall(PDO::FETCH_ASSOC);
  return $allVoca;
}

function vocabulary($bdd, $id) {
  $request = $bdd->prepare("SELECT sub.id, sub.name, voca.id_subject, voca.french,
    voca.kanji, voca.hiragana
    FROM vocabulary AS voca
    INNER JOIN subject AS sub
    ON voca.id_subject = sub.id
    WHERE voca.id = ?
    ");
  $request->execute([$id]);
  $vocabulary = $request->fetch(PDO::FETCH_ASSOC);
  return $vocabulary;
}
