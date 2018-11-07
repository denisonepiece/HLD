$('#site').on('click', function() {
    var id = 0;
    $.ajax({
        url:'/site/case-list',
        data: {id: id},
        type: 'GET',
        success: function(result){
            $('.content').html(result);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});

$('#site1').on('click', function() {
    var id = 1;
    $.ajax({
        url:'/site/case-list',
        data: {id: id},
        type: 'GET',
        success: function(result){
            $('.content').html(result);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});

$('#site2').on('click', function() {
    var id = 3;
    $.ajax({
        url:'/site/case-list',
        data: {id: id},
        type: 'GET',
        success: function(result){
            $('.content').html(result);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});

$('#site3').on('click', function() {
    var id = 4;
    $.ajax({
        url:'/site/case-list',
        data: {id: id},
        type: 'GET',
        success: function(result){
            $('.content').html(result);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});

$(document).ready( function () {
    var id = 0;
    $.ajax({
        url:'/site/case-list',
        data: {id: id},
        type: 'GET',
        success: function(result){
            $('.content').html(result);
        },
        error: function () {
            alert('Error!');
        }
    });
});

$(".selectActive ul li a").click(function(e) {
    e.preventDefault();
    $(".selectActive ul li a").removeClass('link-nav__active');
    $(this).addClass('link-nav__active');
})