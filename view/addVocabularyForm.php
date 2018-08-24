<?php
//Connexion à la base de données
require_once "../model/dataBase.php";
 ?>

<!-- Template loading -->
<?php
  // require "template/nav.php";
  require "template/header.php";
 ?>

 <!-- Main Content -->
 <main class="container my-5">
   <h2>Enregistrer du vocabulaire</h2>
   <form action="../model/addVocabularyPost.php" method="post">
     <p>Sujet :
       <input type="text" name="subject">
     </p>
     <p>Mot français :
       <input type="text" name="french">
     </p>
     <p>Kanji :
       <input type="text" name="kanji">
     </p>
     <p>Hiragana :
       <input type="text" name="hiragana">
     </p>
     <input type="submit" name="ajoutVocabulaire" value="Enregistrer">
   </form>
   <a href="../controller/index.php">Retour à l'accueil</a><br>
 </main>
 <!-- Footer loading -->
 <?php
   // require "template/footer.php";
  ?>
