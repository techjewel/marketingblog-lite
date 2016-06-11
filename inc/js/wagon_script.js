jQuery(document).ready(function($){
    $(".site-nav-toggle").click(function(){
        $(".site-nav").toggle();
    });


    //nav arrow on mobiles
    $('.site-nav ul li.menu-item-has-children').each(function(){
        $(this).prepend('<i class="fa fa-caret-down menu-dropdown-icon"></i>');

    })
    $(document).on('click','.menu-dropdown-icon',function(){
        var submenu = 	$(this).parent('li').find('>ul.sub-menu');
        submenu.slideToggle();
    });

    $(window).resize(function() {
        //side header
        $('.side-header .site-nav .menu_column  .sub-menu').css({'width':$('.post-wrap').width()});
        // blog timeline
        $('.site-nav ul li .sub-menu').attr("style","");
        $('.site-nav').attr("style","");
        $('.blog-timeline-wrap .entry-box-wrap').each(function(){
            var position   = $(this).offset();
            var left       = position.left;
            var wrap_width = $(this).parents('.blog-timeline-wrap').innerWidth();
            if( left/wrap_width > 0.5){
                $(this).removeClass('timeline-left').addClass('timeline-right');
            }else{
                $(this).removeClass('timeline-right').addClass('timeline-left');
            }
        });

    });

});
