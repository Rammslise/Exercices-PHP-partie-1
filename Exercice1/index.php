<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les variables, exercice 1</title>
    </head>
    <!--Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.-->
    <body>
        <!--Une variable, est une petite information stockée en mémoire temporairement.
        Elle n'a pas une grande durée de vie. En PHP, la variable existe tant que la page est en cours de génération.
        Dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire car elles ne servent plus à rien.
        Ce n'est donc pas un fichier qui reste stocké sur le disque dur mais une petite information temporaire présente en mémoire vive.
        La variable a toujours un nom précédé de $(nom) = valeur -->
        <p>
            <?php
            $name = 'elise';
            echo "Bonjour $name";
            ?>
        </p>
    </body>
</html>
