history.pushState(null, null, location.href);
window.onpopstate = function() {
    history.go(1);
};
document.oncontextmenu = function() {
    return false;
};

function right(e) {
    if (navigator.appName == "Netscape" && e.which == 3) {
        return false;
    } else if (
        navigator.appName == "Microsoft Internet Explorer" &&
        event.button == 2
    ) {
        return false;
    }
    return true;
}
document.onmousedown = right;


$(function() {
    $("#cambiarcontrasena").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
            url: $("#cambiarcontrasena").attr("action"),
            type: $("#cambiarcontrasena").attr("method"),
            data: $("#cambiarcontrasena").serialize(),
            complete: function(data) {
                swal(
                    "listo",
                    "Se restableció la contraseña correctamente",
                    "success"
                );
                $("#cambiarcontrasena")[0].reset();
            }
        });
    });
});
