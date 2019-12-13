<?php namespace App\Model;

class LogAuth extends DataBase{

    public $db;
    public $user;
    public $pass;



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
                    echo('salut');
                }else{
                    echo('Pseudo ou mot de passe sont incorrect!');
                    
                }
            }else {
                echo 'Entrez votre pseudo et mot de passe!';
            }
        }
    }


    public function logout(){

            
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