$(function(){
    M.AutoInit();
    $('.dropdown-trigger').dropdown();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
    $('.datepicker').datepicker();
    $('.tabs').tabs();
    $('.timepicker').timepicker();
    $('.tooltipped').tooltip();
    $('.chips').chips();

    //Sticky sidebar 

    var $sidebar = $("#sidebar"),
        $newsletter = $("#newsletter"),
        $window = $(window),
        offset = $sidebar.offset(),
        noffset = $newsletter.offset(),
        topPadding = 15,
        threshold = noffset.top - $sidebar.height() - offset.top;

        $window.scroll(function(){

            if ($window.scrollTop() >= threshold){
                $sidebar.stop().animate({
                    marginTop:threshold});
            }
            else if ($window.scrollTop() >= offset.top){

                $sidebar.stop().animate({
                    marginTop:$window.scrollTop() - offset.top + topPadding});
            }
            else{
                $sidebar.stop().animate({
                    marginTop:0
                });
            }
        });
});