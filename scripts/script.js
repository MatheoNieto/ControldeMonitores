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
    /*************************************************************************************************
                                    SCRIPTS PARA EL MENU
    **************************************************************************************************/
    $("#container2").hide();
    $("#container3").hide();
    $("#infodelini").collapse('hide');

    $("#itemmonitores").click(function () {
        $("#container").hide();
        $("#container2").show();
    });
    $("#backmp").click(function () {
        $("#container").show();
        $("#container2").hide();
    });
    $("#itmmonittori").click(function () {
        $("#container").hide();
        $("#container3").show();
    });
    $("#backmp2").click(function () {
        $("#container").show();
        $("#container3").hide();
    });
    $("#btnsolicutudes").click(function () {
        swal("Lo sentimos", "Este modulo se esta desarrollando", "info");
    });

    /*************************************************************************************************
                                 FIN SCRIPTS PARA EL MENU
******************************************************************************************************/
    /*************************************************************************************************
                                 MODALES DE INICIO Y FIN DE SESION
******************************************************************************************************/

    $("#mdlisesion").click(function () {

        $("#mdlinsession").modal("show");
    });
    $("#btnregisnovedades").click(function () {

        $("#mdlregisrnoved").modal("show");
    });



    /*************************************************************************************************
                                 MODALES DE INICIO Y FIN DE SESION
******************************************************************************************************/


});

/*************************************************************************************************
                                 Envio de datos 
******************************************************************************************************/
$(function () {

    $('#formconfi0').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            url: $("#formconfi0").attr("action"),
            type: $("#formconfi0").attr("method"),
            data: $("#formconfi0").serialize(),
            complete: function (data) {
                swal("Listo", "cambio el precio de los monitores", "success");
            }
        });

    });



    $('#formulariocambiardatos').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            url: $("#formulariocambiardatos").attr("action"),
            type: $("#formulariocambiardatos").attr("method"),
            data: $("#formulariocambiardatos").serialize(),
            success: function (data) {
                if (data) {
                    swal("Opps!", "No se registro, revise si ya esta registrado o intente de nuevo ", "error");
                } else {
                    swal("Listo", "Se modifico los datos", "success");
                }

            }
        });

    });

    $('#formconfi1').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            url: $("#formconfi1").attr("action"),
            type: $("#formconfi1").attr("method"),
            data: $("#formconfi1").serialize(),
            complete: function (data) {
                swal("Listo", "cambio el precio de los practicantes", "success");
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
                swal("Listo", "Se registro la monitoria correctamente", "success");
                $("#fmnovedades")[0].reset();
            }
        });

    });
    $('#cambiaprecios').on('submit', function (e) {

        e.preventDefault();
           var prcion1 = $("#precio1").val();
           var id1 =$("#id1").val();
           var prcion2 = $("#precio3").val();
           var id2 = $("#id3").val();
            
        var ddatos = [
        {
            "precio":prcion1,
            "id":id1
        },{
            "precio":prcion2,
            "id":id2
        }
    ];
    var datos = JSON.stringify(ddatos);    
    var parametro = {"prdvendi":datos}

        $.ajax({
            url: $("#cambiaprecios").attr("action"),
            type: $("#cambiaprecios").attr("method"),
            data: parametro,
            complete: function (data) {
                swal("listo","se modifico correctamente","success");
                
            }
        });

    });


    $('#forminisesion').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $("#forminisesion").attr("action"),
            type: $("#forminisesion").attr("method"),
            data: $("#forminisesion").serialize(),
            success: function (data) {
                if (!data) {
                     swal("Listo", "Se inicio sesión correctamente", "success");
                    $("#forminisesion")[0].reset();
                   
                } else {
                    swal("Opps!", "El monitor tiene un sesión sin finalizar", "error");
                    $("#mdlinsession").modal("hide");
                    actuliazlist();
                    var txt = $("#codigomini").val();
                    $("#codigomfini").val(txt);
                     $("#forminisesion")[0].reset();

                }
            }
        });

    });
    $('#formfinsesion').on('submit', function (e) {
        e.preventDefault();
        var id = $("#idmonitoria").text();
        var fechafin = $("#fechafnni").text();
        var typemntria = $("#slctpmoniriafin").val();
        var descmonitor = $("#descricmoni").val();
        var parametros = {
            "id": id,
            "fechafinmonitoria": fechafin,
            "tipodemonitoria": typemntria,
            "descripcionmonitoria": descmonitor
        };

        $.ajax({
            url: $("#formfinsesion").attr("action"),
            type: $("#formfinsesion").attr("method"),
            data: parametros,
            success: function (data) {
                
                    $("#infodelini").collapse('hide');
                    $("#codigomfini").val("");
                swal("Listo","Se finalizo sin lios","success");
                actuliazlist();
            }
        });

    });
});



