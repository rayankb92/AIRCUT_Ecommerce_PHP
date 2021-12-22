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
    <title>Document</title>
</head>
<body>
<?php 
include_once "./includes/nav.php"
?>
<?php

if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
                'name' => $user['name'],
                'firstname' => $user['firstname'],
                'adresse'=> $user['adresse'],
                'id' => $user['id']
            ];
            $infouser = $user;
            /**
             * Cookie qui expire dans un an
             */
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );

            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
            $_SESSION['name'] = $loggedUser['name'];
            $_SESSION['firstname'] = $loggedUser['firstname'];
            $_SESSION['adresse'] = $loggedUser['adresse'];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}

// Si le cookie ou la session sont présentes
if (isset($_COOKIE['LOGGED_USER']) && isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
        'name'=> $_SESSION['name'],
        'firstname' => $_SESSION['firstname'],
        'adresse' => $_SESSION['adresse']

    ];
}
?>

<?php if(!isset($loggedUser)): ?>
<form action="#" method="post">
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo($errorMessage); ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo($loggedUser['email'] ); ?> !
    </div>
    <div>
        <h3>Vos informations:</h3>
        <p>Nom : <?php echo $loggedUser['name'] ?></p>
        <p>Prenom : <?php echo $loggedUser['firstname']?></p>
        <p>Adresse : <?php echo $loggedUser['adresse']?></p>

    </div>
<?php endif; ?>
    <?php if (isset($_SESSION['LOGGED_USER'])) {?>
     <a href="deconnecter.php"><button>se deconnecter</button></a>
        <?php
    }else {?>
            <button><a href="inscription.php">S'inscrire</a></button>
        <?php
    }
    
include_once "./includes/footer.php"
?>