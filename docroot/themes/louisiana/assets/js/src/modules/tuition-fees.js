export default function tuitionFees() {
  $('.costs__accordion-button').click(event => {
    $(event.target)
      .toggleClass('engaged')
      .siblings('.costs__accordion__content')
      .slideToggle();
  });
  
  $('.costs__highlight').hover(
    function(){
      $(this).find('.fa-asterisk').addClass('fa-spin');
    },
    function(){
      $(this).find('.fa-asterisk').removeClass('fa-spin');
    }
  )
  $('#tuitionFeesSelect').on('change', function(e) {
    $('.tuition-fees_set').removeClass('selected')
    $('#' + $(e.currentTarget).val()).addClass("selected");
  })
  
}
