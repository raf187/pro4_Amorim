<?php
namespace App\Controller;
use App\Model\Comments;
use App\Model\FrontChapter;

class FrontController{

    public function home(){
        $conn = new FrontChapter();
        $lastChapter = $conn->lastChapter();
        require './view/frontend/home.php';

    }

    public function author(){
        require './view/frontend/author.php';

    }

    public function indexChapter(){
        $conn = new FrontChapter();
        $index = $conn->indexChapter();
        require './view/frontend/indexChapter.php';

    }

    public function contact(){
        require './view/frontend/contact.php';

    }

    public function displayChapter($id){
        $conn = new FrontChapter();
        $display = $conn->displayChapter($id);
        $coms = $conn->displayComments($id);
        require './view/frontend/displayChapter.php';
    }
    public function comments($id_article){
        $conn = new Comments();
        $insert = $conn->commentPost($id_article);
    }
    public function reportComment($id){
        $conn = new Comments();
        $report = $conn->reportComment($id);
    }
    


}
