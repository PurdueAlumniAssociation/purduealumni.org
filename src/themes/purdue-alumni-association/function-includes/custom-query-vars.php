<?php
function paa_add_query_vars_filter( $vars ) {
  $vars[] = "trip-year";
  return $vars;
}
add_filter( 'query_vars', 'paa_add_query_vars_filter' );