<?php get_header(); ?>
    <main class="front-page" id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <section class="row row--no-padding">
            <a href="https://dayofgiving.purdue.edu/" target="_blank" style="display:block;">
                <div class="homepage-hero">
                    <img class="homepage-hero__image" src="https://www.purduealumni.org/wp-content/uploads/PDOG_19_hero.jpg" alt="Purdue Day of Giving. Take the next giant leap." />
                </div>
            </a>
        </section>
        <?php
        get_template_part( 'template-parts/graphic-boxes' );
        ?>
        <section class="row bootstrap-row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h2 class="front-page__section-title">News & Events</h2>
                <?php get_template_part( 'template-parts/news-events' ); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="front-page__section-title front-page__section-title--col-2"><?= rwmb_meta( 'column_2_title' ); ?></h2>
                <?php get_template_part( 'template-parts/feature-box' ); ?>
            </div>
        </section>
        <section class="row tint">
            <script async src="https://cdn.hypemarks.com/pages/a5b5e5.js"></script>
            <div class="tintup" data-id="alumni_web" data-columns="" data-expand="true" data-infinitescroll="true" data-personalization-id="877668" style="height:250px;width:100%;"></div>
            <p class="tint__sub-text">Follow us on social media to stay connected <span class="tint__social-media-handle">@purduealumni</span>
            </p>
        </section>
    </main>
<?php get_footer(); ?>