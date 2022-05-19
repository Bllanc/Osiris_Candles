$("#tab_bord,#retour1,#retour2,#retour3").click(function() {
    $("#bord").show();
    $("#tab_bord").addClass("pink");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("pink");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("pink");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("pink");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("pink");
});

$("#infos_compte, #edit").click(function() {
    $("#info_compte,#retour1,#save,#obligatoire").show();
    $("#infos_compte").addClass("pink");
    $("#bord").hide();
    $("#tab_bord").removeClass("pink");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("pink");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("pink");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("pink");
});

$("#adresse,#edit_adr, .edit_adr2").click(function() {
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").show();
    $("#adresse").addClass("pink");
    $("#bord").hide();
    $("#tab_bord").removeClass("pink");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("pink");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("pink");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("pink");
});
$("#commande").click(function() {
    $("#mes_commandes,#retour3").show();
    $("#commande").addClass("pink");
    $("#bord").hide();
    $("#tab_bord").removeClass("pink");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("pink");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("pink");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("pink");
});

$("#fidel").click(function() {
    $("#fidelite,#retour4").show();
    $("#fidel").addClass("pink");
    $("#bord").hide();
    $("#tab_bord").removeClass("pink");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("pink");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("pink");
    $("#infos_compte").removeClass("pink");
    $("#mes_commandes,#retour3").hide();
});

$("#change_avatar").click(function() {
    $('#modal_avatar').modal();
    $("#modal_avatar").modal({
        fadeDuration: 250
    });
});

$(".change_avatar_click").click(function (e) { 
    e.preventDefault();
    let datas = {"image" : $(this).attr("name")} // déclaration des données
    $.ajax({
        type: "POST", // méthode utilisé
        url: "../bdd/update_user_image.php", // appel du fichier php de traitement
        data: datas, // j'inclus les données
        dataType: "json", // type des données
        success: function (response) {
            $(".avatar").attr("src", $(".avatar").attr("src").split("avatar/")[0] + "avatar/" + response.new_img) // changement d'image en js
            $.modal.close(); // fermeture de la modal en cours
        }
    });
});