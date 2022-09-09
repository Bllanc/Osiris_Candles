$("#tab_bord,#retour1,#retour2,#retour3").click(function() {
    $("#bord").show();
    $("#tab_bord").addClass("#f6d1d8");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("#f6d1d8");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("#f6d1d8");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("#f6d1d8");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("#f6d1d8");
});

$("#infos_compte, #edit").click(function() {
    $("#info_compte,#retour1,#save,#obligatoire").show();
    $("#infos_compte").addClass("#f6d1d8");
    $("#bord").hide();
    $("#tab_bord").removeClass("#f6d1d8");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("#f6d1d8");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("#f6d1d8");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("#f6d1d8");
});

$("#adresse,#edit_adr, .edit_adr2").click(function() {
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").show();
    $("#adresse").addClass("#f6d1d8");
    $("#bord").hide();
    $("#tab_bord").removeClass("#f6d1d8");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("#f6d1d8");
    $("#mes_commandes,#retour3").hide();
    $("#commande").removeClass("#f6d1d8");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("#f6d1d8");
});
$("#commande").click(function() {
    $("#mes_commandes,#retour3").show();
    $("#commande").addClass("#f6d1d8");
    $("#bord").hide();
    $("#tab_bord").removeClass("#f6d1d8");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("#f6d1d8");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("#f6d1d8");
    $("#fidelite,#retour4").hide();
    $('#fidel').removeClass("#f6d1d8");
});

$("#fidel").click(function() {
    $("#fidelite,#retour4").show();
    $("#fidel").addClass("#f6d1d8");
    $("#bord").hide();
    $("#tab_bord").removeClass("#f6d1d8");
    $("#info_compte,#retour1,#save,#obligatoire").hide();
    $("#infos_compte").removeClass("#f6d1d8");
    $("#carnet_adresse,#retour2,#save2,#obligatoire2").hide();
    $("#adresse").removeClass("#f6d1d8");
    $("#infos_compte").removeClass("#f6d1d8");
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