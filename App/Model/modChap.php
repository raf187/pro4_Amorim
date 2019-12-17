<?php namespace App\Model;
use App\Controller\BackController;

class ModChap extends DataBase{
    
    public function getChapter($id){
        $db = $this->connect();
        $req = $db->prepare("SELECT * FROM articles WHERE id= :id");
        $req->execute([':id' => $id]);
        return $req;
    }

    public function updateChapter($id){
        $db = $this->connect();
        if (isset($_POST['btnModChap'])) {
            if (!empty($_POST['titre']) && !empty($_POST['pseudo']) && !empty($_POST['contenu'])) {
                $update = $db->prepare("UPDATE articles SET titre = :titre, pseudo = :pseudo, contenu = :contenu WHERE id = :id ");
                $update->execute([':titre' => $_POST['titre'], ':pseudo' => $_POST['pseudo'], ':contenu' => $_POST['contenu'],':id' => $id]);
                header('location:/pro4/chapitres-admin');
            } else {
                echo 'error';
            }
        }
    }

}