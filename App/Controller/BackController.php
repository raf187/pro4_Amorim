<?php
namespace App\Controller;
use App\Model\LogAuth;
use App\Model\Read;

class BackController{

    public function log(){
        session_start();
        $log = new LogAuth();
        $log->login();
        require './view/backend/login.php';
    }

    public function index(){
        $log = new LogAuth();
        $log->login();
        require './view/backend/admin.php';
    }

    public function chapterAdmin(){
        $bdd = new Read();
        $sql = $bdd->chapterIndex();
        require './view/backend/chapterAdmin.php';
    }

    public function comAdmin(){

        require './view/backend/comAdmin.php';
    }

    public function addAdmin(){
        $bdd = new Read();
        $sql = $bdd->getAdmin();
        require './view/backend/authAdmin.php';
    }
}