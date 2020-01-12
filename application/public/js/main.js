$(function () {
    // Прилипающее меню
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 110) {
            $('section.menu').addClass('stickytop');
        } else {
            $('section.menu').removeClass('stickytop');
        }
    });


    // Плавное перемещение по якорю



    // Гамбургер
    (function () {

        "use strict";

        var toggles = document.querySelectorAll(".c-hamburger");

        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };

        function toggleHandler(toggle) {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active"): this.classList.add("is-active");
            });
        }

    })();
    
    $('#c-hamburger--htx').click(function () {
        if ($(this).hasClass('is-active')) {
            $('#menu-mobile').addClass('d-block');
            $('#menu-mobile').removeClass('d-none');
            //alert('Yes');
        } else {
            $('#menu-mobile').addClass('d-none');
            $('#menu-mobile').removeClass('d-block');
            //alert('No');
        }/**/
    });

});
