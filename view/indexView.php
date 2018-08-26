<div class="row align-items-center my-3 mx-0">
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
