$(function () {
		
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 50) {
          $("nav").addClass("nav-scroll blue-bg fixed-top");
        } else {
          $("nav").removeClass("nav-scroll blue-bg fixed-top");
        }
      });
      
}); 
