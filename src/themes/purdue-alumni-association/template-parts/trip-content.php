<div class="trip">
<h1><?php the_title(); ?></h1>
<?php
    $start_date = rwmb_meta( 'start_date', $args );
    $end_date = rwmb_meta( 'end_date', $args );

function output_display_date($start_date, $end_date) {
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

    echo $display_date;
}
?>
<p class="trip__date"><?php output_display_date($start_date, $end_date); ?></p>

<?php the_content(); ?>
<?php
$operator = rwmb_meta( 'operator', $args );
if ( ! empty( $operator ) ) {
    echo "<p class=\"trip__operator\">Tour Operator: {$operator}</p>";
}

$pricing = rwmb_meta( 'pricing', $args );
if ( ! empty( $pricing ) ) {
    echo "<p class=\"trip__pricing\">Pricing: {$pricing}</p>";
}

$download_array = array();
$download_group = rwmb_meta( 'download_group', $args );

foreach ( $download_group as $download ) {
    if ( ! empty( $download['download_label'] ) && count( $download['download_upload'] ) > 0 ) {
        $download_url = wp_get_attachment_url( $download['download_upload'][0] );
        $download_label = $download['download_label'];

        $download_array[] = "<li><a href=\"{$download_url}\" download>{$download_label}</a></li>";
    }
}

if ( count( $download_array ) > 0 ) {
    echo "<h2>Downloads</h2>";
    echo "<ul>";
    foreach ( $download_array as $list_item ) {
        echo $list_item;
    }
    echo "</ul>";
}

?>
<h2>Next Steps</h2>
<p>We will happily send you brochures listing included features, itineraries, and pricing. Questions or ready to make a reservation? We’re just a phone call away!  Call Mary MacDonald at 800-414-1541 or 765-494-5175, or email <a href = "mailto:alumnitravel@purdue.edu">alumnitravel@purdue.edu</a>.</p>
</div>
