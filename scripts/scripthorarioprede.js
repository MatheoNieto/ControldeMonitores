history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};
document.oncontextmenu = function () {
    return false
}

function right(e) {

    if (navigator.appName == 'Netscape' && e.which == 3) {
        return false;
    } else if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2) {

        return false;
    }
    return true;
}
document.onmousedown = right;

function knowhaveconexion() {
    var onfline = navigator.onLine ? 'online' : 'offline';
    if (onfline == "offline") {
        swal("Opps!", "La pc se encuentra sin internet. Por Favor conectarse a internet", "error");
    }
}


$(document).ready(function(){
      var intervaloconce = setInterval(knowhaveconexion, 1000);
      daytoday();

      $('#formrgisthorario').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $("#formrgisthorario").attr("action"),
            type: $("#formrgisthorario").attr("method"),
            data: $("#formrgisthorario").serialize(),
            complete: function (data) {
                location.reload();

            }
        });

    });

      $('#formmodificar').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $("#formmodificar").attr("action"),
            type: $("#formmodificar").attr("method"),
            data: $("#formmodificar").serialize(),
            complete: function (data) {
                location.reload();
                
            }
        });

    });
});


function daytoday(){
    switch (new Date().getDay()) {
        case 1:
          $(".item").removeClass("active");
          $("#divlun").addClass("active");
          break;
        case 2:
            $(".item").removeClass("active");
            $("#divmart").addClass("active");
          break;
        case 3:
            $(".item").removeClass("active");
            $("#divmier").addClass("active");
          break;
        case 4:
            $(".item").removeClass("active");
            $("#divjuev").addClass("active");
          break;
        case 5:
            $(".item").removeClass("active");
            $("#divvier").addClass("active");
          break;
        case 6:
            $(".item").removeClass("active");
            $("#divsab").addClass("active");
      }



}