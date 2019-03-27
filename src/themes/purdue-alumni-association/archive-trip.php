<?php
/**
 * The template for displaying archive of trips
 */
?>
<?php get_header(); ?>
<?php

class Trip {
    public $id;
    public $title;
    public $url;
    public $start_date;
    public $end_date;
    public $thumbnail;
    public $banner_url;

    function __construct( $id, $title, $url, $start_date, $end_date, $thumbnail, $banner_url ) {
        $this->id = $id;
        $this->title = $title;
        $this->url = $url;
        $this->start_date = $start_date + 0;
        $this->end_date = $end_date + 0;
        $this->thumbnail = $thumbnail;
        $this->banner_url = $banner_url;
    }

    function output_display_date() {
        $months_same = true;
        $years_same = true;

        // are months same?
        if ( date( 'n', $this->start_date ) != date( 'n', $this->end_date ) ) {
            $months_same = false;
        }
        // are years same?
        if ( date( 'Y', $this->start_date ) != date( 'Y', $this->end_date ) ) {
            $years_same = false;
        }

        // build display date
        // defaults
        $display_date_start = date( 'F j', $this->start_date );
        $display_date_end = date( 'j, Y', $this->end_date );
        $display_date_divider = "&ndash;";

        // account for different years
        if ( ! $years_same ) {
            $display_date_start .= date( ', Y', $this->start_date );
        }

        // account for different months
        if ( ! $months_same )  {
            $display_date_end = date( 'F j, Y', $this->end_date );
        }

        $display_date = $display_date_start . $display_date_divider . $display_date_end;

        echo $display_date;
    }
}

// get GET param called trip-year or default to 'all' if none present
$filter_year = get_query_var( 'trip-year', 'all' );
$page_title = "All Trips";

if ( $filter_year != 'all' ) {
    $page_title = $filter_year . " Trips";
}

// query
$the_query = new WP_Query(array(
   'post_type'         => 'trip',
   'posts_per_page'    => -1//,
   // 'meta_key'          => 'start_date',
   // 'orderby'           => 'meta_value',
   // 'order'             => 'ASC'
));

$args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_trips' );
$trips = array();

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $trips[] = new Trip(
            get_the_ID(),
            get_the_title(),
            get_permalink(),
            rwmb_meta( 'start_date', $args ),
            rwmb_meta( 'end_date', $args ),
            rwmb_meta( 'thumbnail', $args ),
            get_the_post_thumbnail_url()
        );
    }
} else {
    echo "No trips found!";
}

// sort trips by start date
function cmp($a, $b) {
    if ($a->start_date == $b->start_date) {
        return 0;
    }
    return ($a->start_date < $b->start_date) ? -1 : 1;
}
usort( $trips, "cmp" );

// remove events older than 30 days
foreach ( $trips as $index => $trip ) {
    if ( $trip->start_date < ( strtotime( "now" ) - ( 30 * 24 * 60 * 60 ) ) ) {
        unset( $trips[$index] );
    }
}

// create filtered array
$filtered_trips = array();

// include all or filter by year passed in URL
if ( $filter_year == all ) {
    $filtered_trips = $trips;
} else {
    foreach ( $trips as $trip ) {
        if ( date( 'Y', $trip->start_date ) == $filter_year ) {
            $filtered_trips[] = $trip;
        }
    }
}

// copy the filtered array and randomize it for the page banner rotator
$random_trips = $filtered_trips;
shuffle($random_trips);
?>
    <section class="row row--no-padding">
        <div class="trip-slideshow-container">
            <?php foreach ( $random_trips as $trip ) { ?>
                <div class="trip-slide trip-fade">
                    <img src="<?= $trip->banner_url ?>" />
                    <div class="trip-slide__text-box">
                        <span class="trip-slide__title"><?php echo $trip->title ?></span>
                        <span class="trip-slide__date"><?php $trip->output_display_date(); ?></span>
                    </div>
                </div>
        <?php } ?>
        </div>
    </section>
    <section class="row">
        <div class="layout">
            <div class="layout__main">
                <main class="" id="main" tabindex="-1">
                    <h1><?php echo $page_title; ?></h1>
                    <?php
                    $current_month = "";
                    $first = true;

                    foreach ( $filtered_trips as $trip ) {
                        // output the month section title (and close trip wrapper)
                        if ( date( 'F', $trip->start_date ) != $current_month ) {
                            if ( ! $first ) {
                                // close wrapper on all but first section
                                echo "</div>";
                                $first = true;
                            }
                            $current_month = date( 'F', $trip->start_date );
                            echo "<h2>{$current_month}</h2>";
                            echo "<div class=\"trip-wrapper\">";
                            $first = false;
                        }
                        ?>
                        <a href="<?php echo $trip->url; ?>" class="trip-card">
                            <div class="card">
                                <img class="card__image" src="<?php if ( $trip->thumbnail['full_url'] ) {
                                    echo $trip->thumbnail['full_url'];
                                } else {
                                    echo "https://via.placeholder.com/300x200";
                                } ?>" alt="<?php echo $trip->thumbnail['alt']; ?>">
                                <div class="card__content">
                                    <h3 class="trip-card__title"><?php echo $trip->title; ?></h3>
                                    <p><?php $trip->output_display_date(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?
                    }
                    ?>
                </main>
            </div>
            <aside class="layout__sidebar">
                <?php dynamic_sidebar( 'travel-sidebar' ); ?>
            </aside>
        </div>
    </section>
<?php get_footer(); ?>