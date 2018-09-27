$(document).ready(function() {
  $('.nav-open').on("click", function(e) {
  e.preventDefault();
  $(this).toggleClass('nav-close');
  $('#navigation').toggleClass('nav-list-open');
 

  });

   $('a.suave').on('click',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, function () {
            window.location.hash = target;
        });
    });

   $('#button-form').on('click', function(){
    var $conte = $('#hv_pg2form');
    var $body = $('body');

    if($conte.hasClass('hv_pg2form_view')){
      $conte.removeClass('hv_pg2form_view');
      $body.removeClass('hv_movil');
     }else{
      $conte.addClass('hv_pg2form_view');
      $body.addClass('hv_movil');
     }
   });

   // fixed
  

  $('.gracias__cerrar').on('click', function(){
    $('.gracias').fadeOut(200);
  });

  $('.form__select select').on('change', function(){
    var v = $(this).val();
    $(this).parent().find('strong').html(v);
  });

  



   // on scroll move the sidebar
  var stickySidebar = $('.sticky');

  const mq = window.matchMedia( "(min-width: 1025px)" );

  if (stickySidebar.length > 0) { 
    var stickyHeight = stickySidebar.height(),
        sidebarTop = stickySidebar.offset().top;
  }

  if (mq.matches) {

    $(window).scroll(function () {
    if (stickySidebar.length > 0) { 
      var scrollTop = $(window).scrollTop();
              
      if (sidebarTop < scrollTop) {
        stickySidebar.css('top', scrollTop - sidebarTop);

        // stop the sticky sidebar at the footer to avoid overlapping
        var sidebarBottom = stickySidebar.offset().top + stickyHeight,
            stickyStop = $('.content').offset().top + $('.content').height();
        if (stickyStop < sidebarBottom) {
          var stopPosition = $('.content').height() - stickyHeight;
          stickySidebar.css('top', stopPosition);
        }
      }
      else {
        stickySidebar.css('top', '0');
      } 
    }
  });
  };


   $(window).resize(function () {
    if (stickySidebar.length > 0) { 
      stickyHeight = stickySidebar.height();
    }
  });
}); 





