<html>
   <head>
    <title>Test</title>
   </head>

   <body>
      <p>un bout de code en HTML</p>
      <?php
      echo 'Mon premier script en PHP';

      $fruit = Array();
      $fruit[] = "fraise";
      $fruit[] = "banane";
      $fruit[] = "abricot";

      $fruit = Array();
      $fruit['le_meilleur'] = "fraise";
      $fruit['le_prefere_de_Julien'] = "banane";
      $fruit['mon_prefere'] = "abricot";
      
      $nom = "LA GLOBULE";
      echo 'Bonjour ';
      echo $nom;
      echo ' !';

      $date_du_jour = date ("d-m-Y");
      $heure_courante = date ("H:i");
      echo 'Nous sommes le : ';
      echo $date_du_jour;
      echo ' Et il est : ';
      echo $heure_courante;
      ?>
   </body>
</html>