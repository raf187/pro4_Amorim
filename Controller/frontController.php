<?php

//namespace Control;
require ('model/database.php');
require ('model/model.php');

class FrontController{

    public function index(){
        require './view/frontend/index.php';
        
    }

    public function author(){
        require './view/frontend/author.php';

    }

    public function chapter(){
        $dataBase = new Read();
        $sql = $dataBase->readChapter();
        require './view/frontend/chapter.php';

    }

    public function contact(){
        require './view/frontend/contact.php';
        
    }

}






