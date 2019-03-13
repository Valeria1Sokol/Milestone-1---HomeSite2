$(function () {
    $(window).scroll(function () {

        var menu = $('.navBox');
        var menu_fixed = 'navBoxFix';
        var header = $('.navBox').height();
        if ($(this).scrollTop() > header) {
            menu.addClass(menu_fixed);
        }
        else {
            menu.removeClass(menu_fixed);
        }
    }).trigger('scroll');
});

