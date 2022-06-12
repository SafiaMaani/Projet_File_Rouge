<?php

class ProduitController
{
	public function getAllProduit()
	{
		$produiuts = ProduitModel::getAll();
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

			ProduitModel::add($data);
		}
	}

	public function deleteProduit()
	{
		if (isset($_POST['delete'])) {
			$data['id_produit'] = $_POST['id_produit'];
			$result = ProduitModel::delete($data);
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
			$result = ProduitModel::update($data);
			if ($result === 'ok') {
				header('location:Dashboard');
			}
		}
	}

	public function getOneId()
	{
		if (isset($_POST['id_produit'])) {
			$result = ProduitModel::getOne($_POST['id_produit']);
			return $result;
		}
	}

	public function getOneCategorie()
	{
			$categorie = $_GET['url'];
			$result = ProduitModel::getCategorie($categorie);
			return $result;
	}
}
