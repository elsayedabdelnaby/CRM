var name_ar = document.getElementsByClassName("arabic-validation")[0];
name_ar.onchange = function () {
    var isArabic = /^([\0-\9]|[\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd]|[ ])*$/g;
    var span = document.createElement('span');
    span.setAttribute('id', 'form_control_1-error');
    span.setAttribute('class', 'help-block help-block-error');

    name_ar.parentNode.setAttribute('class', "form-group form-md-line-input has-error");
    console.log(name_ar.parentNode.classList);
    if (name_ar.value) {
        if (!isArabic.test(name_ar.value)) {
            if (name_ar.parentNode.children.length === 4) {
                name_ar.parentNode.removeChild(document.getElementsByClassName('arabic-validation')[0].parentNode.children[1]);
            }
            var textNode = document.createTextNode('Must be arabic letters');
            span.appendChild(textNode);
            span.style.color = "#e73d4a";
        } else {
            if (name_ar.parentNode.children.length === 4) {
                name_ar.parentNode.removeChild(document.getElementsByClassName('arabic-validation')[0].parentNode.children[1]);
            }
        }
    } else {
        if (name_ar.parentNode.children.length === 4) {
            name_ar.parentNode.removeChild(document.getElementsByClassName('arabic-validation')[0].parentNode.children[1]);
        }
        var textNode = document.createTextNode('This field is required');
        span.appendChild(textNode);
        span.style.color = "#e73d4a";
    }
    name_ar.parentNode.insertBefore(span, name_ar.parentNode.children[1]);
};

var name_en = document.getElementsByClassName("english-validation")[0];
name_en.onchange = function () {
    var isArabic = /^([\0-\9]|[\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd]|[ ])*$/g;
    var span = document.createElement('span');
    span.setAttribute('id', 'form_control_1-error');
    span.setAttribute('class', 'help-block help-block-error');

    name_en.parentNode.setAttribute('class', "form-group form-md-line-input has-error");
    console.log(name_en.parentNode.classList);
    if (name_en.value) {
        if (isArabic.test(name_en.value)) {
            if (name_en.parentNode.children.length === 4) {
                name_en.parentNode.removeChild(document.getElementsByClassName('english-validation')[0].parentNode.children[1]);
            }
            var textNode = document.createTextNode('Must be english letters');
            span.appendChild(textNode);
            span.style.color = "#e73d4a";
        } else {
            if (name_en.parentNode.children.length === 4) {
                name_en.parentNode.removeChild(document.getElementsByClassName('english-validation')[0].parentNode.children[1]);
            }
        }
    } else {
        if (name_en.parentNode.children.length === 4) {
            name_en.parentNode.removeChild(document.getElementsByClassName('english-validation')[0].parentNode.children[1]);
        }
        var textNode = document.createTextNode('This field is required');
        span.appendChild(textNode);
        span.style.color = "#e73d4a";
    }
    name_en.parentNode.insertBefore(span, name_en.parentNode.children[1]);
};


