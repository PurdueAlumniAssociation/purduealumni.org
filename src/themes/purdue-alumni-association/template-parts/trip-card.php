<?php

$start_date = rwmb_meta( 'start_date' );
$end_date = rwmb_meta( 'end_date' );
$months_same = true;
$years_same = true;

// are months same?
if ( date( 'n', $start_date ) != date( 'n', $end_date ) ) {
    $months_same = false;
}
// are years same?
if ( date( 'Y', $start_date ) != date( 'Y', $end_date ) ) {
    $years_same = false;
}

// build display date
// defaults
$display_date_start = date( 'F j', $start_date );
$display_date_end = date( 'j, Y', $end_date );
$display_date_divider = "&ndash;";

// account for different years
if ( ! $years_same ) {
    $display_date_start .= date( ', Y', $start_date );
}

// account for different months
if ( ! $months_same )  {
    $display_date_end = date( 'F j, Y', $end_date );
}

$display_date = $display_date_start . $display_date_divider . $display_date_end;
 ?>

<div class="card">
    <img class="card__image" src="http://www.legalproductivity.com/wp-content/uploads/2011/08/hamburger-300x225.jpg" alt="screenshot">
    <div class="card__content">
        <h3 class="card__title"><?php the_title(); ?></h3>
        <p><?php echo $display_date; ?></p>
    </div>
</div>
