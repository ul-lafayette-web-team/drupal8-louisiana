export default function questionSet() {
  $('#questionsetSelect').on('change', function(e) {
    $('.question-set--item').removeClass('selected')
    $('#' + $(e.currentTarget).val()).addClass("selected");
  })
}