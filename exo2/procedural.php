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

function cardArticle($titre, $contenu, $auteur, $date){
    echo"<article>
            <h1>$titre</h1>
            <p>$contenu</p>
            <p>By $auteur </p>
            <p>$date</p>
        </article>";
}
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
        <?php
        cardArticle($titreArticle1, $contenuArticle1, $auteurArticle1, $dateArticle1);
         cardArticle($titreArticle2, $contenuArticle2, $auteurArticle2, $dateArticle2);
        ?>
  
    </main>
    <footer></footer>
</body>
</html>