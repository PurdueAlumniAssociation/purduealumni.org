<?php
$id = get_the_ID();
$title = get_the_title();
$url = get_permalink( $id );
$start_date = rwmb_meta( 'start_date', '', $id );
$end_date = rwmb_meta( 'end_date', '', $id );
$image = rwmb_meta( 'thumbnail', '', $id );
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

$img_src = $image['full_url'];
$img_alt = $image['alt'];
?>
<a href="<?= $url ?>" class="card" style="margin:1em;">
    <img class="card__image" src="<?= $img_src; ?>" alt="<?= $img_alt; ?>">
    <div class="card__content">
        <h3 class="card__title"><?= $title; ?></h3>
        <p><?= $display_date; ?></p>
    </div>
</a>