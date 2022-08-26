$('document').ready(function() {
    $('.moins').click(function(e) {
        e.preventDefault();
        if ($(this).next('input').val() > 0) {
            $(this).next('input').val($(this).next('input').val() - 1); // on diminue la valeur de l'input suivant le button -
            $("#quantite_" + $(this).attr('name')).val($(this).next('input').val());
        }
    });
    $('.plus').click(function(e) {
        e.preventDefault();
        $(this).prev('input').val(parseInt($(this).prev('input').val()) + 1); // on augmente la valeur de l'input précèdent le button +
        $("#quantite_" + $(this).attr('name')).val($(this).prev('input').val());
    });

    $('.fondant_radio').change(function() {
        let id_produit = $(this).attr('id').split('_')[1]; /* recuperation de l'id produit */
        let prix_unite = $('.prix_unit' + id_produit).val(); /* prix à l'unité + id du fondant*/
        let prix_fin = prix_unite * $(this).val(); /* multiplication du prix par 5 ou 10 selon l'input choisie*/
        $('.prix_end' + id_produit).val(prix_fin); /* prix final avec la multiplication*/
        $(".prixs" + id_produit).html(prix_fin.toFixed(2) + "€"); /* affichage du prix dans le p */
    });

    $('#fio').click(function() {
        $('.brume,.bruH1,.bruHr').hide();
        $('.fiole,.fioH1,.fioHr').toggle('slow');
    })
    $('#bru').click(function() {
        $('.brume,.bruH1,.bruHr').toggle('slow');
        $('.fiole,.fioH1,.fioHr').hide();
    })
});