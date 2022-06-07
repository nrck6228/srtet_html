AOS.init({
    duration: 1000,
});

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
    // $(this).scrollTop() > 50 ? $(".header--desktop").addClass("header--desktop__animate") : $(".header--desktop").removeClass("header--desktop__animate");
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
      $(this).scrollTop() > 50 ? $(".header--mobile").addClass("header--mobile__animate") : $(".header--mobile").removeClass("header--mobile__animate");
    } else {
        $(this).scrollTop() > 50 ? $(".header--desktop").addClass("header--desktop__animate") : $(".header--desktop").removeClass("header--desktop__animate");
    }
});

$(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    // $(".header--mobile").toggleClass("header--mobile__open");
    $(".mobile--nav").toggleClass("mobile--nav__open");

    $("body").toggleClass('open-menu');
}); 


$(".regularFont").click(function(){
    $("html").css("font-size",'100' + "%");
}); 

$(".downFont").click(function(){
    $("html").css("font-size",'90'+ "%");
}); 

$(".upFont").click(function(){
    $("html").css("font-size",'110' + "%");
}); 


$('.form-control').on('focusout', function (){
    if($(this).val() != ''){
      $(this).parent().addClass('has-data');
    } else {
      $(this).parent().removeClass('has-data');
    }
});
$('.form-control').each(function () {
    if($(this).val() != ''){
        $(this).parent().addClass('has-data');
      } else {
        $(this).parent().removeClass('has-data');
    }
});

$('.form-select').each(function () {
	if($(this).is('select')){		
        if($(this).val() === $("option:first", $(this)).val()) {
			$(this).parent().removeClass('has-data');
		}
		else{
			$(this).parent().addClass('has-data');
		}
	}
});
$('.form-select').on('change', function () {
	if($(this).is('select')){
		if($(this).val() === $("option:first", $(this)).val()) {
			$(this).parent().removeClass('has-data');
		}
		else{
			$(this).parent().addClass('has-data');
		}
	}
});

var btnCopy = document.getElementById('btnCopy');
btnCopy.addEventListener('click', function(){
    if (document.execCommand('copy')){
        btnCopy.classList.add('copied');
        
        var temp = setInterval(function(){
            btnCopy.classList.remove('copied');
            clearInterval(temp);
        }, 600 );
        
    } else {
        console.info( 'document.execCommand went wrong…' )
    }
    return false;
});