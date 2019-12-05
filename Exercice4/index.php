<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les variables, exercice 4</title>
</head>
<!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan.
     Les initialiser avec une valeur de votre choix et les afficher.-->
<body>
  <p>
    <?php
    //variable string (chaîne de caractères), permet de stocker du texte
    $typeString = 'Je m\'appelle Elise';
    //variable int (nbre entier)
    $typeInt = 29;
    //variable float (nbre décimaux)
    $typeFloat = 1.72;
    //variable bool (booléen), si une variable vaut vrai ou faux, le bool true = 1 et le false n'affiche rien
    $typeBoolT = true;
    $typeBoolF = false;
    echo $typeString.', j\'ai '.$typeInt.' ans et je mesure '.$typeFloat.' cm. '.$typeBoolT.' '.$typeBoolF;
    ?>
  </p>
</body>
</html>
