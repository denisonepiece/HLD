$(function () {
    $('.modal-open').click(function () {

    	// Модальное окно выезжающее справа
        $('.modal__wrapper').toggleClass('active');

        // Модальное окно для уведомлений отправки и т.д..
        $('.modal--alert__wrapper').toggleClass('active');

        // Блюр заднего фона
        $('.modal__blur ').toggleClass('active');

        // Убераем прокрутку        
        $('body').toggleClass('modalActive');
    });
});

// Фунцияя закрытия окон по нажатию на кнопки или блюр
$(function () {
    $('.modal__close, .modal__blur').click(function () {
        $('.modal__wrapper').removeClass('active');
        $('.modal--alert__wrapper').removeClass('active');

        $('.modal__blur ').removeClass('active');
        $('body').removeClass('modalActive');        
    });
});

