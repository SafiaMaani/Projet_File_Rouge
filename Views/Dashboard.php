<div class="bg-light mt-5 pt-5 d-flex flex-column align-items-center">

    <div class="bienvenue border border-success mx-2 p-2 rounded w-75 d-flex flex-column align-items-center" style="background-color: #5cb874;">
        <h1>Bienvenue Mr l'administrateur</h1>
        <div>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i></i> Ajouter un produit</button>
            <button type="button" class="btn btn-secondary"><i class="far fa-sign-out"></i> Se déconnecter</button>
        </div>
    </div>

    <!-- Modal Ajout Produit-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entrer les infos du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" class="d-flex flex-column">
                        <label class="mb-1">Nom : </label>
                        <input class="mb-1" type="text" name="name">

                        <label class="mb-1">Description</label>
                        <textarea class="form-control md-textarea rounded-0 border-dark" name="description"></textarea>


                        <div class="d-flex">
                            <div class="w-50 p-2">
                                <label class="mb-1">Prix :</label>
                                <input class="mb-1 w-100" type="number" name="prix">
                            </div>
                            <div class="w-50  p-2">
                                <label class="mb-1">Quantité :</label>
                                <input class="mb-1 w-100" type="number" name="quantite">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="w-50  p-2">
                                <label class="mb-1">Catégorie :</label>
                                <select name="categorie" class="mb-1 w-100">
                                    <option>Huiles</option>
                                    <option>Baumes</option>
                                    <option>Cremes</option>
                                    <option>Parfums</option>
                                    <option>Packs</option>
                                </select>
                            </div>
                            <div class="w-50  p-2">
                                <label class="mb-1">Nom de la cooperative :</label>
                                <select name="coop_name" class="mb-1 w-100">
                                    <option>Atmare</option>
                                    <option>Timar bladi</option>
                                    <option>Tanmiya lbachariya</option>
                                </select>
                            </div>
                        </div>

                        <label class="mb-1">Image</label>
                        <input class="mb-1" type="file" name="img">

                        <div class="modal-footer">
                            <button type="submit" name="addPrdt" class="btn btn-dark" data-bs-dismiss="modal">
                                Ajouter le produit
                            </button>
                        </div>
                    </form>
                    <?php
                    include_once "Controllers/ProduitController.php";
                    include_once "Models/ProduitModel.php";

                    $add = new ProduitController();
                    $add->addPrdt();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="tables d-flex w-100 m-2 p-2">

        <div class="table1 border border-success m-2 p-2 rounded w-100">
            <h2 class="text-secondary"><u>Listes des produits</u></h2>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">img</th>
                            <th scope="col">Nom</th>
                            <th scope="col">prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Nom de coop</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include_once "Controllers/ProduitController.php";
                            include_once "Models/ProduitModel.php";

                            $data = new ProduitController();
                            $produits = $data->getAllProduit();

                            foreach ($produits as $produit) :
                            ?>
                        <tr>
                            <td><?= $produit['id_produit'] ?></td>
                            <td><img src="Views/assets/img/boutique/<?= $produit['categorie'] ?>/<?= $produit['img'] ?>" style="width: 80px; height : 80px;" alt="productPicture"></td>
                            <td><?= $produit['name'] ?></td>
                            <td><?= $produit['prix'] ?> Dh</td>
                            <td><?= $produit['description'] ?></td>
                            <td><?= $produit['categorie'] ?></td>
                            <td><?= $produit['quantite'] ?></td>
                            <td><?= $produit['coop_name'] ?></td>
                            <td>
                                <form method="post" class="mr-1" action="updateProduit">
                                    <input type="hidden" name="id_produit" value="<?php echo $produit['id_produit']; ?>">
                                    <button type="submit" name="update" class="border border-0 ">
                                        <i class="far fa-edit text-primary"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" class="mr-1" action="deleteProduit">
                                    <input type="hidden" name="id_produit" value="<?php echo $produit['id_produit']; ?>">
                                    <button type="submit" name="delete" class="border border-0">
                                        <i class="fal fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>