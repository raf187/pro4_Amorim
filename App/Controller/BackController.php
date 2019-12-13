<?php
namespace App\Controller;
use App\Model\LogAuth;

class BackController{

    public function log(){
        session_start();
        $log = new LogAuth();
        $log->login();
        //$log->logout();
        require './view/backend/login.php';
    }
}