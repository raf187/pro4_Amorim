<?php namespace App\Controller;
use App\Model\FrontChapter;
use App\Model\ManageAdmin;
use App\Model\AdminChapter;
use App\Model\AdminComments;
use App\Model\MessageAdmin;
use Exception;

class BackController
{
    //connection
    public function login()
    {
        $log = new ManageAdmin();
        $log->login();
        require './view/backend/login.php';
    }
    public function logout()
    {
        session_destroy();
        header('location:/forteroche');
    }
    public function indexAdmin()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            require './view/backend/admin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }
    //Chapitre
    public function displayChapter()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new FrontChapter();
            $display = $conn->indexChapter();
            require './view/backend/chapterAdmin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }

    public function createChapter()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminChapter();
            $create = $conn->createChapter();
            require './view/backend/createChapter.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }

    public function updateChapter($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminChapter();
            $display = $conn->displayChapter($id);
            $update = $conn->updateChapter($id);
            require('./view/backend/manageChapter.php');
        } else {
            header('location:/forteroche/connexion');
        }
    }

    public function deleteChapter($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminChapter();
            $delete = $conn->deleteChapter($id);
        } else {
            header('location:/forteroche/connexion');
        }
    }
    //Commentaires
    public function displayComments()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminComments();
            $display = $conn->displayComments();
            require('./view/backend/commentsAdmin.php');
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function deleteComments($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminComments();
            $delete = $conn->deleteComment($id);
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function validateComment($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new AdminComments();
            $validate = $conn->validateComment($id);
        } else {
            header('location:/forteroche/connexion');
        }
    }
    //Administrateurs
    public function createAdmin()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new ManageAdmin();
            $create = $conn->createAdmin();
            require './view/backend/newAdmin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function displayAdmin()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new ManageAdmin();
            $display = $conn->displayAdmin();
            require './view/backend/manageAdmin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function updateAdmin($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new ManageAdmin();
            $display = $conn->displayAdminUpdate($id);
            $update = $conn->updateAdmin($id);
            require './view/backend/updateAdmin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function deleteAdmin($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new ManageAdmin();
            $delete = $conn->deleteAdmin($id);
        } else {
            header('location:/forteroche/connexion');
        }
    }
    //message
    public function displayMessage()
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new MessageAdmin();
            $display = $conn->displayMessage();
            require './view/backend/messageAdmin.php';
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function deleteMessage($id)
    {
        if (isset($_SESSION) && !empty($_SESSION['id'])) {
            $conn = new MessageAdmin();
            $display = $conn->deleteMessage($id);
        } else {
            header('location:/forteroche/connexion');
        }
    }
    public function postMessage()
    {
        $conn = new MessageAdmin();
        $post = $conn->postMessage();
    }
}