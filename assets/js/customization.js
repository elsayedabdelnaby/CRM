/*console, alert, $*/
function createOptionsList(list, data) {
    'use strict';
    $(list).empty();
    $(list).append('<option value="0">Select</option>');
    var index;
    for (index = 0; index < data.length; index += 1) {
        console.log(data[index]['name_en']);
        $(list).append($('<option></option>')
                .attr('value', data[index]['id'])
                .text(data[index]['name_en'])
                );
    }
}

$(document).ready(function () {
    var countriesList       = $('#countriesList');
    var governoratesList    = $('#governoratesList');
    if ($(countriesList).val() == 0) {
        $(governoratesList).attr('disabled', 'disabled');
    }
    $(countriesList).change(function () {
        if ($(countriesList).val() > 0) {
            $(governoratesList).removeAttr("disabled");
            var url = '/the-king/api/countries/' + $(countriesList).val() + '/governorates';
            $.get(url, function (data, status) {
                createOptionsList(governoratesList, data);
            });
        } else {
            $(governoratesList).attr('disabled', 'disabled');
        }
    });
});
