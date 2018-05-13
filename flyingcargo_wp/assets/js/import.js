$(document).ready(function() {

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
        // 'senderType': {
        //     order: 1,
        //     name: 'senderType',
        //     question: 'Sender type',
        //     description: 'Lorem ipsum dolor sit amet',
        //     selectedValue: '',
        //     options: {
        //         'privateIndividual': {
        //             value: 'privateIndividual',
        //             label: 'Private Individual',
        //             next: function() {
        //                 removeNextSiblings($("#senderType" + this.value));
        //                 renderNextQuestion('recipientType');
        //                 setImportWizzardWrapperHeight();
        //             }
        //         },
        //         'company': {
        //             value: 'company',
        //             label: 'Company',
        //             next: function() {
        //                 removeNextSiblings($("#senderType" + this.value));
        //                 renderNextQuestion('recipientType');
        //                 setImportWizzardWrapperHeight();
        //             }
        //         }
        //     }
        // },
        'recipientType': {
            order: 1,
            name: 'recipientType',
            question: 'Recipient type',
            description: 'Lorem ipsum dolor sit amet',
            selectedValue: '',
            options: {
                'privateIndividual': {
                    value: 'privateIndividual',
                    label: 'Private Individual',
                    next: function() {
                        removeNextSiblings($("#recipientType" + this.value));
                        renderNextQuestion('value');
                        setImportWizzardWrapperHeight();
                    }
                },
                'company': {
                    value: 'company',
                    label: 'Company',
                    next: function() {
                        removeNextSiblings($("#recipientType" + this.value));
                        renderNextQuestion('value');
                        setImportWizzardWrapperHeight();
                    }
                }
            }
        },
        'value': {
            order: 2,
            name: 'value',
            question: 'Value',
            description: 'Lorem ipsum dolor sit amet',
            selectedValue: '',
            options: {
                'under70': {
                    value: 'under70',
                    label: '70 or below',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        renderNextQuestion('clearanceType');
                        setImportWizzardWrapperHeight();
                    }
                },
                'over70': {
                    value: 'over70',
                    label: '70 or below',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        renderNextQuestion('clearanceType');
                        setImportWizzardWrapperHeight();
                    }
                }
            }
        },
        'clearanceType': {
            order: 3,
            name: 'clearanceType',
            question: 'Clearance type',
            description: 'Lorem ipsum dolor sit amet',
            selectedValue: '',
            options: {
                'flyingCargo': {
                    value: 'flyingCargo',
                    label: 'Flying Cargo',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Text 1');
                        } else if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Text 2');
                        };
                    }
                },
                'otherCompany': {
                    value: 'otherCompany',
                    label: 'Other Company',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Text 3');
                        } else if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.');
                        };
                    }
                },
                'you': {
                    value: 'you',
                    label: 'You',
                    next: function() {
                        removeNextSiblings($("#clearanceType" + this.value));
                        if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Text 5');
                        } else if (importData['recipientType'].selectedValue === "company") {
                            appendToWizzardFinishAndAnimate('Text 6');
                        };
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
        let importWizzardFinishHeight = typeof height !== 'undefined' ? height : getElemOuterHeight(importWizzardFinish);
        return setElemHeight(importWizzardFinishWrapper, importWizzardFinishHeight);
    }

    function init() {
        renderFormGroup(createFormGroupElement(importData['recipientType']));
        addNewChangeListener(importData['recipientType']);
        setImportWizzardWrapperHeight();
    }
    init();

    function createFormGroupElement(formGroup) {

        var inputs = Object.keys(formGroup.options).map(function(key) {
            return "<div class='form-check-input-wrapper'><input class='form-check-input' type='radio' name='" + formGroup.name
            + "' value='" + formGroup.options[key].value
            + "' id='" + formGroup.name + formGroup.options[key].value + "'>"
            + "<label class='form-check-label' for='" + formGroup.name + formGroup.options[key].value
            + "'>" + formGroup.options[key].label + "</label></div>";
        }).reduce(function(acc, currentVal) {
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

    function renderNextQuestion(name) {
        clearSelectedValue(name)
        renderFormGroup(createFormGroupElement(importData[name]));
        addNewChangeListener(importData[name]);
    }

    function removeNextSiblings(input) {
        input.closest('.form-group').nextAll('.form-group').remove();
        importWizzardFinish.empty();
        setImportWizzardFinishWrapperHeight(0);
    }

    function appendToWizzardFinishAndAnimate(content) {
        importWizzardFinish.append('<div class="p-30">' + content + '</div>');
        setImportWizzardFinishWrapperHeight();
    }
});
