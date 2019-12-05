<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Les variables, exercice 2</title>
</head>
<!-- Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
     Attention age est de type entier. Afficher leur contenu.-->
<body>
  <!-- la balise <p> permet d'éviter que le texte soit dans le <body> lors du contrôle de la page-->
  <p>
    <?php
    //simple côte, l'ordi sait que c'est une chaîne sans variable.
    $lastname = 'Pery';
    $firstname = 'Elise';
    //âge est un type int (nombre entier), il suffit tout simplement d'écrire le nombre que vous voulez stocker, sans guillemets.
    $age = 29;
    //le \ permet de prendre en compte ' plutôt que de la considérer comme la fin de la chaîne.
    //toujours mettre un . pour concaténer la variable avec autre chose.
    echo 'Le visiteur s\'appelle '.$lastname.' '.$firstname.', elle a '.$age.' ans.';
    ?>
  </p>
</body>
</html>
