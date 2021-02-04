<!DOCTYPE html>
<html lang=”fr”>
  <head>
    <meta charset="utf-8">
    <title>Utilisation de php pour vérifier une entrée :</title>
  </head>
  <body>
    <form method="post">
      <input name="mot" type="password">
      <input type="submit">
    </form>
    <?php
      if (isset($_POST['mot'])) {
        $bonMot = "exemple";
        // On hashe celui-ci, si nécessaire on le stocke ainsi. 
        $hash = password_hash($bonMot, PASSWORD_DEFAULT);
        // On teste une entrée par rapport au hash qui est enregistré (le hash est irréversible et caractéristique d'une seule chaîne).
        if (password_verify($_POST['mot'], $hash))
        {
          echo "L'entrée est le mot saisi auparavant";
        } else {
          echo "L'entrée est différente du mot saisi auparavant";
        }
      }
    ?>
    
  </body>
</html>
