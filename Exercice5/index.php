<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les variables, exercice 5</title>
</head>
<!--Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
    Donner une valeur à cette variable et l'afficher. -->
<body>
  <p>
    <?php
    //variable vide dite NULL,ne contient rien à l'affichage
    $typeInt = null;
    echo 'J\'ai'.$typeInt.' ans.';
    ?>
  </p>
  <p>
    <?php
    //on remplace NULL par une valeur
    $typeInt = 29;
    echo 'J\'ai '.$typeInt.' ans.';
    ?>
  </p>
</body>
</html>
