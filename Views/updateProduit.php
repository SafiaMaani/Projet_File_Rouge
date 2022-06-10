<div class="mt-5 p-5"></div>
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

<div class="d-flex justify-content-center p-5 mt-5">

    <form method="post" class="d-flex flex-column" >
        <label class="mb-1">Nom : </label>
        <input class="mb-1" type="text" name="name" value="<?php echo ($produitData['name']) ?>">

        <label class="mb-1">Description</label>
        <textarea class="form-control md-textarea rounded-0 border-dark" name="description"><?php echo ($produitData['description']) ?></textarea>
        

        <div class="d-flex">
            <div class="w-50 p-2">
                <label class="mb-1">Prix :</label>
                <input class="mb-1 w-100" type="number" name="prix" value="<?php echo ($produitData['prix']) ?>">
            </div>
            <div class="w-50  p-2">
                <label class="mb-1">Quantité :</label>
                <input class="mb-1 w-100" type="number" name="quantite" value="<?php echo ($produitData['quantite']) ?>">
            </div>
        </div>
        <div class="d-flex">
            <div class="w-50  p-2">
                <label class="mb-1">Catégorie :</label >
                <select class="mb-1 w-100" name="categorie" value="<?php echo ($produitData['categorie']) ?>">
                    <option>Huiles</option>
                    <option>Baumes</option>
                    <option>Cremes</option>
                    <option>Parfums</option>
                    <option>Packs</option>
                </select>
            </div>
            <div class="w-50  p-2">
                <label class="mb-1">Nom de la cooperative :</label>
                <select name="coop_name" class="mb-1 w-100" value="<?php echo ($produitData['coop_name']) ?>">
                    <option>Atmare</option>
                    <option>Timar bladi</option>
                    <option>Tanmiya lbachariya</option>
                </select>
            </div>
        </div>

        <label class="mb-1">Image</label>
        <input class="mb-1" type="file" name="img" value="<?php echo ($produitData['img']) ?>">
        <input type="hidden" name="id_produit" value="<?php echo ($produitData['id_produit']) ?>">
        
        <div class="modal-footer">
            <button type="submit" name="updateProduit" class="btn btn-dark" data-bs-dismiss="modal">
                Modifier
            </button>
        </div>
    </form>
    
</div>