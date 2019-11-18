<?php

    function getChapter(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=Forteroche;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $req = $db->query('SELECT * FROM articles');
        
        return $req;
    }

