<main class="container my-5">
 <h2>Enregistrer du vocabulaire</h2>
 <form action="../model/addVocabulary.php" method="post">
   <p><label for="subject">Sujet : </label><input type="text" name="subject">
   </p>
   <p><label for="french">Mot en français : </label><input type="text" name="french">
   </p>
   <p><label for="kanji">Kanji :</label><input type="text" name="kanji">
   </p>
   <p><label for="hiragana">Hiragana :</label><input type="text" name="hiragana">
   </p>
   <input type="submit" name="ajoutVocabulaire" value="Enregistrer">
 </form>
 <a href="../controller/index.php">Retour à l'accueil</a><br>
</main>
