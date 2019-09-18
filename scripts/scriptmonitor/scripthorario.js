history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};
document.oncontextmenu = function () {
    return false
}

document.oncontextmenu = function () {
    return false
}

function right(e) {

    if (navigator.appName == 'Netscape' && e.which == 3) {
        alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
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

    
    $("#formschedule").submit(function (event) {

        event.preventDefault();
        $.ajax({
            url: $("#formschedule").attr("action"),
            type: $("#formschedule").attr("method"),
            data: $("#formschedule").serialize(),
            beforeSend: function(){
               swal("Registrando..","Por favor espere","info");
              },
            success: function (data) {
             if(data){
                swal("Opps!","Intentalo de nuevo","error");
             }else{
                swal("Listo!","Se registro correctamente","success");
                location.reload();
                
             }
            }
        });


    });

});


