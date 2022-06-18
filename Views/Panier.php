<?php include_once "Views/Includes/header.php" ?>
<div class="d-flex mt-5 p-5">
    <div class="panier w-75 p-3 border-end border-3">
        <table class="table">
            <tbody>
                <?php
                $data = new PanierController();
                $panierProducts = $data->getAllProduitInPanier($_SESSION['id_user']);

                foreach ($panierProducts as $panierProduct) :
                ?>
                    <tr>
                        <td class="w-25"><img src="Views/assets/img/boutique/<?= $panierProduct['categorie'] ?>/<?= $panierProduct['img'] ?>" alt="teswira" class="w-50 "></td>
                        <td><?= $panierProduct['name'] ?></td>
                        <td>
                            <form method="post" class="mr-1" action="deleteProduit">
                                <input type="hidden" name="id_produit" value="<?= $panierProduct['id_produit']; ?>">
                                <button type="submit" class="btn btn-dark" name="retirerProduit">retirer</button>
                            </form>
                        </td>
                        <td><input class="qte w-75" type="number" min="1" max="<?= $panierProduct['quantite'] ?>" value="<?= $panierProduct['qteUni'] ?>" onchange="updateTotal()"></td>
                        <td class="d-fle">
                            <p class="prixUnitaire"><?= $panierProduct['prix'] ?></p> <span> Dh</span>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>

            </tbody>
        </table>
        <div class="row" id="row1">
            <h6 class="col">Sous total : </h6>
            <p class="col-2" id="sousTotal"> </p>
        </div>
        <div class="row" id="row2">
            <h6 class="col">Livraison : </h6>
            <p class="col-2" id="livraison"></p>
        </div>
        <div class="row border border-2" id="row3">
            <h3 class="col">Total : </h3>
            <h4 class="col-3" id="total"></h4>
        </div>
    </div>
    <div class="validation w-50 p-3">
        <form method="POST" onsubmit="return(validationSignUp())">
            <h2><u>Infos de livraison :</u></h2>
            <input name="getTotal" type="hidden" value="" id="getTotal">
            <div class="row">
                <div class="mb-3 col">
                    <label for="formGroupExampleInput" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $_SESSION['full_name']; ?>">
                    <div id="error4" class="text-danger mb-1"></div>
                </div>
                <div class="mb-3 col">
                    <label for="formGroupExampleInput" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="tel" name="telephone" value="<?= $_SESSION['telephone']; ?>">
                    <div id="error5" class="text-danger mb-1"></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $_SESSION['adresse']; ?>">
                <div id="error6" class="text-danger mb-1"></div>
            </div>
            <div class="mb-3">
                <label class="mb-1">Email</label>
                <input class="mb-1 form-control" type="text" id="email" name="email" value="<?= $_SESSION['email']; ?>">
                <div id="error1" class="text-danger mb-1"></div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-dark" type="submit" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" id="commander">Commander</button>
            </div>
        </form>

    </div>
</div>

<?php include_once "Views/Includes/footer.php" ?>