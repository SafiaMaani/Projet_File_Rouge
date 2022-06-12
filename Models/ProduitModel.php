<?php

class ProduitModel
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM produit');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO produit (name,img,prix,description,categorie,quantite,coop_name) VALUES (:name,:img,:prix,:description,:categorie,:quantite,:coop_name)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':img', $data['img']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':categorie', $data['categorie']);
        $stmt->bindParam(':quantite', $data['quantite']);
        $stmt->bindParam(':coop_name', $data['coop_name']);
        $stmt->execute();
    }
    
    static public function delete($data)
    {
        $id = $data['id_produit'];
        try {
            $query = 'DELETE FROM produit WHERE id_produit=:id_produit';
            $stmt = DB::connexion()->prepare($query);
            $stmt->execute(array(":id_produit" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data)
    {
        $query = 'UPDATE produit SET name=:name,prix=:prix,img=:img,description=:description,categorie=:categorie,quantite=:quantite,coop_name=:coop_name WHERE id_produit=:id_produit';
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':id_produit', $data['id_produit']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':img', $data['img']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':quantite', $data['quantite']);
        $stmt->bindParam(':coop_name', $data['coop_name']);
        $stmt->bindParam(':categorie', $data['categorie']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }

    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM produit WHERE id_produit = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    static public function getCategorie($categorie)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM produit WHERE categorie = '$categorie'");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}