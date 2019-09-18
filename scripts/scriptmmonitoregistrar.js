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


$(function () {

    $('#consultarmonitors').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $("#consultarmonitors").attr("action"),
            type: $("#consultarmonitors").attr("method"),
            data: $("#consultarmonitors").serialize(),
            success: function (data) {
                if (data != "") {
                    $("#divfomr").empty();
                    $("#divfomr").html(data);
                    
                    
                } else {
                    $("#divfomr").empty();
                    swal("Opps!", "La persona no se encuentra registrado en la base de datos de siabuc", "error");
                }
            }
        });

    });

});
