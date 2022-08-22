$(".modif").submit(function (e) {
  //MODIFICATION DE LIGNES
  e.preventDefault();
  let id_fondant = $("input.id_fondant_" + e.target.name + "").val();
  let nom_fondant = $("textarea.nom_fondant_" + e.target.name + "").val();
  let img_fondant_1 = $("input.img_fondant_1_" + e.target.name + "")[0].files;
  let poids_fondant = $("input.poids_fondant_" + e.target.name + "").val();
  let stock_fondant = $("input.stock_fondant_" + e.target.name + "").val();
  let prix_fondant = $("input.prix_fondant_" + e.target.name + "").val();
  let promo_fondant = $("input.promo_fondant_" + e.target.name + "").val();
  let form_data = new FormData();
  form_data.append("id_fondant", id_fondant);
  form_data.append("nom_fondant", nom_fondant);
  form_data.append("img_fondant_1", img_fondant_1[0]);
  form_data.append("poids_fondant", poids_fondant);
  form_data.append("stock_fondant", stock_fondant);
  form_data.append("prix_fondant", prix_fondant);
  form_data.append("promo_fondant", promo_fondant);
  $.ajax({
    type: "POST", // METHOD D'ENVOIE
    url: "https://" + server + "/admin/update_fondant.php", // URL DE DESTINATION DE DONNER EN POST
    data: form_data, // L'OBJET DATA
    dataType: "json", // LE FORMAT DE RETOUR DES DONNER
    cache: false,
    processData: false,
    contentType: false,
    success: function (reponse) {
      console.log(reponse);
    },
  }).always(function () {
    $(".nom_fondant_" + e.target.name).prop("disabled", true);
    $(".img_fondant_1_" + e.target.name)
      .prop("disabled", true)
      .val("");
    $(".poids_fondant_" + e.target.name).prop("disabled", true);
    $(".stock_fondant_" + e.target.name).prop("disabled", true);
    $(".prix_fondant_" + e.target.name).prop("disabled", true);
    $(".promo_fondant_" + e.target.name).prop("disabled", true);
    alert("Produit modifier !");
    $("#valid_" + e.target.name).fadeOut("low");
  });
});

$(".validation").click(function (e) {
  $(".nom_fondant_" + e.target.name).prop("disabled", false);
  $(".img_fondant_1_" + e.target.name).prop("disabled", false);
  $(".poids_fondant_" + e.target.name).prop("disabled", false);
  $(".stock_fondant_" + e.target.name).prop("disabled", false);
  $(".prix_fondant_" + e.target.name).prop("disabled", false);
  $(".promo_fondant_" + e.target.name).prop("disabled", false);
  $(".img_fondant_1_" + e.target.name).change(function (ePhoto) {
    let spotted = ePhoto.target;
    let reader = new FileReader();
    reader.onload = function () {
      let dataURL = reader.result;
      let output = $(".preview_img_fondant_1_" + e.target.name);
      output.attr("src", dataURL);
    };
    reader.readAsDataURL(spotted.files[0]);
  });
});
