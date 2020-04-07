<?php
/**
 * Plugin Name: Purdue Alumni Association Business Popup
 * Description: Add underwriting sections and popups to pages on the site.
 */

function paau_underwriter_top_output() {

    $current_page_id = get_the_id();

    $args = array(
        'post_type' => 'underwriter',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'nopaging' => true,
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $post_ids = rwmb_meta( 'paau_post_ids' );

            if ( in_array($current_page_id, $post_ids) ) {
                ?>
                <div class="underwriter" style="padding: 2em; background-color:#eee;">This content is underwritten by <a href="<?= rwmb_meta( 'paau_business_url' ); ?>"><?= the_title(); ?></a>.</div>
                <?php
                if ( rwmb_meta('paau_type') == "premium" ) {
                    echo rwmb_meta( 'paau_custom_code' );
                    ?>
                    <style>
                    /* The Modal (background) */
                    .modal {
                      display: none; /* Hidden by default */
                      position: fixed; /* Stay in place */
                      z-index: 1; /* Sit on top */
                      left: 0;
                      top: 0;
                      width: 100%; /* Full width */
                      height: 100%; /* Full height */
                      overflow: auto; /* Enable scroll if needed */
                      background-color: rgb(0,0,0); /* Fallback color */
                      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                    }

                    /* Modal Content/Box */
                    .modal-content {
                      background-color: #fefefe;
                      margin: 15% auto; /* 15% from the top and centered */
                      padding: 20px;
                      border: 1px solid #888;
                      width: 80%; /* Could be more or less, depending on screen size */
                    }

                    /* The Close Button */
                    .close {
                      color: #aaa;
                      float: right;
                      font-size: 28px;
                      font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                      color: black;
                      text-decoration: none;
                      cursor: pointer;
                    }
                    </style>
                    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on the button, open the modal
                    btn.onclick = function() {
                      modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                      modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                      if (event.target == modal) {
                        modal.style.display = "none";
                      }
                    }
                    </script>
                    <?php
                }
            }
        }
    }

    wp_reset_postdata();
}
add_action( 'paau_underwriter', 'paau_underwriter_top_output' );
?>