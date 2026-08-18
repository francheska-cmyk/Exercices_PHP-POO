<?php
function getArticle($bdd){
    //1. Préparer une requête pour SELECT les utilisateurs
    $request = $bdd->prepare('SELECT title, pseudo FROM article INNER JOIN user ON user.id = article.user_id');
   //2.  Exécution
    $request->execute();

    return $request->fetchAll(PDO::FETCH_ASSOC);
}
