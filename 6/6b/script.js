$(document).ready(function () {
    $("#close_add").click(function () {
        $("#container").fadeOut("fast", function () {
            // Animation complete.
        });
    });
    $("#add_button").click(function () {
        $("#container").fadeIn("fast", function () {
            // Animation complete.
        });
    });
});
