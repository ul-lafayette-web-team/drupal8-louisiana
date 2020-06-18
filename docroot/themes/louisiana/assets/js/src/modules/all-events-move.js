export default function allEventLinkMove() {
  $('.section--livewhale .section__all-link .link-underline').each(event => {
    $('.section--livewhale .section__all-link .link-underline')
      .clone()
      .appendTo('.all-link--destination');
  });
}