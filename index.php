<?php

require 'controller/controller.php';


$page = '';
if (isset($_GET['url'])) {
    $page = explode('/', $_GET['url']);
}

if ($page == '' || 'home') {
    home();

} elseif ($page == 'contact') {
    contact();

} elseif ($page  == 'chapter') {
    chapter();

} elseif ($page  == 'author') {
    author();

} else{
    echo'Erreur 404';

}
/*
switch ($page) {
    case '':
        home();
        break;
    
    case 'contact':
        contact();
        break;

    case 'chapter':
        chapter();
        break;

    case 'author':
        author();
        break;
    
    default:
        #http_response_code(404);
        #require __DIR__. ''
        echo'Erreur 404';
        break;
} */