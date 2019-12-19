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
                $update->execute([':titre' => htmlspecialchars($_POST['titre']), ':pseudo' => htmlspecialchars($_POST['pseudo']), ':contenu' => $_POST['contenu'],':id' => $id]);
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
        if (isset($_POST['btnPub'])) {
            if (!empty($_POST['titre']) && !empty($_POST['pseudo']) && !empty($_POST['contenu'])) {
                $conn = $this->connect();
                $stmt = $conn->prepare("SELECT titre FROM articles WHERE titre = :titre");
                $verify = $stmt->execute([':titre' => $_POST['titre']]);
                    if ($verify === true) {
                        $verifyT = $stmt->fetch();
                        if ($_POST['titre'] === $verifyT['titre']) {
                            echo'Titre deja utilisée';
                        } else {
                            $insert = $conn->prepare("INSERT INTO articles (titre, contenu, pseudo, la_date) VALUES (:titre, :contenu, :pseudo, Now())");
                            $insert->execute([':titre' => htmlspecialchars($_POST['titre']), ':contenu' => $_POST['contenu'], ':pseudo' => htmlspecialchars($_POST['pseudo'])]);
                            header("location:chapitres-admin");
                        }
                    }
            } else{
                echo 'remplier';
            }
        }   
    }
}