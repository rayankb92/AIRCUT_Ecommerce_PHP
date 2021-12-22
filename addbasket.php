<?php
session_start();
include_once "includes/functions.php";
$product = getProductById($_POST['id']);
if (!isset($_SESSION['test'])) {
    $_SESSION['test']=[];
}
  
     $position = array_search($product['id'], array_column($_SESSION['test'],'id') );
    var_dump($position, $_SESSION);

    if ($position === false) {
        array_push($_SESSION['test'],[ 'id'=> $product['id'], 'name'=> $product['name'],  'amount' => $product['amount'],'image' => $product['image'], 'quantite' => 1 ]);

    } else {
        $_SESSION['test'][$position]['quantite']+=1;
    }

      header('Location: panier.php');
      exit();