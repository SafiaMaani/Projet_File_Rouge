<?php
include_once "Controllers/ProduitController.php";
include_once "Models/ProduitModel.php";

$data = new ProduitController();
$produitData = $data->getOneId();

if (isset($_POST['updateProduit'])) {
    echo 'WHAT THE HELLLLLLLLL';
    $upProduit = new ProduitController();
    $upProduit->updateProduit();
}
?>

<div class="d-flex bg-light">
    <?php include_once "Views/Includes/sidebar/index.php" ?>

    <form method="post" class="d-flex flex-column justify-content-center w-75">
        <label class="mb-1">Nom : </label>
        <input class="mb-1 form-control" type="text" name="name" value="<?php echo ($produitData['name']) ?>">

        <label class="mb-1">Description</label>
        <textarea class="form-control md-textarea rounded-0 border-dark" name="description"><?php echo ($produitData['description']) ?></textarea>


        <div class="row">
            <div class="col">
                <label class="mb-1">Prix :</label>
                <input class="mb-1 form-control" type="number" name="prix" value="<?php echo ($produitData['prix']) ?>">
            </div>
            <div class="w-50 p-2">
                <label class="mb-1">Quantité :</label>
                <input class="mb-1 form-control" type="number" name="quantite" value="<?php echo ($produitData['quantite']) ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="mb-1">Catégorie :</label>
                <select class="mb-1 form-control" name="categorie" value="<?php echo ($produitData['categorie']) ?>">
                    <option>Huiles</option>
                    <option>Baumes</option>
                    <option>Cremes</option>
                    <option>Parfums</option>
                    <option>Packs</option>
                </select>
            </div>
            <div class="col">
                <label class="mb-1">Nom de la cooperative :</label>
                <select name="coop_name" class="mb-1 form-control" value="<?php echo ($produitData['coop_name']) ?>">
                    <option>Atmare</option>
                    <option>Timar bladi</option>
                    <option>Tanmiya lbachariya</option>
                </select>
            </div>
        </div>

        <label class="mb-1">Image</label>
        <input class="mb-1 form-control" type="text" name="img" value="<?php echo ($produitData['img']) ?>">
        <input type="hidden" name="id_produit" value="<?php echo ($produitData['id_produit']) ?>">

        <div class="modal-footer">
            <button type="submit" name="updateProduit" class="btn btn-dark" data-bs-dismiss="modal">
                Modifier
            </button>
        </div>
    </form>

</div>
