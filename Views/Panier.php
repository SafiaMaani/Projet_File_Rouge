<?php include_once "Views/Includes/header.php" ?>
<div class="d-flex mt-5 p-5">
    <div class="panier w-75 p-3 border-end border-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">img</th>
                    <th scope="col">Nom</th>
                    <th scope="col"></th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = new PanierController();
                $panierProducts = $data->getAllProduitInPanier($_SESSION['id_user']);

                foreach ($panierProducts as $panierProduct) :
                ?>
                    <tr>
                        <td class="w-25"><img src="Views/assets/img/boutique/<?= $panierProduct['categorie'] ?>/<?= $panierProduct['img'] ?>" alt="teswira" class="w-50 "></td>                       
                        <td><?= $panierProduct['name'] ?> </td>                           
                        <td><button class="btn btn-dark">retirer</button></td>                     
                        <td><input class="w-75" type="number" min="1" max="<?= $panierProduct['quantite'] ?>" value="1"> </td>    
                        <td><?= $panierProduct['prix'] ?> MAD</td>
                    </tr>
                <?php
                endforeach;
                ?>

            </tbody>
        </table>
        <div class="row">
            <h6 class="col">Sous total : </h6>
            <p class="col-2"> 330 Dh</p>
        </div>
        <div class="row">
            <h6 class="col">Livraison : </h6>
            <p class="col-2"> 10 Dh</p>
        </div>
        <div class="row border border-2">
            <h3 class="col">Total : </h3>
            <h4 class="col-3"> 340 Dh</h4>
        </div>
    </div>
    <div class="validation w-50 p-3">
        <form action="">
            <h2><u>Infos de livraison :</u></h2>
            <div class="row">
                <div class="mb-3 col">
                    <label for="formGroupExampleInput" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3 col">
                    <label for="formGroupExampleInput2" class="form-label">CIN</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2">
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="formGroupExampleInput" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3 col">
                    <label for="formGroupExampleInput2" class="form-label">Code postale</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2">
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Numéro de tél</label>
                <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-dark" type="button">Confirmer la commande</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "Views/Includes/footer.php" ?>