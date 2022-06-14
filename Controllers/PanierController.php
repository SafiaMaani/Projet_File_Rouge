<?php

class PanierController
{
	public function addToPanier()
	{
		if (isset($_POST['addToPanier'])) {
			$data = array(
				'id_user' => $_SESSION['id_user'],
				'id_produit' => $_POST['id_produit'],
				'name' => $_POST['name'],
				'img' => $_POST['img'],
				'prix' => $_POST['prix'],
				'quantite' => $_POST['quantite'],
				'categorie' => $_POST['categorie'],
			);

			if (isset($_SESSION['logged'])) {
				PanierModel::add($data);
				echo "<script>alert('Le produit a été ajouté avec success à votre panier :D')</script>";
			} else {
				// echo "<script>alert('VOUS DEVEZ ETRE CONNECTE POUR AJOUTER UN PRODUIT AU PANIER !')</script>";
				// sleep(1);
				Redirect::to('SignIn');
			}
		}
	}

	public function getAllProduitInPanier($id)
	{
		if (isset($_SESSION['logged'])) {
			$cltPanier = PanierModel::getAll($id);
			return $cltPanier;
		} else {
			Redirect::to('boutique');
		}
	}

	public function deleteProduitFromPanier()
	{
		if (isset($_POST['retirerProduit'])) {

			$id = $_POST['id_produit'];
			$result = PanierModel::delete($id);

			if ($result === 'ok') {
				header('Location:Panier');
			}
		}
	}
}
