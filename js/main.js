jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll <= 25) {
        jQuery("#contdown").show(500);
        jQuery(".pageHead").removeClass("navbar-fixed-top");
        jQuery(".pageBody").css("padding-top",0);
  	 }
    if (scroll > 25) {
        jQuery("#contdown").slideUp(500);
        jQuery(".pageHead").addClass("navbar-fixed-top");
        jQuery(".pageBody").css("padding-top","250px");
    }
}); 

jQuery(document).ready(function(){
     jQuery("#siteLogo img").hover(
            function () {
                            jQuery(this).css({ position: "relative" });
                            jQuery(this).animate({ top: "-15" },50);
                            jQuery(this).animate({ top: "0" },50);
                            
            }, 
            function () {
                            jQuery(this).css({ position: "inherit" });
                            jQuery(this).animate({ top: "0" });
            }
        );
});

/*jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll == 0) {
        jQuery(".pageHead").removeClass("navbar-fixed-top");
        jQuery("#siteLogo").removeClass("col-sm-offset-2 col-sm-8");
        jQuery("#siteLogo").addClass("col-sm-12");
  	 }
    if (scroll >= 1) {
        jQuery(".pageHead").addClass("navbar-fixed-top");
        jQuery("#siteLogo").removeClass("col-sm-12");
        jQuery("#siteLogo").addClass("col-sm-offset-2 col-sm-8");
    }
});*/ 

/*
function adjust_body_offset() {
    jQuery('.pageBody').css('margin-top', jQuery('.pageHead').outerHeight(true) + 'px' );
}

jQuery(window).resize(adjust_body_offset);

jQuery(document).ready(adjust_body_offset);
*/
