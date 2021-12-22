<?php session_start(); ?>
<?php
include_once "./includes/functions.php"
?>
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


    <!-- ici les produits -->
    <?php
    function creationPanierIfNotExist(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']= [];
      $_SESSION['panier']['name'] = [];
      $_SESSION['panier']['image'] = [];
      $_SESSION['panier']['amount'] = [];
   }
   return true;
}  ?>
  <div class="toutproduit">
    <h3>Tout les produits:</h3>
      <div class="produits">

        <?php 
        foreach($produits as $product) {?>
          <section id="produits">
            <a href="descriptionproduit.php?id=<?php echo $product['id']?>">
            <figure>
              <img src="<?php echo $product["image"]?>"alt="jmenfou">
              <figcaption>
                <h3><?php echo $product["name"]?></h3>
                <h4><?php echo $product["amount"]?>€</h4>
                <p><a href=""></a></p>
              </figcaption>
            </figure></a>

          </section>
        <?php }
        ?>
      </div>
  </div>


<?php include_once "./includes/footer.php" ?>

    <script src="js/bootstrap.js"></script>
    <script src="hh.js"></script>
</body>
</html>