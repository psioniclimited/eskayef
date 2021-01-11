

//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");

	});
$(document).ready(function() {


    $('.se-pre-con').hide();
    $('#page').show();

    // Values icon draw starts
    var controller = new ScrollMagic.Controller();

    var accreditationScene = new ScrollMagic.Scene({
        triggerElement: '#core-value',
        triggerHook: 0.4
    })
        .setClassToggle('.transcom-skf-values-svg-arrow-st1, .transcom-skf-values-svg-arrow-st2, .transcom-skf-values-svg-arrow-st3, .transcom-skf-values-svg-arrow-st0, .skf-values-svg-circle-like-st1, .transcom-skf-values-svg-star-st1, .transcom-skf-values-svg-shield-st1, .skf-values-svg-people-st0, .skf-values-svg-people-st1, .skf-values-svg-people-st2, .skf-values-svg-people-st3, .skf-values-svg-circle-like-st0', 'active')
        .reverse(false)
        // .addIndicators({
        //     name: 'Shudhu Shudhu',
        //     colorTrigger: 'black',
        //     colorStart: 'green',
        //     colorEnd: 'red'
        // })
        .addTo(controller);
    //End of border draw in history section
});