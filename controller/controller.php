<?php
require 'model/model.php';

function home(){

    require 'view/frontend/index.php';
}

function author(){

    require 'view/frontend/author.php';
}

function chapter(){

    $req = getChapter();
    require 'view/frontend/chapter.php';
}

function contact(){

    require 'view/frontend/contact.php';
}

