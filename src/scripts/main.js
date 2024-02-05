$( document ).ready(function() {
  // Mobile Menu
  $('#mobile-menu').on('click', function() {
    $('#mobile-menu .far').toggleClass('fa-bars fa-times');
    $('#primary-nav').toggleClass('open');
  });

  // Photo Lightbox
  $('.photo-btn').on('click', function() {
    const postId = $(this).attr('data-postId');
    $('#lightbox-' + postId).toggleClass('show');
  });

  $('.lightbox .close-btn').on('click', function() {
    const lightboxId = $(this).attr('data-postId');
    $('#lightbox-' + lightboxId).toggleClass('show');
  });


  // Floating Shapes Background
  // var html = '';
  // for (var i = 1; i <= 35; i ++) {
  //   html += '<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>';
  // }
  
  // document.querySelector('.shape').innerHTML += html;


  // Splash Screen
  const splashScreen = $('#splashScreen');
  const splashContent = $('#splashContent #splash-text');

  function runSplash(){
    splashContent.delay(500).queue(function(){
      splashContent.addClass("fade").dequeue().delay(1000).queue(function(){
        splashContent.removeClass("fade").dequeue().delay(1000).queue(function(){
          destroySplash();
        })
      })
    });
  };

  function destroySplash() {
    // splashScreen.addClass('hide');
    $('body').removeClass('prevent-scroll splashing');
  }

  // runSplash();
  destroySplash();

  // Track Mouse - Hero Text
  function trackMouse() {
    let mouseX, mouseY;
    // const ww = $( window ).width();
    // const wh = $( window ).height();
    let traX, traY;
    $(document).mousemove(function(e){
      mouseX = e.pageX;
      mouseY = e.pageY;
      traX = ((4 * mouseX) / 570) + 40;
      traY = ((4 * mouseY) / 570) + 50;
      $("#tracked-title").css({"background-position": traX + "%" + traY + "%"});
    });
  }

  // trackMouse();

  // Mobile Menu
  $('#m-menu-toggle').on('click', function () {
    $(this).toggleClass('open closed');
    $('header nav').toggleClass('open closed');
    $('#call-to-action').toggleClass('m-menu-open');
    $('body').toggleClass('prevent-scroll');
  });
  $('header nav a').click(function (){
    $('#m-menu-toggle.open').addClass('closed').removeClass('open');
    $('header nav.open').addClass('closed').removeClass('open');
    $('#call-to-action.m-menu-open').removeClass('m-menu-open');
    $('body').removeClass('prevent-scroll');
  });

  // Add class to full input field
  $('.floating-labels input').on('blur', function (){
    if ($(this).val()) {
      $(this).parent().addClass('filled');
    } else {
      $(this).parent().removeClass('filled');
    }
  });

});

