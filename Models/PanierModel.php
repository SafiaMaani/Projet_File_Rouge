<?php

class PanierModel
{
    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO panier (id_produit,id_user,name,categorie,quantite,img,prix) VALUES (:id_produit,:id_user,:name,:categorie,:quantite,:img,:prix) ON DUPLICATE KEY UPDATE quantite = :quantite+1');
        $stmt->bindParam(':id_produit', $data['id_produit']);
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':img', $data['img']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':quantite', $data['quantite']);
        $stmt->bindParam(':categorie', $data['categorie']);
        $stmt->execute();
    }

    static public function getAll($id_user)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM panier WHERE id_user = '$id_user'");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function delete($id_produit,$id_user)
    {
        $stmt = DB::connexion()->prepare("DELETE FROM panier WHERE id_produit = $id_produit AND id_user = $id_user");
        if ($stmt->execute()) {
            return 'ok';
        }
    }
}
