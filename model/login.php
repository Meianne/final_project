<?php
if (isset($_POST['connexion'])) {
  $usernameconnect = htmlspecialchars($_POST['username']);
  $emailconnect = htmlspecialchars($_POST['email']);
  $passwordconnect = sha1($_POST['password']);
  if (!empty($usernameconnect) AND !empty($emailconnect) AND !empty($passwordconnect)) {
    $requser = $bdd->prepare("SELECT * FROM member WHERE username = ? AND email = ? AND password = ?");
    $requser->prepare(array($usernameconnect, $emailconnect, $passwordconnect));
    $userExist = $requser->rowCount();
    if ($userExist == 1) {
      // code...
    }
    else {
      $message = "Identifiant ou email incorrect !";
    }
  }
  else {
    $message = "Tous les champs doivent être complétés !";
  }
}
