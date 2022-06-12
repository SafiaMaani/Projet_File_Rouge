// Form Validation

const email = document.getElementById("email");
const password = document.getElementById("mdp");
const passwordConf = document.getElementById("mdp2");
const nom = document.getElementById("full_name");
const tel = document.getElementById("tel");
const adresse = document.getElementById("adresse");
const regExPsw = /^[a-zA-Z0-9]+$/;
const regExTel = /^[0-9]+$/;
const regExEmail = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

const errorMessage_1 = document.getElementById("error1");
const errorMessage_2 = document.getElementById("error2");
const errorMessage_3 = document.getElementById("error3");
const errorMessage_4 = document.getElementById("error4");
const errorMessage_5 = document.getElementById("error5");
const errorMessage_6 = document.getElementById("error6");

function validation() {

    //Nom not EMPTY
    if (nom.value.trim() === "") {
        nom.style.borderColor = "red";
        errorMessage_4.textContent = "Veuillez entrer votre nom !";
        return false;
    }
    //Nom > 3 caractères
    else if (nom.value.length < 3) {
        nom.style.borderColor = "red";
        errorMessage_4.textContent =
            "Veuillez entrer un mot de passe de 3 caractères au moins !";
        return false;
    } else {
        nom.style.borderColor = "green";
        errorMessage_4.textContent = "";
    }

    //Telephone not EMPTY
    if (tel.value.trim() === "") {
        tel.style.borderColor = "red";
        errorMessage_5.textContent = "Veuillez entrer votre N° de téléphone !";
        return false;
    }
    //Numero° VALIDE
    else if (regExTel.test(tel.value) == false) {
        tel.style.borderColor = "red";
        errorMessage_5.textContent = "Veuillez entrer un N° de téléphone valid!";
        return false;
    }
    //Telephone > 10 caractères
    else if (tel.value.length < 10) {
        tel.style.borderColor = "red";
        errorMessage_5.textContent =
            "Veuillez entrer un N° de 10 caractères au moins !";
        return false;
    } else {
        tel.style.borderColor = "green";
        errorMessage_5.textContent = "";
    }

    //Adresse not EMPTY
    if (adresse.value.trim() === "") {
        adresse.style.borderColor = "red";
        errorMessage_6.textContent = "Veuillez entrer votre adresse !";
        return false;
    }
    //Adresse > 50 caractères    
    else if (adresse.value.length < 25) {
        adresse.style.borderColor = "red";
        errorMessage_6.textContent =
            "Veuillez entrer une adresse de 25 caractères au moins !";
        return false;
    } else {
        adresse.style.borderColor = "green";
        errorMessage_6.textContent = "";
    }

    //Email not EMPTY
    if (email.value.trim() === "") {
        email.style.borderColor = "red";
        errorMessage_1.textContent = "Veuillez entrer votre email !";
        return false;
    }
    //Email VALIDE
    else
    if (regExEmail.test(email.value) == false) {
        email.style.borderColor = "red";
        errorMessage_1.textContent = "Veuillez entrer un email valid!";
        return false;
    } else {
        email.style.borderColor = "green";
        errorMessage_1.textContent = "";
    }

    //Mot de passe not EMPTY
    if (password.value.trim() === "") {
        password.style.borderColor = "red";
        errorMessage_2.textContent = "Veuillez entrer votre mot de passe !";
        return false;
    }
    //Mot de passe > 8 caractères
    else if (password.value.length < 8) {
        password.style.borderColor = "red";
        errorMessage_2.textContent =
            "Veuillez entrer un mot de passe de 8 caractères au moins !";
        return false;
    }
    //Mot de passe *uniquement alphanumérique*
    else if (regExPsw.test(password.value) == false) {
        password.style.borderColor = "red";
        errorMessage_2.textContent =
            "Veuillez entrer un mot de passe qui comporte uniquement des lettres et chiffres !";
        return false;
    } else {
        password.style.borderColor = "green";
        errorMessage_2.textContent = "";
    }

    //MOT DE PASSE (confirmation)
    if (passwordConf.value.trim() === '') {
        passwordConf.style.borderColor = 'red'
        errorMessage_3.textContent = 'Veuillez confirmer le mot de passe'
        return false
    } else if (passwordConf.value.length <= 8) {
        passwordConf.style.borderColor = 'red'
        errorMessage_3.textContent = 'Veuillez entrer un mot de passe qui dépasse 8 caractères'
        return false
    } else {
        passwordConf.style.borderColor = 'green'
        errorMessage_3.textContent = ''
    }
    //Psw1 == Psw2
    if (password.value != passwordConf.value) {
        errorMessage_2.textContent = errorMessage_3.textContent = 'Les 2 mots de passe doivent etre identiques !';
        password.style.borderColor = passwordConf.style.borderColor = 'red';
        return false;
    }

    return true;
}