/*************************************************************************************************
                                 fin de Envio de datos 
******************************************************************************************************/







$(function () {

    $('.navbar-toggler').on('click', function (event) {
        event.preventDefault();
        $(this).closest('.navbar-minimal').toggleClass('open');
    })
});







'use strict';

class Menu {
    /**
     * @constructor
     * @param  {Element} containerEl
     * @return {void}
     */
    constructor(containerEl) {
        this.containerEl = containerEl;

        this.init();
    }

    /**
     * Find the height of the tallest element in a NodeList of elements
     * @param  {NodeList} els
     * @return {number}
     */
    findMaxHeight(els) {
        let tallestEl = Array.from(els).reduce((tallestEl, currentEl) => {
            return tallestEl.offsetHeight > currentEl.offsetHeight ? tallestEl : currentEl;
        });

        return tallestEl.offsetHeight;
    }

    /**
     * Equalise all the heights of a NodeList of elements based on the tallest element
     * @param  {NodeList} els
     * @return {void}
     */
    matchElsHeight(els) {
        let maxHeight = this.findMaxHeight(els);

        Array.from(els).forEach((el) => {
            el.style.height = maxHeight + 'px';
        });
    }

    /**
     * Set the hover animations of the thumbnails
     */
    setHover() {
        Array.from(this.containerEl.querySelectorAll('.item__link')).forEach((el) => {
            let thumbEl = el.querySelector('.js-thumb');
            let reflectionEl = el.querySelector('.js-reflection');

            el.addEventListener('mouseenter', (evt) => {
                evt.stopPropagation();

                thumbMouseEnterAnimation(thumbEl);
                thumbMouseEnterAnimation(reflectionEl, true);
            });

            el.addEventListener('mouseleave', (evt) => {
                evt.stopPropagation();

                if (thumbEl.classList.contains('velocity-animating')) {
                    thumbMouseOutAnimation(thumbEl);
                }
                if (reflectionEl.classList.contains('velocity-animating')) {
                    thumbMouseOutAnimation(reflectionEl);
                }
            });
        });

        /**
         * Animation that happens when mouseenter event fires
         * @param  {Element}  thumbEl
         * @param  {Boolean} isReflection if thumbEl meant to have scaleY(-1) applied to it before the animation
         * @return {void}
         */
        function thumbMouseEnterAnimation(thumbEl, isReflection) {
            isReflection = isReflection || false;

            if (isReflection) {
                Velocity.hook(thumbEl, "scaleY", "-1");
            }
            Velocity(thumbEl, {
                    translateZ: 0,
                    translateY: '-18px'
                }, {
                    duration: 1000
                })
                .then(
                    Velocity(thumbEl, {
                        translateZ: 0,
                        translateY: '-5px'
                    }, {
                        duration: 1000,
                        loop: true
                    })
                );
        }

        /**
         * Animation that happens when mouseleave event fires
         * @param  {Element} thumbEl
         * @return {void}
         */
        function thumbMouseOutAnimation(thumbEl) {
            Velocity(thumbEl, "stop", true).then(
                Velocity(thumbEl, {
                    translateZ: 0,
                    translateY: 0
                }, {
                    duration: 800,
                    easing: 'easeOutCubic'
                })
            );
        }
    }

    static create(containerEl) {
        return new Menu(containerEl);
    }

    /**
     * Initialize the menu
     * @return {void}
     */
    init() {
        imagesLoaded(this.containerEl, () => {
            this.matchElsHeight(this.containerEl.querySelectorAll('.item__thumb-container'));
            this.matchElsHeight(this.containerEl.querySelectorAll('.item__reflection-container'));

            this.setHover();
        });
    }
}

Menu.create(document.getElementById('container'));
