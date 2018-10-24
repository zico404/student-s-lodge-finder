$(function(){

    M.AutoInit();
    $('.dropdown-trigger').dropdown();
    $('#home-slider').slider({
        height : $(window).height()
    });
    $('.lodge-slider').slider({
        height : 250,
        indicators : false
    });
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
    $('.datepicker').datepicker();
    $('.timepicker').timepicker();
    $('.tooltipped').tooltip();
    $('.chips').chips();

    //

    $('#lodge-tab').tabs();

    //Sticky sidebar 

    var $sidebar = $(".search-lodge"),
        $footer = $("#footer"),
        $window = $(window),
        offset = $sidebar.offset(),
        noffset = $footer.offset(),
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