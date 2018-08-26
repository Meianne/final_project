<div class="my-4" align="center">
  <h2>Inscription</h2>
  <form method="post">
    <table>
      <tr>
        <td>
          <label for="username">Identifiant : </label>
        </td>
        <td>
          <input type="text" placeholder="Votre identifiant" id="username" name="username" value="<?php if (isset($username)) { echo $username; } ?>" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="email">Email : </label>
        </td>
        <td>
          <input type="email" placeholder="Votre email" id="email" name="email" value="<?php if (isset($email)) { echo $email; } ?>" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="password">Mot de passe : </label>
        </td>
        <td>
          <input type="password" placeholder="Entrez un mot de passe" id="password" name="password" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="password2">Confirmation du mot passe : </label>
        </td>
        <td>
          <input type="password" placeholder="Confirmez mot de passe" id="password2" name="password2" required>
        </td>
      </tr>
    </table>
    <br>
    <input type="submit" name="subscription" value="Valider mon inscription">
  </form>
  <p>
    <?php
    if (isset($message))
    {
      echo $message;
    } ?>
  </p>
  <a href="../controller/login.php">Se connecter</a><br>
  <a href="../controller/index.php">Retour à l'accueil</a>
</div>
