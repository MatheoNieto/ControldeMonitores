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

$(document).ready(function () {

    var intervaloconce = setInterval(knowhaveconexion, 1000);


    $("#filtarbitac").submit(function (event) {

        event.preventDefault();
        $.ajax({
            url: $("#filtarbitac").attr("action"),
            type: $("#filtarbitac").attr("method"),
            data: $("#filtarbitac").serialize(),
            beforeSend: function(){
               swal("Información","Consultando, por favor espere","info");
              },
            success: function (data) {
                const tables = $('#example').DataTable();
                tables.destroy();
                $("#tbodu").empty();
                $("#tbodu").html(data);
                $("#khsdfjk").show("slow");
                swal("Listo", "Se cargarón los datos correctamente", "success");
            }
        });


    });

});