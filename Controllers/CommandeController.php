<?php
class CommandeController
{
    public function addToCommande()
    {
        if (isset($_POST['submit'])) {

            if (isset($_SESSION['logged'])) {
                $data = array(
                    'id_user' => $_SESSION['id_user'],
                    // 'id_produit' => $_POST['id_produit'],
                    // 'prix' => $_POST['prix'],
                    'total' => $_POST['getTotal'],
                    'name' => $_POST['full_name'],
                    'telephone' => $_POST['telephone'],
                    'adresse' => $_POST['adresse'],
                );

                var_dump($data);
                // CommandeModel::add($data);
            }
        }
    }
}
