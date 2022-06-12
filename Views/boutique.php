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
            <div class="cards w-25 p-4" style="height: 300px;">
                <div class="text-center" style="height: 100%;">
                    <form method="post" action="DetailProduct" style="height: 100%; height : 100%;">
                        <input type="hidden" name="id_produit" value="<?php echo $produit['id_produit']; ?>">
                        <button class="btn" style="width:100%; height : 90%;">
                            <img src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" alt="huile" style="width:100%; height : 100%;">
                        </button>
                        <h5><?= $produit['name'] ?></h5>
                    </form>
                    <a href="Panier" >
                        <button class="btn btn-dark">Ajouter au panier</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- END Products Section -->


<?php include_once "Views/Includes/footer.php" ?>