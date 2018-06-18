$(document).ready(function() {

    var templateUrl = object_name.templateUrl;

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
                    label: currentLanguage === 'rs' ? 'Fizičko lice' : 'Private Individual',
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
                    label: currentLanguage === 'rs' ? 'Fizičko lice' : 'Private Individual',
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
            question: currentLanguage === 'rs' ? 'Vrednost pošiljke' : 'Value',
            selectedValue: '',
            options: {
                '1': {
                    value: '1',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        appendToWizzardFinishAndAnimate();
                    }
                },
                '2': {
                    value: '2',
                    next: function() {
                        removeNextSiblings($("#value" + this.value));
                        appendToWizzardFinishAndAnimate();
                    }
                }
            }
        }
    };

    function setImportWizzardWrapperHeight() {
        let importWizzardHeigh = getElemHeight(importWizzard) + 10;
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
                return currentLanguage === 'rs' ?
                '<div><p>Fizička lica koja očekuju pošiljku od fizičkih lica za lične potrebe u realnoj i dokazivoj vrednosti do 70 evra su oslobođena plaćanja carine i PDV-a.</p><p>Fizička lica po zakonu Republike Srbije ne mogu uvoziti uzorke, medikimante i medicinske aparate. Za uvoz medikamenata i medicinkih uređaja potrebna je dozvola Agencije za lekove i medicinska sredstva.</p><p>Fizička lica su oslobođena carine i PDV-a još u slučaju uvoza ličnih stvari i autorskih dela, ali su u obavezi da dokažu da je reč o autorskom delu ili ličnim stvarima.</p></div>' :
                "<div><p>Private individuals who are expecting shipments from other private individuals for personal use, in real and probable value of up to 70 euros are exempted from customs duties/taxes and VAT.</p><p>The law of the Republic of Serbia doesn’t allow import of samples, medicines and medical devices to private individuals. An import license of the Medicine and Medical Devices Agency of Serbia is required.</p><p>Private individuals are exempted from customs duties/taxes and VAT if they are importing personal items and copyrights, but they have to prove that it is their copyright work or personal item.</p></div>";
            } else if (importData.value.selectedValue === '2') {
                return '<div>' + (currentLanguage === 'rs' ? '<p>Preuzmite dokumenta:</p>' : '<p>Download documents:</p>') + '<div class="d-flex justify-content-center flex-wrap"><a href="' + templateUrl + '/assets/documents/isprava-o-zastupanju.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Isprava o zastupanju</span></a><a href="' + templateUrl + '/assets/documents/import/ovlascenje-fizicka-lica.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Ovlašćenje za fizička lica</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava za fizička lica</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-o-realnoj-vrednosti-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava o realnoj vrednosti za fizička lica</span></a></div></div>';
            }
        } else if (importData.senderType.selectedValue === 'company') {
            if (importData.recipientType.selectedValue === 'privateIndividual') {
                if (importData.value.selectedValue === '1') {
                    return currentLanguage === 'rs' ? '<div>Fizička lica koja pošiljke dobijaju od ino-kompanija, a za ličnu upotrebu, mogu biti oslobođena plaćanja carine ( PDV je obavezan) ukoliko je pošiljka u realnoj vrednosti do 50 evra, u čiju vrednost se ne uračunavaju troškovi transporta.</div>' : "<div><p>Private individuals who are expecting shipments from other private individuals for personal use, in real and probable value of up to 70 euros are exempted from customs duties/taxes and VAT.</p><p>The law of the Republic of Serbia doesn’t allow import of samples, medicines and medical devices to private individuals. An import license of the Medicine and Medical Devices Agency of Serbia is required.</p><p>Private individuals are exempted from customs duties/taxes and VAT if they are importing personal items and copyrights, but they have to prove that it is their copyright work or personal item.</p></div>";
                } else if (importData.value.selectedValue === '2') {
                    return '<div>' + (currentLanguage === 'rs' ? '<p>Preuzmite dokumenta:</p>' : '<p>Download documents:</p>') + '<div class="d-flex justify-content-center flex-wrap"><a href="' + templateUrl + '/assets/documents/isprava-o-zastupanju.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Isprava o zastupanju</span></a><a href="' + templateUrl + '/assets/documents/import/ovlascenje-fizicka-lica.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Ovlašćenje za fizička lica</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava za fizička lica</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-o-realnoj-vrednosti-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava o realnoj vrednosti za fizička lica</span></a></div></div>';
                }
            } else if (importData.recipientType.selectedValue === 'company') {
                if (importData.value.selectedValue === '1') {
                    return currentLanguage === 'rs' ? '<div><p>Pravna lica su oslobođena plaćanja carine ali ne i PDV-a za pošiljke koje imaju realnu vrednost do 50 evra i služe isključivo za potrebe kompanije, a ne za dalju prodaju.</p><p>Pošiljke vrednosti do 50 evra moraju da se carine u redovnoj proceduri, ako roba zahteva bilo kakvo rešenje nadležnog ministarstva (ratel, agencija za lekove, sanitarni, tržišni, fito sertifikat za bezbednost hrane i slično).</p><p>Pravna lica  su oslobođena plaćanja carine ali ne i PDV-a za pošiljke koje služe kao uzorci i reklamni materijal, koji se besplatno primaju iz inostranstva a doprinose razvoju novih tehnologija, izuzev na uvoz automobila i igara na sreću.</p></div>' : '<div><p>Legal entities are exempted from customs duties (not VAT) for shipments that have a real value of up to 50 euros and serve exclusively for the company´s needs, not for further sale.</p><p>Shipments of up to 50 euros are subject to customs duties in a formal entry if the goods require any solution from the competent ministry (Ratel, Medicine and Medical Devices Agency, Sanitary, Market or  Fito certificate of food safety etc.)</p><p>Legal entities are exempted from customs duties but not VAT for any shipment that serves as samples and promo material, which are received free of charge and contribute to the development of new technologies, except for the import of automobiles and lottery games.</p></div>';
                } else if (importData.value.selectedValue === '2') {
                    return '<div>' + (currentLanguage === 'rs' ? '<p>Preuzmite dokumenta:</p>' : '<p>Download documents:</p>') + '<div class="d-flex justify-content-center flex-wrap"><a href="' + templateUrl + '/assets/documents/isprava-o-zastupanju.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Isprava o zastupanju</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-o-besplatnoj-posiljci.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava o besplatnoj pošiljci</span></a><a href="' + templateUrl + '/assets/documents/import/izjava-o-nameni.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Izjava o nameni</span></a><a href="' + templateUrl + '/assets/documents/nalog-za-carinjenje.doc" class="text-card-item d-flex align-items-center"><i class="mdi mdi-download mr-2"></i><span>Nalog za carinjenje</span></a></div></div>';
                }
            }
        }
    }
});
