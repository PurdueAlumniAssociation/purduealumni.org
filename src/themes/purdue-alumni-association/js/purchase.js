$(document).ready( function($) {
    // use purchaseData
    var lifeMemberUpgrade = purchaseData.input_32,
        purchaseType = purchaseData.input_42,
        recentGrad = purchaseData.input_10,
        membershipType = purchaseData.input_5;

    var basicName = 'choice_5_63_0',
        plusName = 'choice_5_63_1',
        professionalName = 'choice_5_63_2',
        careerMaxName = 'choice_5_63_3',
        year1Name = 'choice_5_57_0',
        year3Name = 'choice_5_57_1',
        year10Name = 'choice_5_57_2';

        basicRadioContainer = $('.g' + basicName),
        plusRadioContainer = $('.g' + plusName),
        professionalRadioContainer = $('.g' + professionalName),
        careerMaxRadioContainer = $('.g' + careerMaxName),
        year1RadioContainer = $('.g' + year1Name),
        year3RadioContainer = $('.g' + year3Name),
        year10RadioContainer = $('.g' + year10Name),

        basicRadio = $('#' + basicName),
        plusRadio = $('#' + plusName),
        professionalRadio = $('#' + professionalName),
        careerMaxRadio = $('#' + careerMaxName),
        year1Radio = $('#' + year1Name),
        year3Radio = $('#' + year3Name),
        year10Radio = $('#' + year10Name);

    //year10Radio.attr('disabled', true);
    allOptions = [ basicRadioContainer, plusRadioContainer, professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer, year10RadioContainer ];

    function hideAll ( array ) {
        $.each( array, function() {
            $(this).hide();
        } )
    }

    function showAll ( array ) {
        $.each( array, function() {
            $(this).show();
        } )
    }

    hideAll( allOptions );

    // iife
    var filters = (function () {
        var plan,
            year;

        if ( lifeMemberUpgrade === 'yes' ) {
            // Life Member Upgrade
            showAll( [professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer] );

            professionalRadio.prop("checked", true);
            year1Radio.prop("checked", true);

            return;
        }

        if ( recentGrad === 'yes' && membershipType === 'individual' ) {
            // Recent Grad Individual
            showAll( [basicRadioContainer, plusRadioContainer, professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer] );

            plusRadio.prop("checked", true);
            year1Radio.prop("checked", true);

            basicRadio.click( function () {
                year3RadioContainer.hide();
                year1Radio.trigger( "click" );
                eval( basicRadio.attr("onclick") );
            });

            plusRadio.click( function () {
                year3RadioContainer.show();
            });

            professionalRadio.click( function () {
                year3RadioContainer.show();
            });

            careerMaxRadio.click( function () {
                year3RadioContainer.show();
            });

            return;
        }

        if ( recentGrad === 'yes' && membershipType === 'joint' ) {
            // Recent Grad Joint
            showAll( [basicRadioContainer, plusRadioContainer, year1RadioContainer, year3RadioContainer] );

            basicRadio.click( function () {
                year3RadioContainer.hide();
                year1Radio.trigger( "click" );
                eval( basicRadio.attr("onclick") );
            });

            plusRadio.click( function () {
                year3RadioContainer.show();
            });

            return;
        }

        if ( recentGrad == 'no' && lifeMemberUpgrade == 'no' ) {
            plusRadio.prop("checked", true);
            year1Radio.prop("checked", true);

            if ( membershipType == 'individual' ) {
                // Individual
                showAll( [basicRadioContainer, plusRadioContainer, professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer, year10RadioContainer] );

                basicRadio.click( function () {
                    year3RadioContainer.hide();
                    year10RadioContainer.hide();
                    year1Radio.trigger( "click" );
                    eval( basicRadio.attr("onclick") );
                });

                plusRadio.click( function () {
                    year3RadioContainer.show();
                    year10RadioContainer.show();
                });

                professionalRadio.click( function () {
                    year3RadioContainer.show();
                    year10RadioContainer.show();
                });

                careerMaxRadio.click( function () {
                    year3RadioContainer.show();
                    year10RadioContainer.hide();

                    // get current states
                    yearSelectedRadio = $('input:checked', '#input_5_57');

                    if ( yearSelectedRadio[0].id == year10Name ) {
                        year1Radio.trigger( "click" );
                        eval( careerMaxRadio.attr("onclick") );
                    }

                });
            } else {
                // Joint
                showAll( [basicRadioContainer, plusRadioContainer, year1RadioContainer, year3RadioContainer, year10RadioContainer] );

                basicRadio.click( function () {
                    year3RadioContainer.hide();
                    year10RadioContainer.hide();
                    year1Radio.trigger( "click" );
                    eval( basicRadio.attr("onclick") );
                });

                plusRadio.click( function () {
                    year3RadioContainer.show();
                    year10RadioContainer.show();
                });
            }

            return;
        }
    })();
});

