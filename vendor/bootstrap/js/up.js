  $(document).ready(function(){
  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 150);
  });
  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.ir-arriba').slideDown(150);
    } else {
      $('.ir-arriba').slideUp(150);
    }
  });
});