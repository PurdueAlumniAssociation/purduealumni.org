$(document).ready( function($) {
    // use purchaseData
    var lifeMemberUpgrade = purchaseData.input_32,
        purchaseType = purchaseData.input_42,
        recentGrad = purchaseData.input_10,
        membershipType = purchaseData.input_5;

    var basicRadio = $('#choice_5_63_0'),
        plusRadio = $('#choice_5_63_1'),
        professionalRadio = $('#choice_5_63_2'),
        careerMaxRadio = $('#choice_5_63_3');

    var year1Radio = $('#choice_5_57_0'),
        year3Radio = $('#choice_5_57_1'),
        year10Radio = $('#choice_5_57_2');

    //year10Radio.attr('disabled', true);
    allOptions = [ basicRadio, plusRadio, professionalRadio, careerMaxRadio, year1Radio, year3Radio, year10Radio ];

    function disable ( el ) {
        el.attr('disabled', true);
    }

    function enable ( el ) {
        el.attr('disabled', false);
    }

    // function showAll ( array ) {
    //     $.each( this.show() );
    // }
    //
    // function enableAll ( array ) {
    //     $.each( enable( this ) );
    // }

    // filters
    if ( lifeMemberUpgrade === 'yes' ) {
        basicRadio.hide();
        plusRadio.hide();
        year10Radio.hide();
    }

    if ( recentGrad === 'yes' && membershipType === 'joint' ) {
        professionalRadio.hide();
        careerMaxRadio.hide();
        year10Radio.hide();
    }

    if ( membershipType === 'joint' ) {
        professionalRadio.hide();
        careerMaxRadio.hide();
    }

    // onclick
    

});