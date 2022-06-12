<?php include_once "Views/Includes/header.php" ?>
<!-- ======= Categories Navbar ======= -->
<section id="portfolio" class="portfolio mt-5">
    <div class="container">

        <div class="section-title">
            <h2>Boutique</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li class="btn active">Tous les produits</li>
                    <li class="btn">Huiles</li>
                    <li class="btn">Crèmes</li>
                    <li class="btn">Baumes à lèvres</li>
                    <li class="btn">Parfums</li>
                    <li class="btn">Packs</li>
                </ul>
            </div>
        </div>

</section>
<!-- End Categories Navbar -->


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
                    <h5 style="width:80%; height: 5%;"><?= $produit['name'] ?></h5>
                    <button class="btn btn-dark" style="height: 13%;">Ajouter au panier</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- END Products Section -->


<?php include_once "Views/Includes/footer.php" ?>