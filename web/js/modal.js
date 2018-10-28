$(function () {
    $('.modal-open').click(function () {
        $('.modal__wrapper').toggleClass('active');
        $('.modal__blur ').toggleClass('active');
        $('body').toggleClass('modalActive');
    });
});


$(function () {
    $('.modal__close').click(function () {
        $('.modal__wrapper').removeClass('active');
        $('.modal__blur ').removeClass('active');
        $('body').removeClass('modalActive');        
    });
});