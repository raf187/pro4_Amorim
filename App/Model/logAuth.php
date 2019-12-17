<?php namespace App\Model;

class LogAuth extends DataBase{
    
    public $user;
    public $pass;
    public $message;


    public function userAuth(){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mot_de_passe = :mot_de_passe");
        return $query;
    }

    public function login(){

        if(isset($_POST['submit'])){
            $user = htmlspecialchars($_POST['pseudo']);
            $pass = htmlspecialchars($_POST['mdp']);
            
            if (!empty($user) AND !empty($pass)) {
                $sql = $this->userAuth();
                $sql->execute([':pseudo'=> $user, ':mot_de_passe'=> $pass]);

                if ($sql->rowCount() >= 1) {
                    $data = $sql->fetch();
                    $_SESSION['id'] = $data['id'];
                    if (!empty($_SESSION['id'])) {
                        header('location:admin');
                    }else {
                        echo('Vous etes pas connectée');
                    }
                }else{
                    echo 'Pseudo ou mot de passe sont incorrect!';
                    
                }
            }else {
                echo  'Entrez votre pseudo et mot de passe!';
            }
        }
    }


    public function logout(){

            
        }












    public function updateAdmin($id){
        $con = $this->connect();
        if (isset($_POST['modAdmin'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])) {
                $update = $con->prepare("UPDATE utilisateur SET pseudo = :pseudo, mot_de_passe = :mot_de_passe, email = :email WHERE id = :id ");
                $update->execute([':pseudo' => $_POST['pseudo'], ':mot_de_passe' => $_POST['mdp'], ':email' => $_POST['email'],':id' => $id]);
                header('location:/pro4/ajouter-admin');
            } else {
                echo 'error';
            }
        }
    }

    public function getAdminUpdate($id){
        $db = $this->connect();
        $req = $db->prepare("SELECT * FROM utilisateur WHERE id= :id");
        $req->execute([':id' => $id]);
        return $req;
    }

    public function addAdmin(){
        $con = $this->connect();
        if (isset($_POST['btnAddAdmin'])) {
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





    // public $message;


    // public function login(){
    //     $user = $_POST['pseudo'];
    //     $pass = $_POST['mdp'];
    //     $db = $this->connect();
    //     $result = $db->query("SELECT * FROM utilisateur WHERE pseudo ='". $user ."' AND mot_de_passe ='". $pass ."'");

    //     $count = count($result);

    //     if ($count > 0) {
            
    //     }
    //     if ($_SESSION['pseudo']) {
    //         header('location:admin.php');
    //     }

    // }
    
    // public function logout(){
    //     session_start();
    //     session_destroy();
    //     header('Location:login.php');
    // }

}