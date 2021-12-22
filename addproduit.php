<?php
    include_once "./includes/addproduit_include.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter un produit</title>
</head>
<body>
<form action="#" method="POST">
                <p>
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" placeholder="name">
                    <label for="description">description</label>
                    <textarea class="description" name="description" id="description" cols="30" rows="3"></textarea>                    <label for="amount">amount</label>
                    <input type="text" name="amount" id="amount"><br>
                    <label for="image">image</label>
                    <input type="text" name="image" id="image">
                    <label for="short_description">short_description</label>
                    <textarea class="short_description" name="short_description" id="short_description" cols="30" rows="3"></textarea>
                    <label for="categorie">categorie</label>
                    <input type="text" name="categorie" id="categorie">
                </p>
                <p>
                    <input type="submit" value="Ajouter">
                </p>
            </form>
</body>
</html>