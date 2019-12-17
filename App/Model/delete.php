<?php namespace App\Model;

class Delete extends DataBase{

    public function delete(){
        $db = $this->connect();
        // $id = $_GET['id'];
        if (isset($_POST['btnSup'])) {
            $delete = $db->prepare("DELETE FROM articles WHERE id = id");
            if($delete->execute()){
                header('location:chapitres-admin');
            }
        }
    }


}