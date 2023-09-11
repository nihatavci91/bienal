  $(document).ready(function(){
      $('.video-slider').slick({
        centerMode: true,
        centerPadding: '25%',
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        infinite:true,
      });
    });
  
  
      // On before slide change
  $('.video-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
      var slide = document.querySelector('.slide--'+currentSlide);
      console.log(slide.getAttribute("data-name"));
      console.log("Slide Number : "+(currentSlide + 1));
  });

  /*-----
Spanizer
- Wraps letters with spans, for css animations
-----*/
(function($) {
    var s,
    spanizeLetters = {
      settings: {
        letters: $('.js-spanize'),
      },
      init: function() {
        s = this.settings;
        this.bindEvents();
      },
      bindEvents: function(){
        s.letters.html(function (i, el) {
          //spanizeLetters.joinChars();
          var spanizer = $.trim(el).split("");
          return '<span>' + spanizer.join('</span><span>') + '</span>';
        });
      },
    };
    spanizeLetters.init();
  })(jQuery);
  $(document).ready(function(){
       // TopButton Start
       var btn = $('#buttonTop');
       $(window).scroll(function() {
         if ($(window).scrollTop() > 300) {
           btn.addClass('show');
         } else {
           btn.removeClass('show');
         }
       });
       btn.on('click', function(e) {
         e.preventDefault();
         $('html, body').animate({scrollTop:0}, '300');
       });
       // TopButton End
    $(".tr-lang").click(function (e) {    
        $(".en-lang").removeClass("active");
        $(this).addClass("active");
        if ($(".lang-switch").find('input[type="checkbox"]').is(":checked")) {
            var checkbox = $(".lang-switch").children('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
        }
      });
    $(".en-lang").click(function (e) {    
        $(".tr-lang").removeClass("active");
        $(this).addClass("active");
        if (!$(".lang-switch").find('input[type="checkbox"]').is(":checked")) {
            var checkbox = $(".lang-switch").children('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
        }
      });
      $(".lang-switch").click(function () {  
        if ($(this).find('input[type="checkbox"]').is(":checked")) {
            $(".tr-lang").removeClass("active");
            $(".en-lang").addClass("active");
        }
        else{
            $(".en-lang").removeClass("active");
            $(".tr-lang").addClass("active");
        }
      });
      $(".nav-item").click(function (e) {    
        $(".nav-item img").removeClass("img-transform");
        $(this).find('img').addClass("img-transform") 
      });
      $("#page3").on( 'scroll', function(){
        console.log('Event Fired');
     });
  });
  Splitting();

