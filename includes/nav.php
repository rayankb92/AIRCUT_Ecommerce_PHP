<link rel="icon" href="aircutfinal.svg" />

<header>
     <nav>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="aircutfinal.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
              <a class="nav-link" href="produits.php">produits</a>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="produits.php">Tout les produits</a></li>
            <li><a class="dropdown-item" href="produits.finition.php">Tondeuse de finition</a></li>
            <li><a class="dropdown-item" href="produits.accessoire.php">Accessoires</a></li>
          </ul>
        </li>
              <a class="nav-link" href="login.php"><?php if (isset($_SESSION['LOGGED_USER'])) {
                echo "Mon compte";
              } else {
                ?>Se Connecter<?php
              }?> </i></a>
              <a class="nav-link" href="panier.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z"/>
              </svg></a>
            </div>
          </div>
        </div>
      </nav>
     </nav>
    </header>
   <script src="hh.js"></script>