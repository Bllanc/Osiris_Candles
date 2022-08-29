$(".brush").click(function (e) {
  //Au click sur le pinceau
  $("#valid_" + e.target.id).show(); //Apparation du bouton de validation de la card
  $("#task_" + e.target.id).hide(); //Apparation du bouton de validation de la card
  $(".nom_fondant_" + e.target.id + "").prop("disabled", false); // Puis activation des inputs
  $(".img_fondant_1_" + e.target.id + "").prop("disabled", false);
  $(".poids_forme_1_" + e.target.id + "").prop("disabled", false);
  $(".prix_forme_1_" + e.target.id + "").prop("disabled", false);
  $(".stock_forme_1_" + e.target.id + "").prop("disabled", false);
  $(".promo_fondant_" + e.target.id + "").prop("disabled", false);
});
