<?php

include_once "functions.php";

if(isset($_POST) && $_POST !== []) {
    addData($_POST, 'user');
    ?> <div class="alert alert-success" role="alert">
    Bonjour <?php echo('Inscription bien prise en compte'); ?> !
    <a href="../login.php">se connecter</a>
</div>
<?php
}
?>
