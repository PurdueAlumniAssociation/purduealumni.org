<?php
function paa_add_query_vars_filter( $vars ) {
    $vars[] = "trip-year";
    $vars[] = "item-type";
    $vars[] = "prev-item-id";
    $vars[] = "next-item-id";
    return $vars;
}
add_filter( 'query_vars', 'paa_add_query_vars_filter' );