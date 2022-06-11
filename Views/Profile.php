<?php 
include_once "Views/Includes/header.php" ;

$user = new UsersController();
$user->signIn();
?>

<div class="bg-light mt-5 pt-5 d-flex flex-column align-items-center">
    <div class="bienvenue w-50">
        <div class="border border-success mb-2 p-2 rounded d-flex flex-column align-items-center">
        <h1>Bienvenue <?= $_SESSION['full_name'] ; ?></h1>
            <div>
                <button type="button" class="btn btn-dark"><a href="boutique" class="text-white">Passer une commande</a></button>
                <button type="button" class="btn btn-secondary"><a href="Deconnexion"  class="text-white"><i class="far fa-sign-out"></i> Se déconnecter</a></button>
            </div>
        </div>
        <div class="border border-success mb-2 p-2 rounded">
            <h2>Détails du compte</h2>
            <div>
                <p><b>Nom :</b> <?= $_SESSION['full_name'] ; ?></p>
                <p><b>Email :</b> <?= $_SESSION['email'] ; ?></p>
                <p><b>Mot de passe :</b> <?= $_SESSION['password'] ; ?></p>
                <p><b>Adresse :</b> <?= $_SESSION['adresse'] ; ?></p>
                <p><b>Téléphone :</b> <?= $_SESSION['telephone'] ; ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once "Views/Includes/footer.php" ?>
