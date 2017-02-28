/*console, alert, $*/
function createOptionsList(list, data) {
    'use strict';
    $(list).empty();
    $(list).append('<option value="0">Select</option>');
    var index;
    for (index = 0; index < data.length; index += 1) {
        $(list).append($('<option></option>')
                .attr('value', data[index]['id'])
                .text(data[index]['name_en'])
                );
    }
}

$(document).ready(function () {
    var countriesList    = $('#countriesList');
    var governoratesList = $('#governoratesList');
    var citiesList       = $('#citiesList');
    var areasList        = $('#areasList');
    
    if ($(countriesList).val() == 0) {
        $(governoratesList).attr('disabled', 'disabled');
    }
    if($(governoratesList).val() == 0) {
        $(citiesList).attr('disabled', 'disabled');
    }
    if($(citiesList).val() == 0) {
        $(areasList).attr('disabled', 'disabled');
    }
    
    $(countriesList).change(function () {
        if ($(countriesList).val() > 0) {
            $(governoratesList).removeAttr("disabled");
            var url = '/the-king/api/countries/' + $(countriesList).val() + '/governorates';
            $.get(url, function (data, status) {
                createOptionsList(governoratesList, data);
            });
        } else {
            $(governoratesList).val(0);
            $(governoratesList).change();
            $(governoratesList).attr('disabled', 'disabled');
        }
    });
    
    $(governoratesList).change(function () {
        if ($(governoratesList).val() > 0) {
            $(citiesList).removeAttr("disabled");
            var url = '/the-king/api/governorates/' + $(governoratesList).val() + '/cities';
            $.get(url, function (data, status) {
                createOptionsList(citiesList, data);
            });
        } else {
            $(citiesList).val(0);
            $(citiesList).attr('disabled', 'disabled');
        }
    });
    
    $(citiesList).change(function () {
        if ($(citiesList).val() > 0) {
            $(areasList).removeAttr("disabled");
            var url = '/the-king/api/cities/' + $(citiesList).val() + '/areas';
            $.get(url, function (data, status) {
                createOptionsList(areasList, data);
            });
        } else {
            $(areasList).val(0);
            $(areasList).attr('disabled', 'disabled');
        }
    });
    
});
