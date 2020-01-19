$('.direction-blocks').slick({
    arrows: false,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 1
});
$(document).ready(function () {
    var menuBtn = $('.top-nav_btn')
    var sidebarBtn = $('.left-sidebar_btn')
    var menu = $('.top-nav_menu')
    var sidebarmenu = $('.left-sidebar_menu')

    $('[data-target="modal"]').on('click', function(event){
        event.preventDefault();
        $('.modal').show();
    }); 

    $('.close').on('click', function(event){
        event.preventDefault();
        $('.modal').hide();
    });

    menuBtn.on('click', function(event) {
        event.preventDefault();
        menu.toggleClass('top-nav_menu__active')
    });
    sidebarBtn.on('click', function (event) {
        event.preventDefault();
        sidebarmenu.toggleClass('left-sidebar__active')
    }); 

        var elem = document.querySelector('.calc-range');
        var init = new Powerange(elem, { min: 100000, max: 3000000, start: 100000, hideRange: true, step: 100000 });
        var per, month, result, total, monthly;
        var money = +$('.calc-range').val(); 
        
        $('input[name="programms"]').on('change', function(event){
         month = +$(this).attr('data-month');
         per = +$(this).attr('data-per');
         result = Math.round(per / 12 * month * money)
         total = result + money
            monthly = parseInt(result / month)
         $('#total').text(total.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '))
         $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '))
         $('#month').text(month)
        });

        $('.calc-range').on('change', function (event) {
            $('.calc-summ_invest_num span').text($(this).val().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '))
            var radio = $('input[name="programms"]:checked');
            money = +$(this).val()
            month = +radio.attr('data-month');
            per = +radio.attr('data-per');
            result = Math.round(per / 12 * month * money)
            total = result + money
            monthly = parseInt(result / month)
            $('#total').text(total.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '))
            $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '))
            console.log(per);
            console.log(month);
        });

});

