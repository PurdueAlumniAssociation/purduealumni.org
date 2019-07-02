<?php
    /*
        Template Name: 150 innovations section
    */
?>
<?php get_header(); ?>
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
      <section class="row">
            <div class="layout">
                <div class="layout__main innovations-150-content-wrapper">
                  <main class="" id="main" tabindex="-1">
                    <h1 style="text-align:center; margin-bottom: 2rem;"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                  </main>
                </div>
              <aside class="layout__sidebar">
                  <?php dynamic_sidebar( 'left-sidebar' ); ?>
              </aside>
            </div>
      </section>
  <?php else : ?>
      <section class="row">
          <main id="main" tabindex="-1">
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
          </main>
      </section>
  <?php endif; ?>
  <!-- <div class="innovations-150-sidenav">
    <li><a style="text-decoration:none;" href="#Agriculture">Agriculture</a></li>
    <li><a style="text-decoration:none;" href="#Athletics">Athletics</a></li>
    <li><a style="text-decoration:none;" href="#Engineering">Engineering</a></li>
    <li><a style="text-decoration:none;" href="#Global Impact">Global Impact</a></li>
    <li><a style="text-decoration:none;" href="#Health">Health</a></li>
    <li><a style="text-decoration:none;" href="#Humanities">Humanities</a></li>
    <li><a style="text-decoration:none;" href="#Purdue Firsts">Purdue Firsts</a></li>
    <li><a style="text-decoration:none;" href="#Research & Inventions">Research & Inventions</a></li>
    <li><a style="text-decoration:none;" href="#Science">Science</a></li>
    <li><a style="text-decoration:none;" href="#Space">Space</a></li>
    <li><a style="text-decoration:none;" href="#Technology">Technology</a></li>
    <li><a style="text-decoration:none;" href="#Trailblazers">Trailblazers</a></li>
  </div> -->

<?php get_footer(); ?>
