$(window).scroll(function() {
    if ($(this).scrollTop() > 90){
        $('.go-brif').addClass("active");
    }
    else{
        $('.go-brif').removeClass("active");
    }
});