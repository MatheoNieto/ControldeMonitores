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
//============================================================
function openNav() {
    document.getElementById("mySidenav").style.width = "450px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function () {
    var intervaloconce = setInterval(knowhaveconexion, 1000);

    $('#modifymonitoria').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $("#modifymonitoria").attr("action"),
            type: $("#modifymonitoria").attr("method"),
            data: $("#modifymonitoria").serialize(),
            complete: function (data) {
                swal("Listo", "Se modifico correctamente", "success");
                cargardator();
            }
        });

    });

    $("#fomrconsultahm").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: $("#fomrconsultahm").attr("action"),
            type: $("#fomrconsultahm").attr("method"),
            data: $("#fomrconsultahm").serialize(),
            beforeSend: function () {
                swal("Información", "Consultando por favor espere", "info");
            },
            success: function (data) {
                var table = $('#example').DataTable();
                table.destroy();

                $("#informonitore").empty();
                $("#informonitore").html(data);

                var renge = $("#config-demo").val();
                $("#rangofecham").html("<b>Rango fecha de la consulta: </b>" + renge);

                var opcion_seleccionada = $("#tipom option:selected").text();
                $("#tipoml").html("<b>Tipo monitoria: </b>" + opcion_seleccionada);

                

                document.getElementById("mySidenav").style.width = "0";
                swal("Listo!", "Se cargarón los datos correctamente", "success");

                $("#contentdelainfoc").show("slow");

            }
        });


    });

    $('#fmnovedades').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $("#fmnovedades").attr("action"),
            type: $("#fmnovedades").attr("method"),
            data: $("#fmnovedades").serialize(),
            complete: function (data) {
                swal("Listo", "Se registro correctamente", "success");
                cargardator();
            }
        });

    });

});