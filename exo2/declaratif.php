<?php
//Déclaratif 

//Création des variables

$titreArticle1 = "Titre 1"; 
$contenuArticle1 ="Je suis le contenu de l'article 1"; 
$dateArticle1 = "2026-08-10"; 
$auteurArticle1 ="Francheska"; 

$titreArticle2 = "Titre 2"; 
$contenuArticle2 ="Je suis le contenu du deuxième l'article 1"; 
$dateArticle2 = "2026-08-19"; 
$auteurArticle2 ="Hawo"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <article>
        <h1><?php echo "$titreArticle1"?></h1>
        <p><?php echo "$contenuArticle1"?></p>
        <p>By <?php echo "$auteurArticle1"?></p>
        <p><?php echo "$dateArticle1"?></p>
    </article>
    <article>
        <h1><?php echo "$titreArticle2"?></h1>
        <p><?php echo "$contenuArticle2"?></p>
        <p>By <?php echo "$auteurArticle2"?></p>
        <p><?php echo "$dateArticle2"?></p>
    </article>

    </main>
    <footer></footer>
</body>
</html>