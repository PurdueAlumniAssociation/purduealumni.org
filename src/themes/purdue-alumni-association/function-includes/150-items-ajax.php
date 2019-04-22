<?php
function more_post_ajax() {

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 1;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged' => $page,
    );

    $loop = new WP_Query($args);

    $output = '';

    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
            $output .= '<h3>' . get_the_title() . '</h3>';
        endwhile;
    endif;
    wp_reset_postdata();
    die($output);
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// function paa_loadmore_ajax_handler() {
//
// 	// prepare our arguments for the query
// 	$args = json_decode( stripslashes( $_POST['query'] ), true );
// 	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
// 	$args['post_status'] = 'publish';
//
// 	// it is always better to use WP_Query but not here
// 	query_posts( $args );
//
// 	if( have_posts() ) :
//
// 		// run the loop
// 		while( have_posts() ): the_post();
//
// 			// look into your theme code how the posts are inserted, but you can use your own HTML of course
// 			// do you remember? - my example is adapted for Twenty Seventeen theme
// 			//get_template_part( 'template-parts/content', '150-item' );
// 			// for the test purposes comment the line above and uncomment the below one
// 			echo "<h3>", the_title(), "</h3>";
//
//
// 		endwhile;
//
// 	endif;
// 	die; // here we exit the script and even no wp_reset_query() required!
// }
// add_action('wp_ajax_loadmore', 'paa_loadmore_ajax_handler'); // wp_ajax_{action}
// add_action('wp_ajax_nopriv_loadmore', 'paa_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}