<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les variables, exercice 3</title>
</head>
<!-- Créer une variable km. L'initialiser à 1. Afficher son contenu.
     Changer sa valeur par 3. Afficher son contenu.
     Changer sa valeur par 125. Afficher son contenu. -->
<body>
  <p>
    <?php
    // on découpe en 3 les valeurs que nous souhaitons attribuer et afficher, en insérant 3 balises <php> entourées par <p>.
    $km = 1;
    echo 'Vous avez marché '.$km.' km.';
    ?>
  </p>
  <p>
    <?php
    $km = 3;
    echo 'Vous avez courru '.$km.' kms.';
    ?>
  </p>
  <p>
    <?php
    $km = 125;
    echo 'Vous avez roulé '.$km.' kms.';
    ?>
  </p>
</body>
</html>
