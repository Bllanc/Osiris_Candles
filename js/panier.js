$(document).ready(function () {
  let qte = 0;

  $(".plus").on("click", function () {
    qte++;
    $("#compteur").text(qte);
  });

  $(".moins").on("click", function () {
    qte--;
    $("#compteur").text(qte);
  });
  $.ajax({
    //L'URL de la requête
    url: "../controleur/panier.php",
    //La méthode d'envoi (type de requête)
    type: "POST",
    // J'inclus les données
    data: datas,
    //Le format de réponse attendu
    dataType: "json",
  })
    //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
    /*On peut par exemple convertir cette réponse en chaine JSON et insérer
     * cette chaine dans un div id="res"*/
    .done(function (response) {
      let data = JSON.stringify(response);
      $("div#qte").append(data);
    });
});
