<?php session_start();
?>
<?php 
include_once "./includes/functions.php"
?>
<!DOCTYPE html>   
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css"><link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include_once "./includes/nav.php";
?>

<?php
    if(isset($_GET) & $_GET !== []){
       $product = getProductById($_GET['id']);   ?>
    <div class="ficheproduit">
        <div class="description">
            <h3><?php echo $product['name']?></h3>
            <h5><?php echo $product['amount']?>€</h5>
            <p><?php echo $product['description']?></p>
            <form action="addbasket.php" method="POST">    
                <label for="go"></label>
                <input type="submit" value="Ajouter au panier" name="go" />
                <input type="hidden" value = "<?php echo $_GET['id']?>" name="id">
            </form>
        </div>
        <div class="produitpicture">
        <img src="<?php echo $product['image']?>" alt="rien">
        </div>
    </div>
    <?php
    }
    
?>      
    <?php
    include_once "includes/footer.php";
    ?>
    <script src="js/bootstrap.js"></script>
    <script src="hh.js"></script>
</body>
</html>