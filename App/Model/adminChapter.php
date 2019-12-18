<?php namespace App\Model;

class AdminChapter extends DataBase{
    
    public function displayChapter($id){
        $conn = $this->connect();
        $req = $conn->prepare("SELECT * FROM articles WHERE id = :id");
        $req->execute([':id'=>$id]);
        return $req;
    }

    public function updateChapter($id){
        $conn = $this->connect();
        if (isset($_POST['btnModChap'])) {
            if (!empty($_POST['titre']) && !empty($_POST['pseudo']) && !empty($_POST['contenu'])) {
                $update = $conn->prepare("UPDATE articles SET titre = :titre, pseudo = :pseudo, contenu = :contenu WHERE id = :id ");
                $update->execute([':titre' => $_POST['titre'], ':pseudo' => $_POST['pseudo'], ':contenu' => $_POST['contenu'],':id' => $id]);
                header('location:/pro4/chapitres-admin');
            } else {
                echo 'error';
            }
        }
    }

    public function deleteChapter($id){
        $conn = $this->connect();
        $comm = $conn -> prepare("DELETE FROM comentaires WHERE id_article = :id");
        $comm->execute([':id' => $id]);
        $delete = $conn->prepare("DELETE FROM articles WHERE id = :id");
        $delete->execute([':id' => $id]);
        header('location:/pro4/chapitres-admin');
    }
    public function createChapter(){
        $db = $this->connect();
        if (isset($_POST['btnPub'])) {
            if (!empty($_POST['titre']) AND !empty($_POST['pseudo']) AND !empty($_POST['contenu'])) {
                $titre = htmlspecialchars($_POST['titre']);
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $contenu = htmlspecialchars($_POST['contenu']);
                $insert = $db->prepare("INSERT INTO articles (titre, contenu, pseudo, la_date) VALUES (:titre, :contenu, :pseudo, Now())");
                $insert->execute([':titre'=>$titre, ':contenu'=>$contenu, ':pseudo'=>$pseudo]);
                header("location:chapitres-admin");
            } else{
                echo 'remplier';
            }
        }
    }
}