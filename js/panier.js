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
});
