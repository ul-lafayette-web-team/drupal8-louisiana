export default function liveWhaleEvent() {
  $('.lw-top-date').each((index, element) => {
    var $this = $(element);
    var words = $this.text().split(" ");
    $this.empty();
    $.each(words, function(i, v) {
        $this.append($("<span>").text(v));
    });    
  });
}