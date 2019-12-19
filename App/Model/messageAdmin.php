<?php namespace App\Model;

class MessageAdmin extends DataBase{

    public function displayMessage(){
        $conn = $this->connect();
        $display = $conn->query("SELECT * FROM messages");
        return $display;
    }
    public function deleteMessage($id){
        $conn = $this->connect();
        $delete = $conn->prepare("DELETE FROM messages WHERE id = :id");
        $delete->execute([':id' => $id]);
        header('location:/pro4/message-admin');
    }
    public function postMessage(){
        $conn = $this->connect();
        if (isset($_POST['btnSend'])) {
            $nom = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $objet = htmlspecialchars($_POST['objMsg']);
            $contenu = htmlspecialchars($_POST['message']);
            if (!empty($nom) && !empty($email) && !empty($objet) && !empty($contenu)) {
                $insert = $conn->prepare("INSERT INTO messages (nom, email, objet, contenu, la_date) VALUES (:nom, :email, :objet, :contenu, Now())");
                $insert->execute([':nom' => $nom, ':email' => $email, ':objet' => $objet, ':contenu' => $contenu]);
                header('location:/pro4/contact');
            } else{
                echo 'remplier';
            }
        }
    }

}