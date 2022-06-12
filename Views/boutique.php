<?php include_once "Views/Includes/header.php" ?>
<?php include_once "Views/Includes/navbarBoutique.php" ?>

<!-- ======= Products Section ======= -->
<div class="container">
    <div class="d-flex flex-wrap">
        <?php
        $data = new ProduitController();
        $produits = $data->getAllProduit();

        foreach ($produits as $produit) :
        ?>
            <div class="cards w-25 p-3" style="height: 300px;">
                <div class="text-center" style="height: 100%;">
                    <img src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" alt="huile" style="width:100%; height : 80%;">
                    <h5><?= $produit['name'] ?></h5>
                    <button class="btn btn-dark" style="height: 13%;">Ajouter au panier</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- END Products Section -->


<?php include_once "Views/Includes/footer.php" ?>