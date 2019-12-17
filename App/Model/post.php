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
                header("location:$id_article");
            } else {
                $message = 'Veuillez remplir tous les champs';
            }
        }
    }

    public function signalCom(){
        $db = $this->connect();
    }

    public function chapPost(){
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

    public function addAdmin(){
        $con = $this->connect();
        if (isset($_POST['btnAjouter'])) {
            if (!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['email'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mdp = htmlspecialchars($_POST['mdp']);
                $email = htmlspecialchars($_POST['email']);
                $insert = $con->prepare("INSERT INTO utilisateur (pseudo, mot_de_passe, email) VALUES (:pseudo, :mdp, :email)");
                $insert->execute([':pseudo'=>$pseudo, ':mdp'=>$mdp, ':email'=>$email]);
                header("location:ajouter-admin");
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }
    }
}