<?php
require_once "template/header.php";
?>

<div class="projects row align-items-center my-5 mx-0 py-1">
  <div class="container text-center">
    <p><?php echo $voca['french']; ?></p>
    <p><?php echo $voca['kanji']; ?></p>
    <p><?php echo "『" . $voca['hiragana'] . "』"; ?></p>
    <a href="../controller/index.php">Retour à l'accueil</a><br>
    <a href="../view/addVocabularyForm.php">Ajouter du vocabulaire</a>
  </div>
</div>


<?php
require_once "template/footer.php";
?>
