<div class="d-flex justify-content-evenly mt-5 pt-5">
    <div class="border border-success mb-2 p-2 rounded w-50">
        <h2><u>Détails du produit</u></h2>
        <div>
            <?php
            include_once "Controllers/ProduitController.php";
            include_once "Models/ProduitModel.php";

            $data = new ProduitController();
            $produit = $data->getOneId();

            ?>
            <p>Nom : <?= $produit['name'] ?></p>
            <p>Prix : <?= $produit['prix'] ?></p>
            <p>Description : <?= $produit['description'] ?></p>
            <p>Nom de cooperative : <?= $produit['coop_name'] ?></p>
            <p>info : <?= $produit['name'] ?></p>
            <p>info : <?= $produit['name'] ?></p>
        </div>
    </div>
    <div class="w-25">
        <img class="w-100" src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" alt="productPicture">
    </div>
</div>