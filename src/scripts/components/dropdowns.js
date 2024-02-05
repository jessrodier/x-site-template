$( document ).ready(function() {
  // Dropdowns
  $('.dropdown-label').on('click', function(e) {
    e.stopPropagation();
  
    $(this).addClass('open');

    if( $(this).hasClass('open') ) {
      $(this).attr('aria-expanded', 'false').removeClass('open');
    }
    else {
      $(this).addClass('open').attr('aria-expanded', 'true');
      // If any other dropdowns are open, close those!
      $('.dropdown-label.open').attr('aria-expanded', 'false').removeClass('open');
      $('.dropdown-content.show').removeClass('show');
    }
  
    var dropdownTarget = $(this).data('target');
    $('#' + dropdownTarget).toggleClass('show');
    
  });
  
  $(document).click(function(){
    $('.dropdown-label.open').attr('aria-expanded', 'false').removeClass('open');
    $('.dropdown-content.show').removeClass('show');
  });

});

