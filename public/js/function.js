$(window).on('load',function(){
    var counter = 0;
    var c = 0;
    var i = setInterval(function () {
        $(".loading--page .counter h2").html(c + "%");
        // $(".loading--page .counter hr").css("width", c + "%");

        counter++;
        c++;

        if (counter == 101) {
            clearInterval(i);
            $('.loading--page').fadeOut('slow');
        }
    }, 20);
});

$(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    // $(".header--mobile").toggleClass("header--mobile__open");
    $(".mobile--nav").toggleClass("mobile--nav__open");

    $("body").toggleClass('open-menu');
}); 
