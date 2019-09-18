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
    $("#btnsolicutudes").click(function(){
    swal("Lo sentimos","Este modulo se esta desarrollando","info");
    });
});



$(function () {
    
    $('.navbar-toggler').on('click', function(event) {
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
            }, {duration: 1000})
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


