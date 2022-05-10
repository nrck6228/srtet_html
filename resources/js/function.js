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

    const current_element = document.getElementById('NavBar');
    const clonearea = document.getElementById('collapseMobileNav');
    const clone = current_element.cloneNode(true);
    clonearea.appendChild(clone);
});

// scroll animated logo
$(window).on("scroll", function (t) {
    $(this).scrollTop() > 50 ? $(".header--desktop").addClass("header--desktop__animate") : $(".header--desktop").removeClass("header--desktop__animate");
    // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    //   $(this).scrollTop() > 50 ? $(".header--mobile").addClass("header--mobile__animate") : $(".header--mobile").removeClass("header--mobile__animate");
    // } else {
    //     $(this).scrollTop() > 50 ? $(".header--desktop").addClass("header--desktop__animate") : $(".header--desktop").removeClass("header--desktop__animate");
    // }
});

$(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    // $(".header--mobile").toggleClass("header--mobile__open");
    $(".mobile--nav").toggleClass("mobile--nav__open");

    $("body").toggleClass('open-menu');
}); 

// Home-->News(Tab)
$("#tab_1").click(function(){
    $(".page__readmore").attr("href", "/news")
}); 
$("#tab_2").click(function(){
    $(".page__readmore").attr("href", "/news2")
}); 
$("#tab_3").click(function(){
    $(".page__readmore").attr("href", "/news3")
}); 
