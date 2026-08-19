<?php
//import des ressources
include ('maison.php'); 
//Création d'un objet maMaison grâce à l'instruction new (appel le constructeur)
$maMaison = new Maison("PurpleHouse","15","30","3");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction de maison</title>
</head>
<body>
    <?php
        //utilisation de la méthode de nos objets
        $maMaison->surface();
    ?>
</body>
</html>