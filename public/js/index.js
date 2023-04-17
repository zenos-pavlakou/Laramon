$(document).ready(function() {



    let lastSelectedNavItem = "";
    let navItemMapping = {
      "ABOUT": "#about-me",
      "EXPERIENCE": "#work-experience",
      "PROJECTS": "#side-projects",
      "INTERESTS": "#hobbies-interests",
      "EDUCATION": "#education"
    }


    $(document).on('click', '#nav-toggler', function() { 
      $(this).toggleClass('open');
      $(".nav-items").toggleClass('nav-items-open');
      if($(".right-nav").hasClass("right-nav-open")) {
        $(".right-nav").removeClass("right-nav-open");
        $("#nav-toggler span:nth-child(3)").css("opacity","0");
        $(".content-container").removeClass("content-container-shifted");
        
      } else {
        $(".right-nav").addClass("right-nav-open");
        $("#nav-toggler span:nth-child(3)").css("opacity","1");
        $(".content-container").addClass("content-container-shifted");
      }
    }); 


    function scrollTo(id) {
      if(lastSelectedNavItem !== id) {
        $('.content-container').animate({
            scrollTop: $(id).offset().top
        }, 1200);
        lastSelectedNavItem = id;
      }
    }

    $(document).on('click', '.nav-link', function(){
        $(".right-nav").removeClass("right-nav-open");
        $("#nav-toggler span:nth-child(3)").css("opacity","0");
        $("#nav-toggler").toggleClass("open");
        $(".content-container").removeClass("content-container-shifted");
        $(".nav-items").toggleClass('nav-items-open');


       
        // scrollTo(navItemMapping[$(this).text()]);
    })

})

