<?php get_header(); ?>
    <main class="front-page" id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <section class="row row--slim alert-banner flex" id="alert">
            <i class="fas fa-exclamation-circle alert-banner__icon" aria-hidden="true"></i>
            <div class="alert-banner__message">
                <h2 class="alert-banner__title"><i class="fas fa-exclamation-circle alert-banner__icon--mobile" aria-hidden="true"></i>California Wildfires</h2>
                <p>The recent fires in California have forced tens of thousands of people from their homes. We're thinking of all those affected, including our Purdue alumni family.</p>
                <p>Please consider donating to one of the many charities aiding the families: <a href="https://www.redcross.org/about-us/news-and-events/news/2018/california-wildfires-red-cross-helps-as-thousands-evacuate.html" target="_blank" rel="nofollow">American Red Cross</a>, <a href="https://disaster.salvationarmyusa.org/" target="_blank" rel="nofollow">The Salvation Army USA</a>, <a href="https://www.unitedwayla.org/en/give/disaster-relief-fund/" target="_blank" rel="nofollow">United Way of Greater Los Angeles</a>, and <a href="https://app.mobilecause.com/f/23ef/n?vid=4v4l" target="_blank" rel="nofollow">United Way of Ventura County</a>.</p>
                <i class="fas fa-times" id="alert-close"><span class="sr-only">Close</span></i>
            </div>
        </section>
        <?php

        get_template_part( 'template-parts/homepage-hero' );

        //get_template_part( 'template-parts/graphic-boxes' );
        ?>
        <section class="row flex">
            <div class="flex__item flex__item--two-thirds">
                <h2 class="front-page__section-title">News & Events</h2>
                <?php
                    $news_event_ids = rwmb_meta( 'homepage__news_events' );
                    if ( $news_event_ids ) {
                        foreach ( $news_event_ids as $news_event_id ) {
                            $news_event_title = rwmb_meta( 'news_event__title', '', $news_event_id );
                            $news_event_description = rwmb_meta( 'news_event__description', '', $news_event_id );
                            $news_event_url = rwmb_meta( 'news_event__url', '', $news_event_id );
                            $news_event_button_label = rwmb_meta( 'news_event__button_label', '', $news_event_id );
                            $news_event_new_tab = rwmb_meta( 'news_event__new_tab', '', $news_event_id );
                            $news_event_thumbnail_image = rwmb_meta( 'news_event__thumbnail_image', array( 'limit' => 1 ), $news_event_id );

                            $target = '';
                            if ( $hero_new_tab ) {
                                $target = ' target="_blank" rel="noopener"';
                            }

                            // get image
                            $image = $news_event_thumbnail_image[0];
                            $img_src = $image['full_url'];
                            $img_alt = $image['alt'];

                            echo "<div class=\"news-event\">
                                <img class=\"news-event__image\" src=\"{$img_src}\" alt=\"{$img_alt}\" />
                                <div>
                                    <h3 class=\"news-event__title\">{$news_event_title}</h3>
                                    <p class=\"news-event__description\">{$news_event_description}</p>
                                    <a class=\"button\" class=\"news-event__cta\"{$target} href=\"{$news_event_url}\">{$news_event_button_label}</a>
                                </div>
                            </div>";
                        }
                    }
                ?>
            </div>
            <div class="flex__item flex__item--one-third">
                <?php
                $column_title = rwmb_meta( 'homepage__column_2_title', '' );
                echo "<h2 class=\"front-page__section-title front-page__section-title--mo-top-margin\">$column_title</h2>";

                $feature_box_id = rwmb_meta( 'homepage__feature_box' );
                if ( $feature_box_id ) {
                    $feature_box_title = rwmb_meta( 'feature_box__title', '', $feature_box_id );
                    $feature_box_content = rwmb_meta( 'feature_box__content', '', $feature_box_id );
                    $feature_box_button_label = rwmb_meta( 'feature_box__button_label', '', $feature_box_id );
                    $feature_box_url = rwmb_meta( 'feature_box__url', '', $feature_box_id );
                    $feature_box_new_tab = rwmb_meta( 'feature_box__new_tab', '', $feature_box_id );
                    $feature_box_image = rwmb_meta( 'feature_box__image', array( 'limit' => 1 ), $feature_box_id );

                    $target = '';
                    if ( $hero_new_tab ) {
                        $target = ' target="_blank" rel="noopener"';
                    }

                    // get image
                    $image = $feature_box_image[0];
                    $img_src = $image['full_url'];
                    $img_alt = $image['alt'];

                    echo "<aside class=\"feature-box\">
                            <img class=\"feature-box__image\" src=\"https://www.purduealumni.org/wp-content/uploads/feature-box_tyler-trent.jpg\" alt=\"Tyler Trent\">
                            <div class=\"feature-box__content\">
                                <p class=\"feature-box__text\">We want to hear how a Purdue alumnus made a giant impact. It could be in one person's life or the life of an entire community. Tyler Trent, pictured, received the inaugural Purdue Alumni Impact Award.</p>
                                <p style=\"margin-bottom: 0;\"><a class=\"button button--almost-black\" href=\"https://www.purduealumni.org/giant-impact\">Tell Their Story</a></p>
                            </div>
                        </aside>";
                }
                ?>
            </div>
        </section>
        <section class="row tint">
            <script async src="https://cdn.hypemarks.com/pages/a5b5e5.js"></script>
            <div class="tintup" data-id="alumni_web" data-columns="" data-expand="true" data-infinitescroll="true" data-personalization-id="877668" style="height:250px;width:100%;"></div>
            <p class="tint__sub-text">Follow us on social media to stay connected <span class="tint__social-media-handle">@purduealumni</span>
            </p>
        </section>
    </main>
    <script>
        $("#alert-close").click( function() {
            $("#alert").slideToggle( {
                duration: 'fast',
                easing: 'linear'
            });
        });
    </script>
<?php get_footer(); ?>