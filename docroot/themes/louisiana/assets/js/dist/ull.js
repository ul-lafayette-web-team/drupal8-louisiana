jQuery('.costs__accordion-button').click(function (event) {
        jQuery(event.target).toggleClass('engaged').siblings('.costs__accordion__content').slideToggle();
        });
        jQuery('.costs__highlight').hover(function () {
        jQuery(this).find('.fa-asterisk').addClass('fa-spin');
        }, function () {
        jQuery(this).find('.fa-asterisk').removeClass('fa-spin');
        });
        jQuery('#tuitionFeesSelect').on('change', function (e) {
        jQuery('.tuition-fees_set').removeClass('selected');
        jQuery('#' + jQuery(e.currentTarget).val()).addClass("selected");
        console.log('It works!');
});

jQuery('#questionsetSelect').on('change', function(e) {
  jQuery('.question-set--item').removeClass('selected')
  jQuery('#' + jQuery(e.currentTarget).val()).addClass("selected");
})
