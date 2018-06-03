$(document).ready(function() {

    var currentLanguage = document.documentElement.lang;

    var importWizzard = $('#import-wizzard'),
        importWizzardFinish = $('#import-wizzard-finish'),
        importWizzardWrapper = $('.import-wizzard-wrapper'),
        importWizzardFinishWrapper = $('.import-wizzard-finish-wrapper');

    function getElemHeight(elem) {
        return elem.height();
    }

    function getElemOuterHeight(elem) {
        return elem.outerHeight();
    }

    function setElemHeight(elem, height) {
        elem.css('height', height)
    };

    var importData = {
        'senderType': {
            order: 1,
            name: 'senderType',
            question: currentLanguage === 'rs' ? 'Tip pošiljaoca' : 'Sender type',
            selectedValue: '',
            options: {
                'privateIndividual': {
                    value: 'privateIndividual',
                    label: currentLanguage === 'rs' ? 'Fizicko lice' : 'Private Individual',
                    next: function() {
                        removeNextSiblings($("#senderType" + this.value));
                        setValueToOption(70);
                        renderNextQuestion('recipientType', 'company');
                        setImportWizzardWrapperHeight();
                    }
                },
                'company': {
                    value: 'company',
                    label: currentLanguage === 'rs' ? 'Kompanija' : 'Company',
                    next: function() {
                        removeNextSiblings($("#senderType" + this.value));
                        setValueToOption(50);
                        renderNextQuestion('recipientType');
                        setImportWizzardWrapperHeight();
                    }
                }
            }
        },
        'recipientType': {
            order: 2,
            name: 'recipientType',
            question: currentLanguage === 'rs' ? 'Tip primaoca' : 'Recipient type',
            selectedValue: '',
            options: {
                'privateIndividual': {
                    value: 'privateIndividual',
                    label: currentLanguage === 'rs' ? 'Fizicko lice' : 'Private Individual',
                    next: function() {
                        removeNextSiblings($("#recipientType" + this.value));
                        renderNextQuestion('value');
                        setImportWizzardWrapperHeight();
                    }
                },
                'company': {
                    value: 'company',
                    label: currentLanguage === 'rs' ? 'Kompanija' : 'Company',
                    next: function() {
                        removeNextSiblings($("#recipientType" + this.value));
                        renderNextQuestion('value');
                        setImportWizzardWrapperHeight();
                    }
                }
            }
        },
        'value': {
            order: 3,
            name: 'value',
            question: currentLanguage === 'rs' ? 'Vrednost posiljke' : 'Value',
            selectedValue: '',
            options: {
                '1': {
                    value: '1',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        renderNextQuestion('clearanceType');
                        setImportWizzardWrapperHeight();
                    }
                },
                '2': {
                    value: '2',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        renderNextQuestion('clearanceType');
                        setImportWizzardWrapperHeight();
                    }
                }
            }
        },
        'clearanceType': {
            order: 4,
            name: 'clearanceType',
            question: 'Clearance type',
            selectedValue: '',
            options: {
                'flyingCargo': {
                    value: 'flyingCargo',
                    label: 'Flying Cargo',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        appendToWizzardFinishAndAnimate();
                    }
                },
                'otherCompany': {
                    value: 'otherCompany',
                    label: 'Other Company',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        appendToWizzardFinishAndAnimate();
                    }
                },
                'you': {
                    value: 'you',
                    label: 'You',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        appendToWizzardFinishAndAnimate();
                    }
                }
            }
        }
    };

    function setImportWizzardWrapperHeight() {
        let importWizzardHeight = getElemHeight(importWizzard) + 10;
        return setElemHeight(importWizzardWrapper, importWizzardHeight);
    };

    function setImportWizzardFinishWrapperHeight(height) {
        let importWizzardFinishHeight;
        if (typeof height !== 'undefined') {
            importWizzardFinishHeight = height;
            if (height === 0) {
                importWizzardFinishWrapper.removeClass('is-visible');
                setTimeout(function() {
                    importWizzardFinishWrapper.css('overflow', 'hidden');
                }, 200);
            }
        } else {
            setTimeout(function() {
                importWizzardFinishWrapper.css('overflow', 'visible');
                importWizzardFinishWrapper.addClass('is-visible');
            }, 200);
            importWizzardFinishHeight = getElemOuterHeight(importWizzardFinish);
        }
        setElemHeight(importWizzardFinishWrapper, importWizzardFinishHeight);
    }

    function init() {
        renderFormGroup(createFormGroupElement(importData['senderType']));
        addNewChangeListener(importData['senderType']);
        setImportWizzardWrapperHeight();
    }
    init();

    function createFormGroupElement(formGroup, excludeOption) {

        var inputs = Object.keys(formGroup.options)
            .filter(function(key) {
                return key !== excludeOption;
            })
            .map(function(key) {
                return "<div class='form-check-input-wrapper'><input class='form-check-input' type='radio' name='" + formGroup.name
                + "' value='" + formGroup.options[key].value
                + "' id='" + formGroup.name + formGroup.options[key].value + "'>"
                + "<label class='form-check-label' for='" + formGroup.name + formGroup.options[key].value
                + "'>" + formGroup.options[key].label + "</label></div>";
            })
            .reduce(function(acc, currentVal) {
                return acc + currentVal;
            });

        var formGroupHtml =
        "<div class='form-group'>"
        + "<div class='form-group__question'><span class='form-group__order'>" + formGroup.order + "</span>"
        + "<div class='form-group__question-header'><h4>" + formGroup.question + "</h4></div></div>"
        + "<div class='form-check'>"
        + inputs
        + "</div></div>";

        return formGroupHtml;
    }

    function setValueToOption(value) {
        importData['value'].options['1'].label = (currentLanguage === 'rs' ? 'Ispod ' : 'Under ') + value + '&euro;';
        importData['value'].options['2'].label = (currentLanguage === 'rs' ? 'Iznad ' : 'Over ') + value + '&euro;';
    }

    function renderFormGroup(formGroupHtml) {
        importWizzard.append(formGroupHtml);
    }

    function addNewChangeListener(formGroup) {
        $(document).on('change', $("input[name='" + formGroup.name + "']"), function(evt) {
            var selectedValue = formGroup.selectedValue;
            var value = $("input[name='" + formGroup.name + "']:checked").val();
            if (value && value !== selectedValue) {
                formGroup.selectedValue = value;
                formGroup.options[evt.target.value].next();
            }
        });
    }

    function clearSelectedValue(name) {
        importData[name].selectedValue = '';
    }

    function renderNextQuestion(name, excludeOption, setValue) {
        clearSelectedValue(name);
        renderFormGroup(createFormGroupElement(importData[name], excludeOption, setValue));
        addNewChangeListener(importData[name]);
    }

    function removeNextSiblings(input) {
        input.closest('.form-group').nextAll('.form-group').remove();
        importWizzardFinish.empty();
        setImportWizzardFinishWrapperHeight(0);
    }

    function appendToWizzardFinishAndAnimate() {
        importWizzardFinish.append('<div class="p-30 pt-40 pb-40">' + getResultContent() + '</div>');
        setImportWizzardFinishWrapperHeight();
    }

    function getResultContent() {
        if (importData.senderType.selectedValue === 'privateIndividual') {
            if (importData.value.selectedValue === '1') {
                return currentLanguage === 'rs' ? '<div>Oslobođeni ste plaćanja carine i PDV-a</div>' : 'You\'re not obligated to pay';
            } else if (importData.value.selectedValue === '2') {
                return currentLanguage === 'rs' ? '<div>Preuzmite dokumenta...</div>' : '<div>Download documents...</div>';
            }
        } else if (importData.senderType.selectedValue === 'company') {
            if (importData.recipientType.selectedValue === 'privateIndividual') {
                if (importData.value.selectedValue === '1') {
                    return currentLanguage === 'rs' ? '<div>Oslobođeni ste plaćanja carine i PDV-a</div>' : 'You\'re not obligated to pay';
                } else if (importData.value.selectedValue === '2') {
                    return currentLanguage === 'rs' ? '<div>Preuzmite dokumenta...</div>' : '<div>Download documents...</div>';
                }
            } else if (importData.recipientType.selectedValue === 'company') {
                if (importData.value.selectedValue === '1') {
                    return currentLanguage === 'rs' ? '<div>Preuzmite dokumenta...</div>' : '<div>Download documents...</div>';
                } else if (importData.value.selectedValue === '2') {
                    return currentLanguage === 'rs' ? '<div>Neki tekst...</div>' : '<div>Something...</div>';
                }
            }
        }
    }
});
