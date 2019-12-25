<?php namespace App\Model;

class AdminComments extends DataBase{
    
    public function displayComments(){
        $conn = $this->connect();
        $display = $conn->query("SELECT * FROM comentaires WHERE signale = 1 ORDER BY id_article");
        return $display;
    }
    public function validateComment($id){
        $conn = $this->connect();
        $report = $conn->prepare("UPDATE comentaires SET signale = :false WHERE id = :id");
        $report->execute([':false' => 0, ':id' => $id]);
        header('location:/forteroche/commentaires-admin');
        $_SESSION['message'] = "Commentaire validé.";
        $_SESSION['msgtype'] = "success";
    }
    public function deleteComment($id){
        $conn = $this->connect();
        $delete = $conn->prepare("DELETE FROM comentaires WHERE id = :id");
        $delete->execute([':id' => $id]);
        header('location:/forteroche/commentaires-admin');
        $_SESSION['message'] = "Commentaire supprimé.";
        $_SESSION['msgtype'] = "danger";
    }

}