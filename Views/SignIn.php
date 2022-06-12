<?php
if (!isset($_SESSION['logged'])) {
    include_once "Views/Includes/header.php";

    $loginUser = new UsersController();
    $loginUser->signIn();

?>
    <section class="d-flex">
        <div class="w-50 d-flex align-items-center justify-content-center">
            <form onsubmit="return(validation())" method="POST" class="d-flex flex-column w-75">

                <h1 class="text-center p-3">Connexion</h1>

                <label class="mb-1">Email</label>
                <input class="mb-1 form-control" type="text" id="email" name="email">
                <div id="error1" class="text-danger mb-1"></div>


                <label class="mb-1">Mot de passe</label>
                <input class="mb-1 form-control" type="password" id="mdp" name="password">
                <div id="error2" class="text-danger mb-1"></div>

                <button name="submit" type="submit" class="btn btn-success mb-4 mt-3">Se connecter</button>
                <p>Vous avez pas de compte ? <a href="SignUp" class="text-decoration-none">Inscrivez-vous</a></p>
            </form>
        </div>
        <div class="w-50 d-flex justify-content-center">
            <img class="w-75" src="Views/assets/img/logo.jpg" alt="">
        </div>
    </section>

    <?php include_once "Views/Includes/footer.php"; ?>
    
<?php } else {
    if ($_SESSION['role'] == 'admin') {
        Redirect::to('Dashboard');
    } else if ($_SESSION['role'] == 'client') {
        Redirect::to('Profile');
    }
}
