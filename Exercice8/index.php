<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Les variables, exercice 8</title>
</head>
<!-- Créer 3 variables.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 5 * 20.
Dans la troisième mettre le résultat de l'opération 45 / 5.
Afficher le contenu des variables. -->
<body>
  <!-- 3 balises <p> pour que les opérations soient séparées-->
  <p>
    <?php
    $addition = 3 + 4;
    echo '3 + 4 = '.$addition;
    ?>
  </p>
  <p>
    <?php
    $multiplication = 5 * 20;
    echo '5 * 20 = '.$multiplication;
    ?>
  </p>
  <?php
  $division = 45 / 5;
  echo '45 / 5 = '.$division;
  ?>
</p>
</body>
</html>
