jQuery(function ($) {
    $('.pagination .page-numbers').not('.next').remove();
    $('.pagination .next').html(kb_string.buttontxt);
  
    $(document).on('click','.pagination .next',function(e) {
      e.preventDefault();
      var query = JSON.stringify($(this).closest('.pagination').data('query'));
      var maxpages = $(this).closest('.pagination').data('maxpages');
      var current = parseInt($(this).closest('.pagination').data('current'));
  
      var button = $(this),
        data = {
          'action': 'kb_load_more',
          'query': query,
          'page' : current,
        };
  
      $.ajax({
        type: 'POST',
        url: kb_string.ajaxurl,
        data: data,
        beforeSend: function(xhr) {
          button.text(kb_string.buttonload);
        },
        success: function(data) {
          current++;
          button.closest('.pagination').before(data);
          button.closest('.pagination').data('current',current);
          button.text(kb_string.buttontxt);
          if ( current == maxpages ) {
            button.remove();
          }
        },
      });
    });
  });