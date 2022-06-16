<?php

class PanierModel
{
    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO panier (id_user,id_produit,name,img,quantite,categorie,prix,qteUni) 
        VALUES (:id_user,:id_produit,:name,:img,:quantite,:categorie,:prix,1)');

        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':id_produit', $data['id_produit']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':img', $data['img']);
        $stmt->bindParam(':quantite', $data['quantite']);
        $stmt->bindParam(':categorie', $data['categorie']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->execute();
    }

    static public function verification($id_produit,$id_user)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM panier WHERE id_produit = '$id_produit' AND id_user = '$id_user'");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function updateQte($id_produit)
    {
        $stmt = DB::connexion()->prepare("UPDATE panier SET qteUni = qteUni+1 WHERE id_produit = '$id_produit'");
        $stmt->execute();
    }

    static public function getAll($id_user)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM panier WHERE id_user = '$id_user'");
        $stmt->execute();

        return $stmt->fetchAll();
    }
    static public function delete($id_produit, $id_user)
    {
        $stmt = DB::connexion()->prepare("DELETE FROM panier WHERE id_produit = $id_produit AND id_user = $id_user");
        if ($stmt->execute()) {
            return 'ok';
        }
    }
}
