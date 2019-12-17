<?php
namespace App\Controller;
use App\Model\LogAuth;
use App\Model\Read;
use App\Model\Modchap;
use App\Model\ModComs;
use App\Model\Post;
use App\Model\Delete;

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

    public function addChap(){

        require './view/backend/addChap.php';
    }
    public function chapterAdmin(){
        $bdd = new Read();
        $sql = $bdd->chapterIndex();
        require './view/backend/chapterAdmin.php';
    }
    public function chapterDelete(){
        $sup = new Delete;
        $delete = $sup->delete();
    }

    public function comAdmin(){

        require './view/backend/comAdmin.php';
    }

    public function addAdmin(){
        $bdd = new Read();
        $sql = $bdd->getAdmin();
        require './view/backend/authAdmin.php';
    }

    public function modifyChapter($id){
        $modChap = new ModChap();
        $sql = $modChap->getChapter($id);
        $update = $modChap->updateChapter($id);
        require('./view/backend/modifyChap.php');
    }

    public function modComs(){
        $bdd = new ModComs();
        $sql = $bdd->getComs();
        require('./view/backend/comAdmin.php');
    }
    public function chapterPost(){
        $bdd = new Post();
        $insert = $bdd->chapPost();
    }
    public function newAdmin(){
        $bdd = new Post();
        $insert = $bdd->addAdmin();
    }

    public function modAdmin($id){
        $bdd = new LogAuth();
        $sql = $bdd->getAdminUpdate($id);
        $bdd->updateAdmin($id);
        
        require('./view/backend/modAdmin.php');
    }
}