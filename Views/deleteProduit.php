<?php
include_once "Controllers/ProduitController.php";
include_once "Models/ProduitModel.php";

if (isset($_POST['delete'])) {
    $byeProf = new ProduitController();
    $byeProf->deleteProduit();
}
