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
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $mail = htmlspecialchars($_POST['email']);
            if (!empty($pseudo) and !empty($mdp) and !empty($mail)) {
                $verify = $conn->prepare("SELECT pseudo, email FROM utilisateur WHERE pseudo = :pseudo OR email = :email");
                $verify->execute([':pseudo' => $pseudo, ':email' => $mail]);
                if ($verify->rowCount() === 1) {
                    $_SESSION['message'] = "Votre pseudo ou email et déjà utilisé.<br>Veuillez consulter la liste des admins pour ne pas rajouter de doublons";
                    $_SESSION['msgtype'] = "danger";
                    header('location:/pro4/gestion-admin');
                }else{
                    $insert = $conn->prepare("INSERT INTO utilisateur (pseudo, mot_de_passe, email) VALUES (:pseudo, :mdp, :email)");
                    $insert->execute([':pseudo'=>$pseudo, ':mdp'=>$mdp, ':email'=>$mail]);
                    $_SESSION['message'] = "Administrateur ajouté.";
                    $_SESSION['msgtype'] = "success";
                    header('location:/pro4/gestion-admin');
                }
            } else {
                $_SESSION['message'] = "Une erreur s'est produite.";
                $_SESSION['msgtype'] = "danger";
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
            if (!empty($_POST['pseudo']) && !empty($_POST['email'])) {
                $update = $conn->prepare("UPDATE utilisateur SET pseudo = :pseudo, mot_de_passe = :mot_de_passe, email = :email WHERE id = :id ");
                $update->execute([':pseudo' => $_POST['pseudo'], ':mot_de_passe' => $_POST['mdp'], ':email' => $_POST['email'],':id' => $id]);
                header('location:/pro4/gestion-admin');
                $_SESSION['message'] = "Administrateur mis à jour.";
                $_SESSION['msgtype'] = "success";
            } else {
                $_SESSION['message'] = "Une erreur s'est produite.";
                $_SESSION['msgtype'] = "danger";
            }
        }
    }
    public function deleteAdmin($id)
    {
        $conn = $this->connect();
        $delete = $conn->prepare("DELETE FROM utilisateur WHERE id = :id");
        $delete->execute([':id' => $id]);
        header('location:/pro4/gestion-admin');
        $_SESSION['message'] = "Administrateur supprimé.";
        $_SESSION['msgtype'] = "danger";
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
                    }
                }
            }else {
                $_SESSION['message'] = "Données invalides!";
                $_SESSION['msgtype'] = "danger";
            }
        }
    }
}