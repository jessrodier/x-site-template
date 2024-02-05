$( document ).ready(function() {
  // Accordions
  $('.accordion-header').on('click', function () {

    if( $(this).hasClass('expanded') ) {
      $(this).attr('aria-expanded', 'false').removeClass('expanded');
    }
    else {
      $(this).attr('aria-expanded', 'true').addClass('expanded');
    }

    var accordionTarget = $(this).data('target');
    $('#' + accordionTarget).toggleClass('show');
    
  });
});