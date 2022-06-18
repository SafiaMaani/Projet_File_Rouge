<?php

class CommandeModel
{
    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO commande (id_user,id_produit,prix,total,name,telephone,adresse,email) 
        VALUES (:id_user,:id_produit,:prix,:getTotal,:full_name,:telephone,:adresse,:email)');

        $stmt->bindParam(':id_user', $data['id_user']);
        // $stmt->bindParam(':id_produit', $data['id_produit']);
        // $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':getTotal', $data['total']);
        $stmt->bindParam(':full_name', $data['name']);
        $stmt->bindParam(':telephone', $data['telephone']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
    }
}
