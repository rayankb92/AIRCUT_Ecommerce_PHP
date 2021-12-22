<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="aircutfinal.svg" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRCUT</title>
</head>
<?php 
include_once "./includes/nav.php"
?>
<body>

    <main>
      <div class="tout">
        <div class="popup">
            <h2>Bienvenue sur AIRCUT</h2>
            <p>En entrant sur le site, vous acceptez de gentiment nous donner vos Information de navigation</p>
            <button class="btnclose">Entrer</button>
        </div>
        </div>
        <img src="images/devantbarber.jpg" class="img-fluid" alt="...">
        
  
          <div class="card-group">
            <div class="card">
              <img src="tondeuses/tondeusescard.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Materiel de coupe pro</h5>
                <p class="card-text">Nos tondeuses professionnel </p>
              </div>
              <div class="card-footer">
                <small class="text-muted"> <a href="produits.php"> Voir les produits</a></small>
              </div>
            </div>
            <div class="card">
              <img src="accessoire/accessoire.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Accessoires</h5>
                <p class="card-text">Nos accessoires pour couper.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"> <a href="produits.accessoire.php">Voir les produits</a></small>
              </div>
            </div>
          </div>
    </main>
    <footer>
        <div class="leftfoot">
            <h5>Information</h5>
            <a href="#">contact</a>
            <a href="#">CGV</a>
            <a href="#">FAQ</a>
        </div>
        <div class="rightfoot">
            <h5>Nous rejoindre</h5>
            <a href="#">Devenir coiffeur aircut</a>
            <a href="#">Aide</a>
        </div>
        
    </footer>
    <script src="js/bootstrap.js"></script>
    <script>
      const tout = document.querySelector('.tout')
const btnclose = document.querySelector('.btnclose')

btnclose.addEventListener("click", ()=>{
    tout.style.display='none'
})
    </script>
</body>
</html>