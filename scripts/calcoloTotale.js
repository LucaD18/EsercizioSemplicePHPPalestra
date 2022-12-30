var totale = 0;

const prezzi = {
    "yoga": 10,
    "pilates": 40,
    "danza": 35,
    "kickboxing": 60
};

function aggiornaTotale(tipo) {
    for (var key in prezzi) {
        if (prezzi.hasOwnProperty(key)) {
            if (prezzi[key] == tipo) {
                totale += prezzi[key];
                document.getElementById("totale").innerHTML = totale;
            }
        }
    }
}