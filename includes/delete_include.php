<?php

include_once "functions.php";

if (isset($_POST) && $_POST !== []) {
    deleteProduct($_POST['id']);
}

$products = getProducts();