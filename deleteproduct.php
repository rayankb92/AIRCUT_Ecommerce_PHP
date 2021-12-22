<?php
include "./includes/delete_include.php";
?>

<div>
    <p class="label"><label for="products">Nom du produit</label></p>
    <select name="id" id="products">
        <?php
            foreach($products as $product) { ?>
                <option value="<?php echo $product["id"]; ?>">
                    <?php echo $product["name"]; ?>
                </option>
        <?php } ?>
    </select>
    <input type="submit" value="Supprimer">
</div>