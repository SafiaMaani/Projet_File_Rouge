<?php
include_once "Views/Includes/header.php";

$addUser = new UsersController();
$addUser->register();
?>

<section class="d-flex">
    <div class="w-50 d-flex align-items-center justify-content-center">
        <form onsubmit="return(validationSignUp())" method="POST" class="d-flex flex-column w-75">

            <h1 class="text-center p-3">Inscription</h1>

            <div class="row">
                <div class="col">
                    <label class="mb-1">Nom complet</label>
                    <input id="full_name" class="mb-1 form-control" type="text" name="full_name">
                    <div id="error4" class="text-danger mb-1"></div>
                </div>
                <div class="col">
                    <label class="mb-1">Téléphone</label>
                    <input id="tel" class="mb-1 form-control" type="text" name="telephone">
                    <div id="error5" class="text-danger mb-1"></div>
                </div>
            </div>

            <label class="mb-1">Adresse</label>
            <input id="adresse" class="mb-1 form-control" type="text" name="adresse">
            <div id="error6" class="text-danger mb-1"></div>

            <label class="mb-1">Email</label>
            <input class="mb-1 form-control" type="text" id="email" name="email">
            <div id="error1" class="text-danger mb-1"></div>

            <div class="row">
                <div class="col">
                    <label class="mb-1">Mot de passe</label>
                    <input id="mdp" class="mb-1 form-control" type="password" name="password">
                    <div id="error2" class="text-danger mb-1"></div>
                </div>
                <div class="col">
                    <label class="mb-1">Confirmer le mot de passe</label>
                    <input id="mdp2" class="mb-1 form-control" type="password" name="passwordConf">
                    <div id="error3" class="text-danger mb-1"></div>
                </div>
            </div>


            <button name="submit" type="submit" class="botona btn btn-success mb-4 mt-3">S'inscrire</button>
            <p>Vous avez déjà un compte ? <a href="SignIn" class="text-decoration-none">Se connecter</a></p>

        </form>
    </div>
    <div class="w-50 d-flex justify-content-center">
        <img class="w-75" src="Views/assets/img/logo.jpg" alt="">
    </div>
</section>

<?php include_once "Views/Includes/footer.php"; ?>
