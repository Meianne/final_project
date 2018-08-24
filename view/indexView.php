<?php
require_once "template/header.php";
?>
<a href="../controller/subscription.php">S'inscrire</a>
<a href="../controller/login.php">Se connecter</a>

<div class="projects row align-items-center my-3 mx-0">
  <div class="container justify-content-around d-flex flex-wrap text-center py-3">
    <?php
      foreach ($vocabulary as $vocabulary) {
        echo '<article class="card card-body" style="width: 18rem;">
        <h2>' . $vocabulary["french"] ."</h2>
        <a href='single.php?id=" . $vocabulary['id'] . "'>Voir le vocabulaire</a></article>";
      }
    ?>
  </div>
</div>

<?php
require_once "template/footer.php";
?>
