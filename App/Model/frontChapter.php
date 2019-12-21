<?php namespace App\Model;


class FrontChapter extends DataBase
{
    public function indexChapter()
    {
        $conn = $this->connect();
        $req = $conn->query("SELECT id,titre,pseudo,la_date,SUBSTRING(contenu,1,400) AS contenu FROM articles ORDER BY la_date ASC");
        return $req;
    }
    public function displayChapter($id)
    {
        $conn = $this->connect();
        $reqId = $conn->prepare("SELECT * FROM articles WHERE id= :id");
        $reqId->execute([':id' => $id]);
        return $reqId;
    }
    public function displayComments($id){
        $conn = $this->connect();
        $reqComs = $conn->prepare("SELECT * FROM comentaires WHERE id_article= :id_article ORDER BY la_date DESC");
        $reqComs->execute([':id_article' => $id]);
        return  $reqComs;
    }
    public function lastChapter()
    {
        $conn = $this->connect();
        $lastChapter = $conn->query("SELECT id,titre,pseudo,la_date,SUBSTRING(contenu,1,300) AS contenu FROM articles ORDER BY id DESC LIMIT 0,1");
        return $lastChapter;
    }
}