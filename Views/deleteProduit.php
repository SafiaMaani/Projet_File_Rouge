<?php

if (isset($_POST['delete'])) {
    $byeProduit = new ProduitController();
    $byeProduit->deleteProduit();
}

if(isset($_POST['retirerProduit'])){
    $retirerProduit = new PanierController();
    $retirerProduit->deleteProduitFromPanier();

}