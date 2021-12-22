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

  <div class="finition">
    <h3>Tondeuses de finition</h3>
      <div class="produits">
        <?php foreach(getProductsCategorie('finition') as $product) {?>
          <section id="produits">
          <a href="descriptionproduit.php?id=<?php echo $product['id']?>">
            <figure>
              <img src="<?php echo $product["image"]?>"alt="jmenfou">
              <figcaption>
                <h3><?php echo $product["name"]?></h3>
                <h4><?php echo $product["amount"]?>€</h4>
              </figcaption>
            </figure> </a>
          </section>
        <?php } ?>
      </div>
  </div>

        
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="hh.js"></script>
</body>
</html>