<?php
SESSION_START();

?>

<div class="my-5 py-4" align="center">
  <h2>Connexion</h2>
  <form method="post">
    <input type="text" name="usernameConnect" placeholder="Votre identifiant"><br>
    <input type="email" name="emailConnect" placeholder="Votre email"><br>
    <input type="password" name="passwordConnect" placeholder="Mot de passe"><br><br>
    <input type="submit" name="login" value="Se connecter !">
  <p>
    <?php
    if (isset($message))
    {
      echo $message;
    } ?>
  </p>
</form>
<a href="../controller/login.php">Se connecter</a><br>
<a href="../controller/index.php">Retour à l'accueil</a>
</div>
