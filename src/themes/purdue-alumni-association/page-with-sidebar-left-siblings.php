<?php
    /*
        Template Name: Two Column, Left Sidebar with Siblings Nav
    */
?>
<?php get_header(); ?>
<section class="layout">
        <div class="layout__sidebar">
            <?php
            //GET CHILD PAGES IF THERE ARE ANY
            $children = get_pages('child_of='.$post->ID);

            //GET PARENT PAGE IF THERE IS ONE
            $parent = $post->post_parent;

            //DO WE HAVE SIBLINGS?
            $siblings =  get_pages('child_of='.$parent);

            if( count($children) != 0) {
               $args = array(
                 'depth' => 1,
                 'title_li' => '',
                 'child_of' => $post->ID
               );

            } elseif($parent != 0) {
                $args = array(
                     'depth' => 1,
                     'title_li' => '',
                     'exclude' => $post->ID,
                     'child_of' => $parent
                   );
            }
            //Show pages if this page has more than one sibling
            // and if it has children
            if(count($siblings) > 1 && !is_null($args))
            {?>
            <nav class="side-menu">
                 <ul class="side-menu__list">
                     <?php wp_list_pages($args);  ?>
                 </ul>
             </div>
            <?php } ?>
        </div>
        <div class="layout__content">
            <main id="main" tabindex="-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, something went wrong.' ); ?></p>
                <?php endif; ?>
            </main>
        </div>
</section>
<?php get_footer(); ?>