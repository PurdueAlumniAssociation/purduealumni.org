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
    public $image;

    function __construct( $id, $title, $url, $start_date, $end_date, $image ) {
        $this->id = $id;
        $this->title = $title;
        $this->url = $url;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->image = $image;
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
   'posts_per_page'    => -1,
   'meta_key'          => 'start_date',
   'orderby'           => 'meta_value',
   'order'             => 'ASC'
));

$trips = array();

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $trips[] = new Trip(
            get_the_ID(),
            get_the_title(),
            get_permalink(),
            rwmb_meta( 'start_date' ),
            rwmb_meta( 'end_date' ),
            rwmb_meta( 'thumbnail' )
        );
    }
} else {
    echo "No trips found!";
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
<style>
    /* Slideshow container */
    .slideshow-container {
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }


    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }
</style>
    <section class="row row--no-padding">
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <?php foreach ( $random_trips as $trip ) { ?>
                <!-- Full-width images with number and caption text -->
                <div class="tripSlides fade">
                    <img src="https://via.placeholder.com/1440x300" style="width:100%">
                    <div class="text"><?php echo $trip->title, "<br />", $trip->output_display_date(); ?></div>
                </div>
        <?php } ?>
        </div>
    </section>
    <section class="row">
        <h1><?php echo $page_title; ?></h1>
        <?php
        $current_month = "";
        $first = true;

        foreach ( $filtered_trips as $trip ) {
        //     // show all or filter by year passed in URL
        //     if ( $filter_year == all || date( 'Y', $trip->start_date ) == $filter_year ) {

                // output the month section title (and close trip wrapper)
                if ( date( 'F', $trip->start_date ) != $current_month ) {
                    if ( ! $first ) {
                        // close wrapper on all but first section
                        echo "</div>";
                        $first = true;
                    }
                    $current_month = date( 'F', $trip->start_date );
                    echo "<h2>{$current_month}</h2>";
                    echo "<div class=\"trip-wrapper\" style=\"margin-left:-1em;\">";
                    $first = false;
                }
                ?>
                <a href="<?php echo $trip->url; ?>" style="display: inline-block; margin: 1em;">
                    <div class="card">
                        <img class="card__image" src="<?php echo $trip->image['full_url']; ?>" alt="<?php echo $trip->image['alt']; ?>">
                        <div class="card__content">
                            <h3 class="card__title"><?php echo $trip->title; ?></h3>
                            <p><?php $trip->output_display_date(); ?></p>
                        </div>
                    </div>
                </a>
                <?
        //     }
        }
        ?>
    </section>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i,
                slides = document.getElementsByClassName("tripSlides");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }

            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
    </script>
<?php get_footer(); ?>