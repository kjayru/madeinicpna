$(document).ready(function() {
  $('#acepto-modal').on("click", function(e) {
  e.preventDefault();
  $(this).toggleClass('nav-close');
  $('#modal-terminos').toggleClass('aparecer');
  $('.box-modal').addClass('aparecer');
 });
  $('.close-modal').on("click", function(e) {
  e.preventDefault();
  $('#modal-terminos').removeClass('aparecer');
  $('.box-modal').removeClass('aparecer');
 
  });

  $('a.suaveint').on('click',function (e) {
      e.preventDefault();
       
      $target = $('.hv_page');
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 800);
  });
});
