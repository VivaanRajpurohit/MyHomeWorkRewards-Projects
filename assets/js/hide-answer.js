jQuery(document).ready(function() {
    // Ensure all answers are hidden initially
    jQuery(".hidden-answer").hide();
    jQuery(".show-answer").html("Show Answer").attr('aria-pressed', false).addClass('collapsed').removeClass('expanded');

    jQuery(document).off("click.statsAnswers").on("click.statsAnswers", ".show-answer", function() {
        var target = "#" + jQuery(this).data("target");
        var pressed = jQuery(this).attr('aria-pressed') === 'true';

        // If the answer is hidden, show it, else hide it
        if (pressed) {
            jQuery(target).slideUp(200);  // Hide the answer
            jQuery(this).html("Show Answer");  // Change button text to "Show Answer"
        } else {
            jQuery(target).slideDown(200);  // Show the answer
            jQuery(this).html("Hide Answer");  // Change button text to "Hide Answer"
        }

        // Toggle the pressed state
        pressed = !pressed;

        // Accessibility: Update the aria-pressed attribute
        jQuery(this).attr('aria-pressed', pressed);

        // Toggle the expanded/collapsed class for styling
        jQuery(this).toggleClass('expanded collapsed');
    });

    jQuery(document).off("keydown.statsAnswers").on("keydown.statsAnswers", ".show-answer", function(event) {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            jQuery(this).trigger("click");
        }
    });
});
