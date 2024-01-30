<!-- 1. Exercice sur les Variables :
Demandez à l'utilisateur son prénom et affichez un message de bienvenue en utilisant une variable. -->

<?php
    echo "Entrez votre prénom : ";

    $prenom = "Garance";

    echo "Bienvenue, $prenom !\n";
?>

<!-- 2. Exercice sur les Boucles :
Créez une boucle qui affiche les nombres de 1 à 10. -->

<?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "\n";
    }
?>

<!-- 3. Exercice sur les Tableaux :
Créez un tableau de noms de fruits et utilisez une boucle pour les afficher un par un. -->

<?php
    $fruits = array("Pomme", "Banane", "Orange", "Fraise", "Kiwi");

    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }
?>

<!-- 4. Exercice sur les Conditions :
Demandez à l'utilisateur son âge et affichez un message différent en fonction de s'il est mineur ou majeur. -->

<?php
    $age = 20;

    if ($age < 18) {
        echo "Vous êtes mineur.";
    } else {
        echo "Vous êtes majeur.";
    }
?>

<!-- 5. Exercice sur les Fonctions :
Créez une fonction qui prend deux paramètres (nombre et puissance) et renvoie le résultat de la puissance de ce nombre. -->

<?php
    function puissance($nombre, $puissance) {
        return pow($nombre, $puissance);
    }
?>

<!-- 6. Exercice sur les Manipulations de Chaînes de Caractères :
Demandez à l'utilisateur son nom complet et affichez-le en utilisant la première lettre de chaque mot en majuscule. -->

<?php
    $nomComplet = "Garance Vermorel";

    echo ucwords($nomComplet) . "\n";
?>

<!-- 7. Exercice sur les Tableaux Associatifs :
Créez un tableau associatif avec des informations sur une personne (nom, prénom, âge) et affichez ces informations. -->

<?php
    $personne = array(
        "nom" => "Vermorel",
        "prenom" => "Garance",
        "age" => 20
    );

    echo "Nom : " . $personne["nom"];
    echo ", prénom : " . $personne["prenom"];
    echo ", âge : " . $personne["age"] . " ans";
?>

<!-- 8. Exercice sur la Gestion des Dates :
Affichez la date du jour au format "jour mois année" (par ex "30 janvier 2024"). -->

<?php
    echo date("j F Y") . "\n";
?>
