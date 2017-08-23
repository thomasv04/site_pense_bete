
$(document).ready(function() {

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $(".burger").click(function(){
        if($('#menu').hasClass("show")){
            $('#menu').removeClass("show");
        }else{
            $('#menu').addClass("show");
        }

    });

    $("#menu").click(function(){

        $('#menu').removeClass("show");


    });







    $('body').append('<div id="returnOnTop" title="Retour en haut">&nbsp;</div>');

    // On button click, let's scroll up to top
    $('#returnOnTop').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });



    var position_top_raccourci = $('#menu').offset().top;
    var position_top_comp = $('#competences').offset().top;
    var position_top_acc = $('header').offset().top;
    var position_top_pers = $('#infos_perso').offset().top;
    var position_top_con = $('#contact').offset().top;
    var position_top_propos = $('#propos').offset().top;
    var test = position_top_acc + 50 ;


    var colors = ["#99B3FF", "#799979", "#F44336", "#00B0FF" , "#9C27B0", "#3F51B5", "#00BCD4", "#FFD821", "#FF5722", "#F7CA00", "#F50057", "#455D7A", "#F95959" ];
    var choix_color = colors[Math.floor(Math.random()*colors.length)];

    $("#filter").each(function()
                      {
        $(this).css('background-color', choix_color);
    });

    $("#menu").each(function()
                    {
        $(this).css('background', choix_color);
    });

    $(".titre").each(function()
                     {
        $(this).css('border-color', choix_color);
        $(this).css('color', choix_color);
    });

    $(".progressBarValue").each(function()
                                {
        $(this).css('background', choix_color);
    });

    $("#contact button").each(function()
                              {
        $(this).css('background-color', choix_color);
        $(this).css('border-color', choix_color);
    });

    $(".timeline ul li div").each(function()
                                  {
        $(this).css('background-color', choix_color);
        $(this).css('border-color', choix_color);
    });

    $("footer").each(function()
                     {
        $(this).css('background-color', choix_color);
    });

    $("#contact input").each(function()
                             {
        $(this).css('color', choix_color);
    });

    $("#contact textarea").each(function()
                                {
        $(this).css('color', choix_color);
    });














    $(window).scroll(function () {
        if ($(this).scrollTop() > position_top_propos) {
            $('#menu').addClass("fixed");

            $(".fixed").each(function()
                             {
                $(this).css('border-color', choix_color);
            });

        }
        if ($(this).scrollTop() < test) {
            $('#menu').removeClass("fixed");
        }

        if ( $(window).scrollTop() < position_top_propos )
            $('#returnOnTop').fadeOut();
        else
            $('#returnOnTop').fadeIn();






    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    var items = document.querySelectorAll(".timeline li");


    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("scroll", callbackFunc);

});




