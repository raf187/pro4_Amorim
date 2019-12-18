<?php namespace App\Model;

class ManageAdmin extends DataBase
{
    public function displayAdmin()
    {
        $conn = $this->connect();
        $display = $conn->query("SELECT * FROM utilisateur");
        return $display;
    }
    public function createAdmin()
    {
        $con = $this->connect();
        if (isset($_POST['btnAddAdmin'])) {
            if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['email'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mdp = htmlspecialchars($_POST['mdp']);
                $email = htmlspecialchars($_POST['email']);
                $insert = $con->prepare("INSERT INTO utilisateur (pseudo, mot_de_passe, email) VALUES (:pseudo, :mdp, :email)");
                $insert->execute([':pseudo'=>$pseudo, ':mdp'=>$mdp, ':email'=>$email]);
                header("location:/pro4/gestion-admin");
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }
    }
    public function displayAdminUpdate($id)
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT * FROM utilisateur WHERE id= :id");
        $req->execute([':id' => $id]);
        return $req;
    }
    public function updateAdmin($id){
        $conn = $this->connect();
        if (isset($_POST['modAdmin'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])) {
                $update = $conn->prepare("UPDATE utilisateur SET pseudo = :pseudo, mot_de_passe = :mot_de_passe, email = :email WHERE id = :id ");
                $update->execute([':pseudo' => $_POST['pseudo'], ':mot_de_passe' => $_POST['mdp'], ':email' => $_POST['email'],':id' => $id]);
                header('location:/pro4/gestion-admin');
            } else {
                echo 'error';
            }
        }
    }
    public function deleteAdmin($id)
    {
        $conn = $this->connect();
        $delete = $conn->prepare("DELETE FROM utilisateur WHERE id = :id");
        $delete->execute([':id' => $id]);
        header('location:/pro4/gestion-admin');
    }
    private function adminCheck()
    {
        $conn = $this->connect();
        $adminCheck = $conn->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mot_de_passe = :mot_de_passe");
        return $adminCheck;
    }
    public function login()
    {
        if (isset($_POST['submit'])) {
            $user = htmlspecialchars($_POST['pseudo']);
            $pass = htmlspecialchars($_POST['mdp']);
            if (!empty($user) and !empty($pass)) {
                $adminCheck = $this->adminCheck();
                $adminCheck->execute([':pseudo'=> $user, ':mot_de_passe'=> $pass]);
                if ($adminCheck->rowCount() >= 1) {
                    $data = $adminCheck->fetch();
                    $_SESSION['id'] = $data['id'];
                    if (!empty($_SESSION['id'])) {
                        header('location:admin');
                    } else {
                        echo 'Pseudo ou mot de passe sont incorrect!';
                    }
                } else {
                    echo  'Entrez votre pseudo et mot de passe!';
                }
            }
        }
    }
}