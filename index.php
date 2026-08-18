<?php
//Déclaration de ma variable d'affichage
$listeUtilisateur = '';
$listeArticle =""; 

//AFFICHER LES UTILISATEURS : pseudo, email, role
//1. Connexion à la BDD avec l'objet PDO
$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=mvc','root','root',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//2. Préparer une requête pour SELECT les utilisateurs
$req = $bdd->prepare('SELECT pseudo, email, role FROM user INNER JOIN role ON role.id = user.role_id');

$req->execute();

$data = $req->fetchAll(PDO::FETCH_ASSOC);

//3. Traiter les données pour ensuite les afficher
foreach($data as $row){
    $listeUtilisateur .="<li>Pseudo :".$row['pseudo']." - Email : ".$row['email']." - Role :".$row['role']."</li>";
}
$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=mvc','root','root',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$request = $bdd->prepare('SELECT title, pseudo FROM article INNER JOIN user ON user.id = article.user_id');

$request->execute();

$data = $request->fetchAll(PDO::FETCH_ASSOC);

//3. Traiter les données pour ensuite les afficher
foreach($data as $article){
    $listeArticle .="<li>Titre : ".$article['title']." - Auteur : ".$article['pseudo']."</li>";
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
    <header>
        <nav>
            <a href="controllerUser.php">Utilisateurs</a>
            <a href="controllerArticle.php">Articles</a>
        </nav>
    </header>
    <main>
        <h1>Liste des utilisateurs</h1>
        <ul>
            <?php echo $listeUtilisateur ?>
        </ul>
        <h1>Liste des articles</h1>
        <ul>
            <?php echo $listeArticle?>
        </ul>
    </main>
    <footer></footer>
</body>
</html>