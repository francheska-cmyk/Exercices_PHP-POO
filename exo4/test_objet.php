<?php
//IMPORT DES RESSOURCES
include('vehicule.php'); 

$voiture = new Vehicule ("Mercedes CLK", 4, 250);
$moto = new Vehicule ("Honda CBR", 2, 280);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices véhicules</title>
</head>
<body>
    <?php
        //utilisation méthode detecter pour déterminer type de véhicule
        $voiture->detect();
        $moto->detect();

        $voiture->boost();
        $moto->boost();

        
    ?>
</body>
</html>