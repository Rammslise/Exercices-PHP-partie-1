<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les variables, exercice 7</title>
</head>
<!-- Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans". -->
<body>
  <p>
    <?php
    $lastname = 'Pery';
    $firstname = 'Elise';
    $age = 29;
    echo 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
    ?>
  </p>
</body>
</html>
