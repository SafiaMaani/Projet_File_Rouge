var qte = document.getElementsByClassName('qte');
var prixUnitaire = document.getElementsByClassName('prixUnitaire');
let sousTotal = 0

function calculerTotal() {

    for (let i = 0; i < qte.length; i++) {

        var t = qte[i].value * prixUnitaire[i].textContent;
        sousTotal = sousTotal + t;

        document.getElementById('sousTotal').innerHTML = sousTotal + " Dh";
        if (sousTotal >= 300) {
            document.getElementById('livraison').innerHTML = 10 + " Dh";
            document.getElementById('total').innerHTML = sousTotal + 10 + " Dh";
        } else {
            document.getElementById('livraison').innerHTML = 30 + " Dh";
            document.getElementById('total').innerHTML = sousTotal + 30 + " Dh";
        }
    }
    if (!sousTotal) {
        document.getElementById('row1').innerHTML = "";
        document.getElementById('row2').innerHTML = "";
        document.getElementById('row3').innerHTML = "<div class='alert alert-danger d-flex justify-content-between' role='alert'><div> Votre panier est vide </div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> <span aria-hidden='true' > </span> </button > </div>";

    }
}

function updateTotal() {
    sousTotal = 0;
    for (let i = 0; i < qte.length; i++) {
        var t = qte[i].value * prixUnitaire[i].textContent;
        sousTotal = sousTotal + t;

        document.getElementById('sousTotal').innerHTML = sousTotal + " Dh";

    }
    if (sousTotal >= 300) {
        document.getElementById('livraison').innerHTML = 10 + " Dh";
        document.getElementById('total').innerHTML = sousTotal + 10 + " Dh";
    } else {
        document.getElementById('livraison').innerHTML = 30 + " Dh";
        document.getElementById('total').innerHTML = sousTotal + 30 + " Dh";
    }
}
calculerTotal();