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
        $conn = $this->connect();
        if (isset($_POST['btnAddAdmin'])) {
            if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['email'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                $mail = htmlspecialchars($_POST['email']);
                $insert = $conn->prepare("INSERT INTO utilisateur (pseudo, mot_de_passe, email) VALUES (:pseudo, :mdp, :email)");
                $insert->execute([':pseudo'=>$pseudo, ':mdp'=>$mdp, ':email'=>$mail]);
                header("location:/pro4/gestion-admin");
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }
    }
    public function displayAdminUpdate($id)
    {
        $conn = $this->connect();
        $display = $conn->prepare("SELECT * FROM utilisateur WHERE id= :id");
        $display->execute([':id' => $id]);
        return $display;
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
    public function login()
    {
        if (isset($_POST['connect'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['mdp']);
            $conn = $this->connect();
            $stmt = $conn->prepare("SELECT id, pseudo, mot_de_passe FROM utilisateur WHERE pseudo = :pseudo");
            $stmt->execute([':pseudo' => $pseudo]);
            if ($stmt->rowCount() == 1) {
                $data = $stmt->fetch();
                if (password_verify($mdp, $data['mot_de_passe'])) {
                    $_SESSION['id'] = $data['id'];
                    if (!empty($_SESSION['id'])) {
                        header('location:/pro4/admin');
                    } else {
                        echo 'Pseudo ou mot de passe sont incorrect!';
                    }
                }
            }else {
                echo  'Entrez votre pseudo et mot de passe!';
            }
        }
    }
}