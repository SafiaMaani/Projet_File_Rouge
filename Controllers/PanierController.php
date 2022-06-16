<?php

class PanierController
{
	public function addToPanier()
	{
		if (isset($_POST['addToPanier'])) {
			if (isset($_SESSION['logged'])) {
				$data = array(
					'id_user' => $_SESSION['id_user'],
					'id_produit' => $_POST['id_produit'],
					'name' => $_POST['name'],
					'img' => $_POST['img'],
					'prix' => $_POST['prix'],
					'quantite' => $_POST['quantite'],
					'categorie' => $_POST['categorie'],
				);

				$a = PanierModel::verification($_POST['id_produit'],$_SESSION['id_user']);

				if (count($a) === 1) {
					PanierModel::updateQte($data['id_produit']);
				} else {
					PanierModel::add($data);
				}
			} else {
				Redirect::to('SignIn');
			}
		}
	}

	public function notification()
	{
		$msg = '';
		if (isset($_SESSION['logged']) && isset($_POST['addToPanier'])) {
			$data = array(
				'name' => $_POST['name'],
				'img' => $_POST['img'],
				'prix' => $_POST['prix'],
				'categorie' => $_POST['categorie'],
			);

			$msg = "
			<div class='alert position-fixed bottom-0 end-0 p-0 border' style='width: 35%' id='liveAlertPlaceholder'>
				<div  role='alert' aria-live='assertive' aria-atomic='true' class='h-100'>
					<div class='toast-header h-50'>
						<img src='Views/assets/img/boutique/{$data['categorie']}/{$data['img']}' class='rounded me-2 w-25 h-100 bg-warning' alt='productPicture'>
						<strong class='me-auto'><b>{$data['prix']} Dh</b></strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button>	
					</div>
					<div class='toast-body bg-white'>
						<b>{$data['name']}</b> a été ajouté a votre panier
					</div>
				</div>
			</div>
			";
		}
		return $msg;
	}
	public function getAllProduitInPanier($id_user)
	{
		if (isset($_SESSION['logged'])) {
			$cltPanier = PanierModel::getAll($id_user);

			if (count($cltPanier) === 0) {
				echo "<div class='alert alert-danger d-flex justify-content-between' role='alert'>
						<div>Votre panier est vide</div>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'></span>
						</button>
						</div>";
			} 
			return $cltPanier;
		} else {
			Redirect::to('boutique');
		}
	}

	public function deleteProduitFromPanier()
	{
		if (isset($_POST['retirerProduit'])) {

			$id_produit = $_POST['id_produit'];
			$result = PanierModel::delete($id_produit, $_SESSION['id_user']);

			if ($result === 'ok') {
				header('Location:Panier');
			}
		}
	}
}
