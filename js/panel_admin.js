/* Ajout de la class hovered*/

let list = document.querySelectorAll('.navigation li ');

function activeLink() {
    list.forEach((item) =>
        item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));

/* Menu Caché */

let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function() {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

$("#articles").click(function(e) {
    e.preventDefault();
    window.location.href = "./produit.php";
});

$("#clients").click(function(e) {
    e.preventDefault();
    window.location.href = "./client.php";
});

$("#comms").click(function(e) {
    e.preventDefault();
    window.location.href = "./commentaire.php";
});


/* COMPTEUR */

$(document).ready(function() {
    let articlesMax = $("#articles").text();
    let articlesNb = 0;
    articles = setInterval(() => {
        articlesNb = articlesNb + 3;
        $("#articlesNb").text(articlesNb);
        if (articlesNb >= articlesMax) {
            $("#articlesNb").text(articlesMax);
            clearInterval(articles);
        }
    }, 100);

    let clientsMax = $("#clients").text();
    let clientsNb = 0;
    clients = setInterval(() => {
        clientsNb = clientsNb + 3;
        $("#clientsNb").text(clientsNb);
        if (clientsNb >= clientsMax) {
            $("#clientsNb").text(clientsMax);
            clearInterval(clients);
        }
    }, 100);

    let commsMax = $("#comms").text();
    let commsNb = 0;
    comms = setInterval(() => {
        commsNb = commsNb + 3;
        $("#commsNb").text(commsNb);
        if (commsNb >= commsMax) {
            $("#commsNb").text(commsMax);
            clearInterval(comms);
        }
    }, 100);
})