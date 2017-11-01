function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); // how many pixels you've scrolled
        var os = $('#div1').offset().top; // pixels to the top of div1
        var ht = $('#div1').height(); // height of div1 in pixels
        // if you've scrolled further than the top of div1 plus it's height
        // change the color. either by adding a class or setting a css property
        if(scroll > os + ht){
            $('#div2').addClass('blue');
        }
    });
});