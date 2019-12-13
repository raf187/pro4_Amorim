<?php
namespace App\Controller;
use App\Model\Read;

class FrontController{

    public function index(){
        require './view/frontend/index.php';

    }

    public function author(){
        require './view/frontend/author.php';

    }

    public function chapter(){
        $bdd = new Read();
        $sql = $bdd->chapterIndex();
        require './view/frontend/chapter.php';

    }

    public function contact(){
        require './view/frontend/contact.php';

    }

    public function chapterRead($id){
        $bdd = new Read();
        $sql = $bdd->readChapter($id);
        require './view/frontend/chapterRead.php';

    }
}