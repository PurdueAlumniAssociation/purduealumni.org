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

  $old_location = "";
  if ( $the_query->have_posts() ) {
      $output = "";
      $output .= '<ul class="community-list">';
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $community_id = get_the_ID();

          if ($type['type'] == "club" || $type['type'] == "international") {
              if ($type['type'] == "club") {
                  $location = rwmb_meta( 'community__state' );
              } elseif ($type['type'] == "international") {
                  $location = rwmb_meta( 'community__country' );
              }

              //check for new location
              if ($old_location != $location) {
                  if ($old_location != "" ) {
                      $output .= "</ul></li>";

                  }
                  $output .= "<li class='community-list-item community-list-item--state-country'>${location}<ul>";

                  $old_location = $location;
              }

              $output .= "<li class='community-list-item community-list-item--location'><a href=\"". get_the_permalink(). "\">". get_the_title(). "</a></li>";

          } elseif ($type['type'] == "affinity") {
              $output .= "<li><a href=\"". get_the_permalink(). "\">". get_the_title(). "</a></li>";
          }
      }
      $output .= '</ul></li></ul>';
      return $output;
  } else {
      // no posts found
      $no_community = "no communities";
      return $no_community;
  }
  wp_reset_postdata();
}
add_shortcode( 'community_list', 'output_community_list');
