<?php

include_once "functions.php";

if(isset($_POST) && $_POST !== [] && $_POST !== null) {
    addData($_POST, 'PRODUITS');
}
