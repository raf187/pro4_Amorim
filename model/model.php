<?php


class Read extends DataBase{

    public function readChapter(){
        $db = $this->connect();
        $req = $db->query("SELECT titre,pseudo,la_date,SUBSTRING(contenu,1,500) AS contenu FROM articles");
        return $req;
    }




    // public $connection;

    // public function __construct(){
    //     try { 
    //         $this->connection = new PDO('mysql:host=localhost;dbname=Forteroche;charset=utf8', 'root', 'root');
    //     } 
    //     catch (Exception $e) {
    //         die('Erreur : '.$e->getMessage());
    //     }      
    // }
//
    // public function readChapter(){
    //     $data = [];
    //     $sql = "SELECT * FROM articles";
    //     $statement = $this->connection->prepare($sql);
    //     $statement->execute();
    //     $result = $statement->fetch();
    //     foreach ($result as $row) {
    //         $data[] = $row;
    //     }
    //     return $data;
    // }

//create a new chapter on backend only for admins
    // public function postChapter($title, $content, $user, $dateT){
    //     $sql = "INSERT INTO articles (titre,contenu,pseudo,la_date) VALUES (:title,:content,:user,:dateT)";
    //     $stmt = $this->connection->prepare($sql);
    //     $stmt->execute([
    //         'title'=>$title,
    //         'content'=>$content,
    //         'user'=>$user,
    //         'dateT'=>$dateT
    //     ]);
    //     return true;
//     }
// //insert comentary to the chapter
//     public function postComment($user, $content, $dateT){
//         $sql = "INSERT INTO comentaires (pseudo,contenu,la_date) VALUES (:user,:content,:dateT)";
//         $stmt = $this->connection->prepare($sql);
//         $stmt->execute([
//             'user'=>$user,
//             'content'=>$content,
//             'dateT'=>$dateT
//         ]);
//         return true;
//     }
//add user to backend access
    // public function newUser($user, $passW, $email){
    //     $sql = "INSERT INTO utilisateur (pseudo,mot_de_passe,email) VALUES (:user,:passW,:email)";
    //     $stmt = $this->connection->prepare($sql);
    //     $stmt->execute([
    //         'user'=>$user,
    //         'passW'=>$passW,
    //         'email'=>$email
    //     ]);
    //     return true;
    //}


}