<?php include_once "Views/Includes/header.php" ?>

<div class="container pt-5 my-5">
    <div class="row">
        <?php
        $data = new ProduitController();
        $produit = $data->getOneId();

        $addToPanier = new PanierController();
        $addToPanier->addToPanier();

        $notification = new PanierController();
        $msg = $notification->notification();

        ?>
        <div class="col-6">
            <img class="mx-5 w-75" style="height: 22rem;" src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" alt="productPicture">
        </div>
        <div class="col-6 border border-success rounded ">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h4 class="fs-1 text-success"><?= $produit['name'] ?></h4>
                <h5 class="fs-3 text-secondary"><?= $produit['prix'] ?> MAD</h5>
            </div>
            <div class="bg-light">
                <p><u><b>Description :</b></u><br>
                    <b>*</b> Ce Produit a été fabriqué par la Cooperative "<b><?= $produit['coop_name'] ?></b>"<br>
                    <b>*</b> <?= $produit['description'] ?><br>
                    <b>*</b> Catégorie : <?= $produit['categorie'] ?>
                </p>
            </div>
            <div class="w-100 p-2 d-flex justify-content-end">
                <form method="post">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                    <input type="hidden" name="id_produit" value="<?= $produit['id_produit']; ?>">
                    <input type="hidden" name="name" value="<?= $produit['name']; ?>">
                    <input type="hidden" name="img" value="<?= $produit['img']; ?>">
                    <input type="hidden" name="prix" value="<?= $produit['prix']; ?>">
                    <input type="hidden" name="quantite" value="<?= $produit['quantite']; ?>">
                    <input type="hidden" name="categorie" value="<?= $produit['categorie']; ?>">
                    <button class="btn btn-dark" type="submit" name="addToPanier" id="liveAlertBtn">Ajouter au panier</button>
                </form>
            </div>
            
            <?= $msg; ?>
        </div>
    </div>
</div>
</div>

<?php include_once "Views/Includes/footer.php" ?>