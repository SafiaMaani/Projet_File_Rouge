<?php

class ProduitController
{
	public function getAllProduit()
	{
		$produiuts = Produit::getAll();
		return $produiuts;
	}

	public function addPrdt()
	{
		if (isset($_POST['addPrdt'])) {
			$data = array(
				'name' => $_POST['name'],
				'img' => $_POST['img'],
				'prix' => $_POST['prix'],
				'description' => $_POST['description'],
				'categorie' => $_POST['categorie'],
				'quantite' => $_POST['quantite'],
				'coop_name' => $_POST['coop_name'],
			);

			Produit::add($data);

			// if($result === 'ok'){
			// 	Session::set('success','Employé Ajouté');
			// 	Redirect::to('index');
			// }else{
			// 	echo $result;
			// }
		}
	}

	public function deleteProduit()
	{
		if (isset($_POST['delete'])) {
			$data['id_produit'] = $_POST['id_produit'];
			$result = Produit::delete($data);
			if ($result === 'ok') {
				header('Location:Dashboard');
			}
		}
	}

	public function updateProduit()
	{
		if (isset($_POST['updateProduit'])) {
			$data = array(
				'id_produit' => $_POST['id_produit'],
				'name' => $_POST['name'],
				'img' => $_POST['img'],
				'prix' => $_POST['prix'],
				'description' => $_POST['description'],
				'categorie' => $_POST['categorie'],
				'quantite' => $_POST['quantite'],
				'coop_name' => $_POST['coop_name'],
			);
			$result = Produit::update($data);
			if ($result === 'ok') {
				header('location:Dashboard');
			}
			// if ($result === 'ok') {
			// 	Session::set('success', 'Employé Modifié');
			// 	Redirect::to('home');
			// } else {
			// 	echo $result;
			// }
		}
	}

	public function getOneId()
	{
		if (isset($_POST['id_produit'])) {
			$result = Produit::getOne($_POST['id_produit']);
			return $result;
		}
	}
}
