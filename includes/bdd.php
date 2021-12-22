<?php
function connexion(){
    $bdd= null;
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=aircut;charset=utf8',
    'root',
    '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    }  catch (Exception $e) {
        die($e->getMessage());
    }
        return $bdd;
}
