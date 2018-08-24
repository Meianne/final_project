<?php
  if (isset($_POST['validation'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);

    $pseudolength = strlen($username);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $reqname = $bdd->prepare("SELECT * FROM member WHERE username =?");
    $reqname->execute(array($username));
    $nameExist = $reqname->rowCount();
      if ($nameExist ==0) {
        $reqmail = $bdd->prepare("SELECT * FROM member WHERE email =?");
        $reqmail->execute(array($email));
        $mailExist = $reqmail->rowCount();
          if ($mailExist ==0) {
            if ($password == $password2) {
              $insertmbr = $bdd->prepare("INSERT INTO member(username, email, password)
              VALUES (?, ?, ?)");
              $insertmbr->execute(array($username, $email, $password));
              $message = "Votre compte a bien été créé !";
            }
            else {
              $message = "Les mots de passe ne correspondent pas !";
            }
          }
        else {
          $message = "L'adresse email existe déjà !";
        }
      }
      else {
        $message = "L'identifiant existe déjà !";
      }
    }
  }
