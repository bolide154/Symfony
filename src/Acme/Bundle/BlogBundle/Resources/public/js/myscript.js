$('form').submit(function () {
    var result = confirm("Are you sure?");
    if (result) {
        return true;
    }
    return false;
});

$(document).ready(function () {
    $('input[type="checkbox"]').click(function () {
        if ($(this).is(":checked")) {
            $("#non-account").show();
        } else if ($(this).is(":not(:checked)")) {
            $("#non-account").hide();
        }
    });
});