export default function alumniCheck() {
  if ( $('.career-feature__alumni-cell .career-feature__alumni').length == 0 ) {
    $('.section--career-feature .section__content').addClass('no-card');
  }
}