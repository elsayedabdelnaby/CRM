/*console, alert, $*/
$(document).ready(function() {
    var countriesList = $('#countriesList');
    var governoratesList = $('#governoratesList');
    $(governoratesList).attr('disabled', 'disabled');
    $(countriesList).change(function() {
        if ($(countriesList).val() > 0) {
            $(governoratesList).removeAttr("disabled");
        } else {
            $(governoratesList).attr('disabled', 'disabled');
        }
    });
});
