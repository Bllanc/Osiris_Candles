$("document").ready(function () {
  $(".modif").click(function () {
    $(".validation").toggle();
  });
  $("#bougie").click(function () {
    $(".bougie").toggle("slow");
    $(".fondant").hide();
    $(".fiole").hide();
    $(".coffret").hide();
    $(".resine").hide();
    $(".brume").hide();
  });
  $("#fondant").click(function () {
    $(".bougie").hide();
    $(".fondant").toggle("slow");
    $(".fiole").hide();
    $(".coffret").hide();
    $(".resine").hide();
    $(".brume").hide();
  });
  $("#fiole").click(function () {
    $(".bougie").hide();
    $(".fondant").hide();
    $(".fiole").toggle("slow");
    $(".coffret").hide();
    $(".resine").hide();
    $(".brume").hide();
  });
  $("#coffret").click(function () {
    $(".bougie").hide();
    $(".fondant").hide();
    $(".fiole").hide();
    $(".coffret").toggle("slow");
    $(".resine").hide();
    $(".brume").hide();
  });
  $("#resine").click(function () {
    $(".bougie").hide();
    $(".fondant").hide();
    $(".fiole").hide();
    $(".coffret").hide();
    $(".resine").toggle("slow");
    $(".brume").hide();
  });
  $("#brume").click(function () {
    $(".bougie").hide();
    $(".fondant").hide();
    $(".fiole").hide();
    $(".coffret").hide();
    $(".resine").hide();
    $(".brume").toggle("slow");
  });
});
