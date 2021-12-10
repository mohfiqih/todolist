(function ($) {

    'use strict';

    function initLeftMenuCollapse() {
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('sidebar-enable');
            if ($(window).width() >= 992) {
                $('body').toggleClass('vertical-collpsed');
            } else {
                $('body').removeClass('vertical-collpsed');
            }
        });
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#side-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("menuitem-active");
            }
        });
    }

    function init() {
        initLeftMenuCollapse();
        initActiveMenu();
    }

    init();

})(jQuery)