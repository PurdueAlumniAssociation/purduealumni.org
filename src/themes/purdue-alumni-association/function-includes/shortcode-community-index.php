<?php

function output_community_list($atts){
  $type = shortcode_atts( array(
    'type' => 'club'
  ), $atts );
  // echo $type['type'];

  $args = array(
      'post_type' => 'community',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'nopaging' => true,
  );

  if ($type['type'] == "club") {
      $args['meta_query'] = array(
          'relation' => 'AND',
          'query_community_type' => array(
              'key' => 'community__type',
              'value' => $type['type'], // Optional
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
  } elseif ($type['type'] == "international") {
      $args['meta_query'] = array(
          'relation' => 'AND',
          'query_community_type' => array(
              'key' => 'community__type',
              'value' => $type['type'], // Optional
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
  } elseif ($type['type'] == "affinity") {
      $args['meta_key'] = 'community__type';
      $args['meta_value'] = 'affinity';
      $args['orderby'] = 'post_title';
      $args['order'] = 'ASC';
  }
  $the_query = new WP_Query( $args );

  $prev_location = "";
  if ( $the_query->have_posts() ) {
      $output = "";

      // start the unordered list for the communities
      $output .= '<ul class="community-list">';

      // loop through the results of the query
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $community_id = get_the_ID();

          // run this logic for clubs and interantional networks
          if ($type['type'] == "club" || $type['type'] == "international") {
              // select data source based on type of community
              if ($type['type'] == "club") {
                  $state_country = rwmb_meta( 'community__state' );
              } elseif ($type['type'] == "international") {
                  $state_country = rwmb_meta( 'community__country' );
              }

              // check for new state/country
              // if the previous state/country is different than the current state/country
              if ($prev_location != $state_country) {
                  // if the previous state/country is not empty, close the nested list
                  if ($prev_location != "" ) {
                      $output .= "</ul></li>";
                  }

                  // add the state/country to the list and open a nested list for any locations inside
                  $output .= "<li class='community-list-item community-list-item--state-country'>${state_country}<ul>";

                  // update the previous state/country with the current state/country for the next loop
                  $prev_location = $state_country;
              }

              // add the current location to the nested list
              $output .= "<li class='community-list-item community-list-item--location'><a href=\"". get_the_permalink(). "\">". get_the_title(). "</a></li>";

          } elseif ($type['type'] == "affinity") {
              // add the current location to the list
              $output .= "<li><a href=\"". get_the_permalink(). "\">". get_the_title(). "</a></li>";
          }
      }

      // close out the last nested list, list item, and unordered list
      $output .= '</ul></li></ul>';

      return $output;
  } else {
      // no communities found
      $no_community = "no communities";
      return $no_community;
  }
  wp_reset_postdata();
}
add_shortcode( 'community_list', 'output_community_list');
