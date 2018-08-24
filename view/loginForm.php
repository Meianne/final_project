<div class="my-5" align="center">
  <h2>Connexion</h2>
  <form class="" action="" method="post">
    <table>
      <tr>
        <td>
          <label for="username">Identifiant : </label>
        </td>
        <td>
          <input type="text" placeholder="Votre identifiant" id="username" name="usernameconnect" value="<?php if (isset($pseudo)) { echo $pseudo; } ?>" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="email">Email : </label>
        </td>
        <td>
          <input type="email" placeholder="Votre email" id="email" name="emailconnect" value="<?php if (isset($email)) { echo $email; } ?>" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="password">Mot de passe : </label>
        </td>
        <td>
          <input type="password" placeholder="Entrez un mot de passe" id="password" name="passwordconnect" required>
        </td>
      </tr>
    </table>
    <br>
    <input type="submit" name="connexion" value="Connexion">
  </form>
  <p>
    <?php
    if (isset($message))
    {
      echo $message;
    } ?>
  </p>
  <a href="../controller/index.php">Retour à l'accueil</a>
</div>
