$(window).on('load',function(){
    var counter = 0;
    var c = 0;
    var i = setInterval(function () {
        $(".loading--page .counter h2").html(c + "%");
        $(".loading--page .counter hr").css("width", c + "%");

        counter++;
        c++;

        if (counter == 101) {
            clearInterval(i);
            $('.loading--page').fadeOut('slow');
        }
    }, 10);
});