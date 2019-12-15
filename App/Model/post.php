<?php namespace App\Model;



class Post extends DataBase{

    public function comPost($id_article){
        $db = $this->connect();
        $message;
        if (isset($_POST['envoyer'])) {
            if (!empty($_POST['pseudo']) AND !empty($_POST['comentaire'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $contenu = htmlspecialchars($_POST['comentaire']);
                $insert = $db->prepare("INSERT INTO comentaires (pseudo, contenu, la_date, id_article) VALUES (:pseudo, :contenu, Now(), :id_article)");
                $insert->execute([':pseudo'=>$pseudo, ':contenu'=>$contenu, ':id_article'=>$id_article]);
                $message = 'Votre comentaire a bien été posté';
            } else {
                $message = 'Veuillez remplir tous les champs';
            }
        }
    }
}