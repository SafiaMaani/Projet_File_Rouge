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
			// echo '<pre>';
			// var_dump($data);
			// echo '</pre>';
			// echo $data['prix'];

			$msg = "
			<div id='liveAlertPlaceholder' class='alert'>
					<div class='position-fixed bottom-0 end-0 p-3 w-50' >
						<div role='alert' aria-live='assertive' aria-atomic='true' class='h-25 w-100'>
							<div class='toast-header h-25'>
								<img src='Views/assets/img/boutique/{$data['categorie']}/{$data['img']}' class='rounded me-2 w-25 h-25 bg-warning' alt='productPicture'>
								<b>{$data['name']} à {$data['prix']} Dh</b> a été ajouté a votre panier<br>
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button>
							</div>
						</div>
					</div>
            </div>";
		}
		return $msg;
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

			$id_produit = $_POST['id_produit'];
			$result = PanierModel::delete($id_produit, $_SESSION['id_user']);

			if ($result === 'ok') {
				header('Location:Panier');
			}
		}
	}
}
