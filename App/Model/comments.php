<?php namespace App\Model;
use App\Model\FrontChapter;

class Comments extends DataBase{

    public function commentPost($id_article){
        $conn = $this->connect();
        $message;
        if (isset($_POST['envoyer'])) {
            if (!empty($_POST['pseudo']) AND !empty($_POST['comentaire'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $contenu = htmlspecialchars($_POST['comentaire']);
                $insert = $conn->prepare("INSERT INTO comentaires (pseudo, contenu, la_date, id_article) VALUES (:pseudo, :contenu, Now(), :id_article)");
                $insert->execute([':pseudo'=>$pseudo, ':contenu'=>$contenu, ':id_article'=>$id_article]);
                $message = 'Votre comentaire a bien été posté';
                header('location:' . $id_article);
            } else {
                $message = 'Veuillez remplir tous les champs';
            }
        }
    }
    public function reportComment($id){
        $conn = $this->connect();
        $report = $conn->prepare("UPDATE comentaires SET signale = :true WHERE id = :id");
        $report->execute([':true' => 1, ':id' => $id]);
    }

}