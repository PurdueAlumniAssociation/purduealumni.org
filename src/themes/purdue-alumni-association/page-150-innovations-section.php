<?php
    /*
        Template Name: 150 innovations section
    */
?>
<?php get_header(); ?>
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
      <section class="row">
            <div class="layout">
                <div class="layout__main">
                    <main class="" id="main" tabindex="-1">
                  <div class="innovations-150-item">
                    <h1 style="text-align:center; margin-bottom: 2rem;"><?php the_title(); ?></h1>
                      <p class="innovations-150-item__gold-header">&mdash; Agriculture &mdash;</p>
                      <p class="innovations-150-item__black-header">Breeding Apples</p>
                      <p>Purdue University has the largest apple-breeding program in the world. Jules Janick, apple geneticist,
                          has created more than 20 varieties of apples and pears. The partnership with Rutgers,
                          the State University of New Jersey and the University of Illinois dates back to 1945,
                          as researchers looked to breed apples resistant to scab caused by a fungal pathogen. Up to the present,
                          1,500 selections have been made, of which 44 have been released for advanced testing.
                          A number of the advanced selections have been patented.</p>
                      <div class="innovations-150-item__image-container">
                          <img class="innovations-150-item__image" src="http://via.placeholder.com/700x400" alt="" />
                          <div class="innovations-150-item__credit-container">
                              <i class="fas fa-camera innovations-150-item__credit-icon"></i><p class="innovations-150-item__credit">Purdue Research Foundation</p>
                          </div>
                      </div>
                  </div>
                  <!-- <div class="innovations-150__item">
                      <p class="innovations-150__gold-header">&mdash; Agriculture &mdash;</p>
                      <p class="innovations-150__black-header">Corn and Sorghum</p>
                      <p class="innovations-150__content">Both high-lysine corn and high-lysine sorghum were developed by Purdue University researchers.
                          The high-lysine mutant gene improves the quality of protein, increasing the nutritional value.</p>
                      <hr>
                  </div> -->
              <!-- </section> -->
              </div>
              <aside class="layout__sidebar">
                  <?php dynamic_sidebar( 'left-sidebar' ); ?>
              </aside>
            </main>
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
