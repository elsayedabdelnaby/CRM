/*global $, console, alert*/
var InputValidation = function (element) {
    'use strict';

    var sArabicPattern = /^([\0-\9]|[\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd]|[ ])*$/g,
        
        check_arabic_string = function () {
            if (sArabicPattern.test($(element).val())) {
                return true;
            } else {
                return false;
            }
        },
        check_english_string = function () {
            if (!sArabicPattern.test($(element).val())) {
                return true;
            } else {
                return false;
            }
        },
        check_element_empty = function () {
            if ($(element).val() === '' || $(element).val() === null || $(element).val() === "") {
                return true;
            } else {
                return false;
            }
        },
        check_element_required = function () {
            var bRequired = $(element).attr('required');
            if (typeof bRequired !== typeof undefined && bRequired !== false) {
                return true;
            } else {
                return false;
            }
        },
        check_arabic_required = function () {
            var bArabicRequired = $(element).attr('arabic');
            if (typeof bArabicRequired !== typeof undefined && bArabicRequired !== false) {
                return true;
            } else {
                return false;
            }
        },
        check_english_required = function () {
            var bEnglishRequired = $(element).attr('english');
            if (typeof bEnglishRequired !== typeof undefined && bEnglishRequired !== false) {
                return true;
            } else {
                return false;
            }
        };

    return {
        isArabicString:   check_arabic_string,
        isEnglishString:  check_english_string,
        isEmpty:          check_element_empty,
        isRequired:       check_element_required,
        isArabic:         check_arabic_required,
        isEnglish:        check_english_required
    };
};
$('.submit-button').bind('click', function () {
    'use strict';
    var aAllTextInputs   = $(this).parents('form').find('input[type="text"]'),
        aAllCheckBoxes   = $(this).parents('form').find('input[type="checkbox"]'),
        aAllRadioButtons = $(this).parents('form').find('input[type="radio"]'),
        aAllSelects      = $(this).parents('form').find('select'),
        aAllTextAreas    = $(this).parents('form').find('textarea'),
        index,
        bError          = 0;
    for (index = 0; index < aAllTextInputs.length; index += 1) {
        var oInput = new InputValidation(aAllTextInputs[index]),
            sError = "";
        if (oInput.isRequired()) {
            if (oInput.isEmpty()) {
                sError = "This field required";
            } else {
                if (oInput.isArabic()) {
                    if (!oInput.isArabicString()) {
                        sError = "This field must be in Arabic Letters";
                    }
                } else if (oInput.isEnglish()) {
                    if (!oInput.isEnglishString()) {
                        sError = "This field must be in English Letters";
                    }
                }
            }
        } else if (oInput.isArabic()) {
            if (!oInput.isArabicString()) {
                sError = "This field must be in Arabic Letters";
            }
        } else if (oInput.isEnglish()) {
            if (oInput.isEnglishString()) {
                sError = "This field must be in English Letters";
            }
        }
        if (sError !== "") {
            bError = 1;
            if (($($(aAllTextInputs[index]).parent()).children('span')).text() !== "") {
                $(aAllTextInputs[index]).parent().find(".is-error").text(sError);
            } else {
                var oSpanError = document.createElement("span");
                oSpanError.setAttribute("class", "is-error");
                oSpanError.appendChild(document.createTextNode(sError));
                $(aAllTextInputs[index]).parent().append(oSpanError);
                $(aAllTextInputs[index]).parent().addClass("has-error");
            }
        } else if (($($(aAllTextInputs[index]).parent()).children('span')).text() !== "") {
            $(aAllTextInputs[index]).parent().removeClass('has-error');
            ($($(aAllTextInputs[index]).parent()).children('span')).remove();
        }
    }
    
    if(bError === 1) {
        $($(".submit-button").parents().find("form")).submit(function(e) {
                return false;
            });
    } else {
        $($(".submit-button").parents().find("form")).submit(function(e) {
                $(this).unbind('submit').submit();
            });
    }
    
});
