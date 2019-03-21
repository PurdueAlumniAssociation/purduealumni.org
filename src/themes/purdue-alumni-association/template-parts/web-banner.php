<?php
if ( has_post_thumbnail() ) {
    echo "<section class=\"row row--no-padding\">";
        the_post_thumbnail( 'full', array('class' => 'banner') );
    echo "</section>";
}