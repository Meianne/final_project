<?php
  if (isset($_POST['login'])) {
    $usernameConnect = htmlspecialchars($_POST['usernameConnect']);
    $emailConnect = htmlspecialchars($_POST['emailConnect']);
    $passwordConnect = sha1($_POST['passwordConnect']);

    if (!empty($usernameConnect) AND !empty($emailConnect) AND !empty($passwordConnect)) {
      $reqUser = $bdd->prepare("SELECT id, username, email, password
        FROM member
        WHERE username = ?
        AND email = ?
        AND password = ?");
      $reqUser->execute(array($usernameConnect, $emailConnect, $passwordConnect));
      $userExist = $reqUser->rowCount();

      if ($userExist == 1) {
        $userInfo = $reqUser->fetch();
        $_SESSION['id'] = $userInfo['id'];
        $_SESSION['username'] = $userInfo['username'];
        $_SESSION['email'] = $userInfo['email'];
        header("Location: ../view/profilView.php?id=" . $_SESSION['id']);
      }
      else {
        $message = "Mauvais identifiant ou mot de passe !";
      }

    }
    else {
      $message = "Tous les champs doivent être complétés !";
    }
  }
