$(function () {
    $('.responsive-navigation__humburger').click(function () {
        $('.responsive-navigation__humburger').toggleClass('humburger-active');
        $('.navigation').toggleClass('navigation-active');
        $('body').toggleClass('modalActive');
    });
});


