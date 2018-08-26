<?php
SESSION_START();

require_once "../model/dataBase.php";
require_once "template/header.php";

if (isset($_GET['id']) AND $_GET['id'] > 0) {
  $getId = intval($_GET['id']);
  $reqUser = $bdd->prepare('SELECT *
    FROM member
    WHERE id = ?
    ');
  $reqUser->execute(array($getId));
  $userInfo = $reqUser->fetch();


?>

<div class="container my-5 py-5">
  <h2>Bienvenue sur votre page</h2>
  <h3>Vos informations : </h3>
  <p>Profil de <?php echo $userInfo['username']; ?>
    <br>
    Email : <?php echo $userInfo['email']; ?>
  </p>
</div>

<?php
}

require_once "template/footer.php";
?>
