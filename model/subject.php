<?php

//Récupère l'ensemble des sujets (en BDD)
function getSubjects($bdd) {
  $request = $bdd->query('SELECT id, name FROM subject');
  $subjects = $request ->fetchall(PDO::FETCH_ASSOC);
  return $subjects;
}
