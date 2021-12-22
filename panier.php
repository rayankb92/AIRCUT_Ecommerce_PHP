<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AIRCUT</title>
</head>
<body>
    <?php 
    include_once "./includes/nav.php"
    ?>
    <?php
    if (isset($_SESSION['test'])) {
        $panier = &$_SESSION['test'];
    } else {
        $panier =[];
    }

    ?>

        
    <?php 
        $total=0;
        foreach ($panier as $key => &$produit) {

        if (isset($_POST['moin']) && $_POST['moin'] === '-' && $_POST['id'] === $produit['id']) {
            $produit['quantite']--;
        }
        if (isset($_POST['plus']) && $_POST['plus'] === '+' && $_POST['id'] === $produit['id']) {
            $produit['quantite']++;
        }
        if ($produit['quantite'] == 0) {
            unset($panier[$key]);
        } else {
            ?>
            <div class="tab">
                <div>  
                    <img src="<?php echo $produit['image']?>" alt="wee">
                </div>
                <div>
                    <p><?php echo $produit['name']?></p>

                </div> 
                <div>
                    <p>quantité:<?php echo $produit['quantite']?></p>
                </div>
                <div>
                    <p><?php echo $produit['amount'] ?>€ </p>
                </div> 
            
             
                    <form action="#" method="POST">    
                        <label for="plus"></label>
                        <input type="submit" value="+" name="plus" />
                        <input type='hidden' value="<?php echo $produit['id']?>" name="id">
                        </form><form action="#" method="POST">    
                        <label for="moin"></label>
                        <input type="submit" value="-" name="moin" />
                        <input type='hidden' value="<?php echo $produit['id']?>" name="id">
                        
                    </form>
                </div> <?php

        }
        
        ?> 
        
    <?php     $total += $produit['amount'] * $produit['quantite'];
    }?> <div id="total"><p>TOTAL: <?php echo $total;?>€</div> <br>

    
</body>




<?php include_once"./includes/footer.php";?>