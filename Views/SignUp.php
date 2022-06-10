<section class="d-flex">
    <div class="w-50 d-flex align-items-center justify-content-center">
        <form onsubmit="return(validation())" method="POST" class="d-flex flex-column w-75">

            <h1 class="text-center p-3">Inscription</h1>

            <label class="mb-1">Nom complet</label>
            <input id="full_name" class="mb-1" type="text" name="full_name">
            <div id="error1" class="text-danger mb-1"></div>

            <label class="mb-1">Email</label>
            <input class="mb-1" type="text" id="email" name="email">
            <div id="error1" class="text-danger mb-1"></div>

            <label class="mb-1">Mot de passe</label>
            <input id="mdp" class="mb-1" type="password" name="password">
            <div id="error2" class="text-danger mb-1"></div>

            <label class="mb-1">Confirmer le mot de passe</label>
            <input id="mdp2" class="mb-1" type="password">
            <div id="error3" class="text-danger mb-1"></div>

            <button name="submit" type="submit" class="botona btn btn-success mb-4 mt-3">S'inscrire</button>
            <p>Vous avez déjà un compte ? <a href="SignIn" class="text-decoration-none">Se connecter</a></p>

        </form>
    </div>
    <div class="w-50 d-flex justify-content-center">
        <img class="w-75" src="Views/assets/img/logo.jpg" alt="">
    </div>
</section>

