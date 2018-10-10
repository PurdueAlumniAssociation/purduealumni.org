<?php get_header(); ?>
    <main class="front-page" id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <?php
        //$homepage_meta = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_homepage' );
        // $hero = rwmb_meta( 'hero', $homepage_meta );
        // if ( $hero ) {
        //     echo $hero['hero__html'];
        // }
        $homepage_hero_id = rwmb_meta( 'homepage__hero_banner' );
        if ( $homepage_hero_id ) {
            $hero_heading = rwmb_meta( 'hero_banner__heading', '', $homepage_hero_id );
            $hero_content = rwmb_meta( 'hero_banner__content', '', $homepage_hero_id );
            $hero_url = rwmb_meta( 'hero_banner__url', '', $homepage_hero_id );
            $hero_button_label = rwmb_meta( 'hero_banner__button_label', '', $homepage_hero_id );
            $hero_new_tab = rwmb_meta( 'hero_banner__new_tab', '', $homepage_hero_id );
            $hero_background_image = rwmb_meta( 'hero_banner__background_image', array( 'limit' => 1 ), $homepage_hero_id );
            $hero_dark_overlay = rwmb_meta( 'hero_banner__dark_overlay', '', $homepage_hero_id );

            $dark_overlay = '';
            if ( $hero_dark_overlay ) {
                $dark_overlay = "<div class=\"homepage-hero__dark-layer\"></div>\n";
            }

            $target = '';
            if ( $hero_new_tab ) {
                $target = ' target="_blank" rel="noopener"';
            }

            // get image
            $image = $hero_background_image[0];
            $img_src = $image['full_url'];

            echo "<section class=\"row row--no-padding\">
                    <div class=\"homepage-hero\">
                        <img class=\"homepage-hero__image\"{$target} src=\"{$img_src}\" />
                        {$dark_overlay}
                        <div class=\"homepage-hero__content-container\">
                            <div class=\"homepage-hero__primary\">
                                <h1>{$hero_heading}</h1>
                                <a class=\"button button--gold\" href=\"{$hero_url}\">{$hero_button_label}</a>
                                <p>{$hero_content}</p>
                            </div>
                        </div>
                    </div>
                </section>";
        }
        $graphic_box_ids = rwmb_meta( 'homepage__graphic_boxes' );
        if ( $graphic_box_ids ) {
            $graphic_box_colors = array( "green", "orange", "dark-gray" );
            $color_index = 0;
            echo "<section class=\"row row--no-padding front-page__graphic-boxes\">\n
                    <div class=\"big-info-block\">\n
                        <div class=\"big-info-block__row\">\n";
            foreach( $graphic_box_ids as $box_id ) {
                $box_title = rwmb_meta( 'graphic_box__title', '', $box_id );
                $box_cut_line = rwmb_meta( 'graphic_box__cut_line', '', $box_id );
                $box_url = rwmb_meta( 'graphic_box__url', '', $box_id );
                $box_new_tab = rwmb_meta( 'graphic_box__new_tab', '', $box_id );
                $box_background_image = rwmb_meta( 'graphic_box__background_image', array( 'limit' => 1 ), $box_id );
                $color = $graphic_box_colors[$color_index];

                $target = '';
                if ( $hero_new_tab ) {
                    $target = ' target="_blank" rel="noopener"';
                }

                // get image
                $image = $box_background_image[0];
                $img_src = $image['full_url'];

                echo "<a class=\"big-info-block__third-box\"{$target} href=\"{$box_url}\">
                    <div class=\"graphic-box graphic-box--{$color}\" style=\"background-image: url('{$img_src}')\">
                        <div class=\"graphic-box__content\">
                            <span class=\"graphic-box__category graphic-box__category--{$color}\">{$box_title}</span>
                            <span class=\"graphic-box__title\">{$box_cut_line}</span>
                        </div>
                    </div>
                </a>";
                $color_index++;
            }
            echo "</div>\n
                </div>\n
            </section>\n";
        }
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
<?php get_footer(); ?>