<h1><?php the_title(); ?></h1>
<?php
    $start_date = rwmb_meta( 'start_date', $args );
    $end_date = rwmb_meta( 'end_date', $args );
?>
<p class="trip__date"><?= date( 'F j', $start_date ), "&ndash;", date( 'j, Y', $end_date); ?></p>
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