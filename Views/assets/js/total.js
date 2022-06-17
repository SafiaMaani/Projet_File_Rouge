var qte = document.getElementsByClassName("qte");
var prixUnitaire = document.getElementsByClassName("prixUnitaire");
let sousTotal = 0;

function calculerTotal() {
    for (let i = 0; i < qte.length; i++) {
        var t = qte[i].value * prixUnitaire[i].textContent;
        sousTotal = sousTotal + t;

        document.getElementById("sousTotal").innerHTML = sousTotal + " Dh";
    }
    if (sousTotal >= 300) {
        document.getElementById("livraison").innerHTML = 10 + " Dh";
        document.getElementById("total").innerHTML = sousTotal + 10 + " Dh";
    } else {
        document.getElementById("livraison").innerHTML = 30 + " Dh";
        document.getElementById("total").innerHTML = sousTotal + 30 + " Dh";
    }
}

calculerTotal();

function updateTotal() {
    sousTotal = 0;

    for (let i = 0; i < qte.length; i++) {
        var t = qte[i].value * prixUnitaire[i].textContent;
        sousTotal = sousTotal + t;

        document.getElementById("sousTotal").innerHTML = sousTotal + " Dh";
    }
    if (sousTotal >= 300) {
        document.getElementById("livraison").innerHTML = 10 + " Dh";
        document.getElementById("total").innerHTML = sousTotal + 10 + " Dh";
    } else {
        document.getElementById("livraison").innerHTML = 30 + " Dh";
        document.getElementById("total").innerHTML = sousTotal + 30 + " Dh";
    }
}