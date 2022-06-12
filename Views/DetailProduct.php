<?php include_once "Views/Includes/header.php" ?>

<div class="d-flex justify-content-evenly mt-5 pt-5">
    <div class="border border-success mb-2 p-2 rounded w-50">
        <h2><u>Détails du produit</u></h2>
        <div>
            <?php
            $data = new ProduitController();
            $produit = $data->getOneId();
            ?>
            <p>Nom : <?= $produit['name'] ?></p>
            <p>Prix : <?= $produit['prix'] ?> Dh</p>
            <p>Description : <?= $produit['description'] ?></p>
            <p>Nom de cooperative : <?= $produit['coop_name'] ?></p>
            <p>Catégorie : <?= $produit['categorie'] ?></p>
        </div>
    </div>
    <div class="w-25">
        <img class="w-100" src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" alt="productPicture">
    </div>
</div>

<?php include_once "Views/Includes/footer.php" ?>
