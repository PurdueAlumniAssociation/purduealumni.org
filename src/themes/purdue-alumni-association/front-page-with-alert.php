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
        $homepage_meta = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_homepage' );
        $hero = rwmb_meta( 'hero', $homepage_meta );
        if ( $hero ) {
            echo $hero['hero__html'];
        }
        ?>
        <section class="row row--no-padding front-page__graphic-boxes">
            <div class="big-info-block">
                <div class="big-info-block__row">
                    <?php
                    $colors = array("green", "orange", "dark-gray");
                    $colorCount = 0;
                    $graphic_boxes = rwmb_meta( 'graphic_box', $homepage_meta );
                    if ( $graphic_boxes ) {
                        foreach( $graphic_boxes as $graphic_box ) {
                            $target = '';
                            if ( $graphic_box['graphic_box__new_tab'] ) {
                                $target = ' target="_blank" rel="noopener"';
                            }

                            // get image
                            $imageId = $graphic_box["graphic_box__background_image"][0];
                            $img_src = wp_get_attachment_image_src( $imageId, "full" )[0];

                            echo "<a class=\"big-info-block__third-box\"{$target} href=\"{$graphic_box["graphic_box__url"]}\">
                                <div class=\"graphic-box graphic-box--{$colors[$colorCount]}\" style=\"background-image: url('{$img_src}')\">
                                    <div class=\"graphic-box__content\">
                                        <span class=\"graphic-box__category graphic-box__category--{$colors[$colorCount]}\">{$graphic_box["graphic_box__title"]}</span>
                                        <span class=\"graphic-box__title\">{$graphic_box["graphic_box__cut_line"]}</span>
                                    </div>
                                </div>
                            </a>";
                            $colorCount++;
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="row flex">
            <div class="flex__item flex__item--two-thirds">
                <h2 class="front-page__section-title">News & Events</h2>
                <?php
                $news_events = rwmb_meta( 'news_event', $homepage_meta );
                if ( $news_events ) {
                    foreach ( $news_events as $item ) {
                        $target = '';
                        if ( $item['news_event__new_tab'] ) {
                            $target = ' target="_blank" rel="noopener"';
                        }

                        // get image
                        $imageId = $item["news_event__image"][0];
                        $img_src = wp_get_attachment_image_src( $imageId, "full" )[0];

                        echo "<div class=\"news-event\">
                            <img class=\"news-event__image\" src=\"{$img_src}\" alt=\"{$item["news_event__image_alt"]}\" />
                            <div>
                                <h3 class=\"news-event__title\">{$item["news_event__title"]}</h3>
                                <p class=\"news-event__description\">{$item["news_event__description"]}</p>
                                <a class=\"button\" class=\"news-event__cta\"{$target} href=\"{$item["news_event__url"]}\">{$item["news_event__button_label"]}</a>
                            </div>
                        </div>";
                    }
                }
                ?>
            </div>
            <div class="flex__item flex__item--one-third">
                <?php
                $feature_box = rwmb_meta( 'feature_box', $homepage_meta );
                if ( $feature_box ) {
                    echo $feature_box['feature_box__html'];
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