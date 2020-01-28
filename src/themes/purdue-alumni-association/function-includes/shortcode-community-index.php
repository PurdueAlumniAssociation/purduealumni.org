<?php

function output_community_list($atts){
  $atts = shortcode_atts( array(
    'type' => 'club',
    'ul_class' => 'community-list'
  ), $atts );
  // echo $atts['type'];

  $args = array(
      'post_type' => 'community',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'nopaging' => true,
  );

  if ($atts['type'] == "club") {
      $args['meta_query'] = array(
          'relation' => 'AND',
          'query_community_type' => array(
              'key' => 'community__type',
              'value' => $atts['type'], // Optional
          ),
          'query_community_state' => array(
              'key' => 'community__state',
              'compare' => 'EXISTS', // Optional
          ),
      );
      $args['orderby'] = array(
          'query_community_state' => 'ASC',
          'post_title' => 'ASC',
      );
  } elseif ($atts['type'] == "international") {
      $args['meta_query'] = array(
          'relation' => 'AND',
          'query_community_type' => array(
              'key' => 'community__type',
              'value' => $atts['type'], // Optional
          ),
          'query_community_country' => array(
              'key' => 'community__country',
              'compare' => 'EXISTS', // Optional
          ),
      );
      $args['orderby'] = array(
          'query_community_country' => 'ASC',
          'post_title' => 'ASC',
      );
  } elseif ($atts['type'] == "affinity") {
      $args['meta_key'] = 'community__type';
      $args['meta_value'] = 'affinity';
      $args['orderby'] = 'post_title';
      $args['order'] = 'ASC';
  }
  $the_query = new WP_Query( $args );

  $prev_state = "";
  $output = "";

  if ( $the_query->have_posts() ) {

      // start the unordered list for the communities
      $output .= "<ul class=\"{$atts['ul_class']}\">";

      // loop through the results of the query
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $community_id = get_the_ID();

          // run this logic for clubs
          if ( $atts['type'] == "club" ) {

              $state = rwmb_meta( 'community__state' );
              $state_dashes = strtolower(str_replace(" ", "-", $state));
              $name = get_the_title();

              // check for new state
              // if the previous state is different than the current state
              if ($prev_state != $state) {
                  // if the previous state is not empty, close the nested list
                  if ($prev_state != "" ) {
                      $output .= "</ul></li>";
                  }

                  // add the state to the list and open a nested list for any locations inside
                  $output .= "<li class='community-list-item community-list-item--state' id=\"{$state_dashes}\">{$state}<ul>";

                  // update the previous state with the current state for the next loop
                  $prev_state = $state;
              }

              // add the current location to the nested list
              $output .= "<li class='community-list-item community-list-item--location'><a href=\"". get_the_permalink(). "\">{$name}</a></li>";

          } elseif ( $atts['type'] == "international" ) {

              $name = get_the_title();

              // add the current location to the list
              $output .= "<li class='community-list-item community-list-item--location'><a href=\"". get_the_permalink(). "\">{$name}</a></li>";

          } elseif ( $atts['type'] == "affinity" ) {

              // add the current location to the list
              $output .= "<li><a href=\"". get_the_permalink(). "\">". get_the_title(). "</a></li>";
          }
      }

      // close out the last nested list and list item
      if ( $atts['type'] == "club" ) {
          $output .= '</ul></li></ul>';
      }

      // close out the unordered list
      $output .= '</ul>';

      return $output;
  } else {
      // no communities found
      $no_community = "no communities";
      return $no_community;
  }
  wp_reset_postdata();
}
add_shortcode( 'community_list', 'output_community_list');
