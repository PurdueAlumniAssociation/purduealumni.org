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

    // filters
    var filters = (function () {
        if ( lifeMemberUpgrade === 'yes' ) {
            showAll( [professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer] );
            return 'lifeMemberUpgrade';
        }

        if ( recentGrad === 'yes' && membershipType === 'joint' ) {
            showAll( [basicRadioContainer, plusRadioContainer, year1RadioContainer] );
            return 'recentGradJoint';
        }

        if ( recentGrad === 'yes' && membershipType === 'individual' ) {
            showAll( [basicRadioContainer, plusRadioContainer, professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer] );
            return 'recentGradIndividual';
        }

        if ( recentGrad == 'no' && lifeMemberUpgrade == 'no' ) {
            if ( membershipType == 'individual' ) {
                showAll( [basicRadioContainer, plusRadioContainer, professionalRadioContainer, careerMaxRadioContainer, year1RadioContainer, year3RadioContainer, year10RadioContainer] );
                return 'individual';
            } else { // membershipType == 'joint'
                showAll( [basicRadioContainer, plusRadioContainer, year1RadioContainer, year3RadioContainer, year10RadioContainer] );
                return 'joint';
            }
        }
    })();

    // onclick
    if ( filters == 'recentGradJoint' ) {
        basicRadio.click( function () {
            year3RadioContainer.hide();
        });

        plusRadio.click( function () {
            year3RadioContainer.show();
        });
    } else if ( filters == 'joint' ) {
        basicRadio.click( function () {
            year3RadioContainer.hide();
            year10RadioContainer.hide();
        });

        plusRadio.click( function () {
            year3RadioContainer.show();
            year10RadioContainer.show();
        });
    } else if ( filters == 'recentGradIndividual' ) {
        basicRadio.click( function () {
            year3RadioContainer.hide();
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
    } else if ( filters == 'individual' ) {
        basicRadio.click( function () {
            year3RadioContainer.hide();
            year10RadioContainer.hide();
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
        });
    }

});