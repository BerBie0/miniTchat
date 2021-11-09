$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.topbar').addClass("sticky");
            $('.hand').addClass("isScroll");
        }else{
            $('.topbar').removeClass("sticky");
            $('.hand').removeClass("isScroll");
        }
    });
});