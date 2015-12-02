/**
 * Created by Miro on 30.03.15..
 */
var cijena;
var potrosnja;
var brojKmh;

function calc() {
    cijena = document.mojaForma.cijena.value;
    potrosnja = document.mojaForma.potrosnja.value;
    brojKmh = document.forma.Broj_kmh.value;

    if(brojKmh <= 0 || isNaN(Number(brojKmh)) ) {
        alert("Niste unijeli pravilan iznos!");
        document.forma.Broj_kmh.value = "";
    }
    else {
        costs(parseFloat(cijena), parseFloat(potrosnja), parseFloat(brojKmh));
    }
}

function costs(cijena, potrosnja, brojKmh) {
    var trosak = (potrosnja/100) * brojKmh;
    var troskovi = trosak * cijena;

    document.getElementById('trosak').value = round(troskovi, 2);
}

//funkcija koja zaokružuje broj na dvije decimale
function round(broj, dec) {
    return (Math.round(broj*Math.pow(10,dec))/ Math.pow(10,dec)).toFixed(dec);
}