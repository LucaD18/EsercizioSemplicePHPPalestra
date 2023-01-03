//Sotto, il query selector all è una proprietà di jquery che mi consente di prendere gli elementi che hanno come tipo text.
let variabiliText = document.querySelectorAll('input[type="text"]');
let checkBoxes = document.getElementsByName("corsi[]");
let form = document.getElementById("invia");

function controlloDati() {
    for (let i = 0; i < variabiliText.length; i++) {
        if (trimText(variabiliText[i].value).length == 0) {
            alert("Attenzione: il campo " + variabiliText[i].name + " non puo' essere vuoto!");
            return false;
        }
    }
    form.submit();
}

function controlloCheck() { 
    for (let i = 0; i < checkBoxes.length; i++) {
        if (checkBoxes[i].checked) {
            return true;
        }
    }
    alert("Attenzione: devi selezionare almeno un corso!");
    return false;
}

function submitEverything() {
    if (controlloCheck() && controlloDati()) {
        form.submit();
    }
}

function trimText(variabile) {
    return variabile.trim();
}