<?php

include "bdd.php";

// function pour afficher tout les produits en bdd
function getProducts() {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM produits ORDER BY id");

    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;

}
 $produits = getProducts();

 function getProductsCategorie($a) {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM produits WHERE categorie = '$a' ORDER BY id");

    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;

}


//ici on utilise la fonction get product dans une nouvelle fonction add product
 function addData(array $datasProduct, $tab) {
    $bdd = connexion();
    $columns = "(";
    $values = "(";

    // $datasProduct = [
    //     "name" => "VTT",
    //     "description" => "Super VTT",
    //     "price" => 450,
    //     "image" => "images/velo1.jpg"
    // ];

    foreach($datasProduct as $column => $columnValue) {
        $columns .= $column . ", ";// => $columns = "(name, description, price, image, ";
        $values .= ":" . $column . ", ";// => $values = "(:name, :description, :price, :image, ";
    }
        // $bdd->query("INSERT INTO products (name, description, price, image) VALUES (" .
    //     $datasProduct['name'] . ", " .
    //     $datasProduct['description'] .", " .
    //     $datasProduct['price'] . ", " .
    //     $datasProduct['image'] .
    //     ")"
    // );

    $columns = substr($columns, 0, -2) . ")"; //=> "(name, description, price, image)
    $values = substr($values, 0, -2) . ")"; //=> (:name, :description, :price, :image)
    //"INSERT INTO products (name, description, price, image) VALUES (:name, :description, :price, :image)"
    // die("INSERT INTO products " . $columns . " VALUES " . $values);
    $query = $bdd->prepare("INSERT INTO $tab " . $columns . " VALUES " . $values);

    $response = $query->execute($datasProduct) or die(print_r($bdd->errorInfo()));

    return $response;
}


function deleteProduct(int $id) {
    $bdd = connexion();
    $query = $bdd->prepare('DELETE FROM products WHERE id=:id');

    $response = $query->execute(['id' => $id]);

    return $response;
}

function newUser() {

}

function getUsers() {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM user ORDER BY id");

    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;

}
$users = getUsers();
function getUser($email) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM user WHERE email = :email");

    $response = $query->execute(['email'=>$email]);
    $data = $query->fetch();

    $query->closeCursor();

    return $data ;

}

function getProductById($id) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM produits WHERE id = :id");
    $response = $query->execute(['id'=>$id]);
    $data = $query->fetch();

    $query->closeCursor();

    return $data;

}
