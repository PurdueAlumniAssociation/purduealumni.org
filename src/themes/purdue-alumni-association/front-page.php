<?php get_header(); ?>
    <main class="front-page" id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <section class="row row--no-padding">
            <div class="homepage-hero">
                <img class="homepage-hero__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/tyler-trent.jpg' ) ); ?>" />
                <!-- <div class="homepage-hero__dark-layer"></div> -->
                <div class="homepage-hero__content-container">
                    <div class="homepage-hero__primary">
                        <h1>Purdue Alumni Impact Award</h1>
                        <a class="button button--gold" href="<?php echo esc_url( home_url( 'tyler-wins-giant-impact-award' ) ); ?>"><em>Alumnus</em> article on Tyler</a>
                        <p>Tyler Trent awarded for his positive spirit, perseverance, and uplifting attitude.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row row--no-padding front-page__graphic-boxes">
            <div class="big-info-block">
                <div class="big-info-block__row">
                    <a class="big-info-block__third-box" target="_blank" rel="noopener" href="https://krannert.purdue.edu/events/boilers-by-the-bay/">
                        <div class="graphic-box graphic-box--green" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/graphic-box_help.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--green">Boilers by the Bay</span>
                                <span class="graphic-box__title">Join us for a convergence of ingenuity in Silicon Valley</span>
                            </div>
                        </div>
                    </a>
                    <a class="big-info-block__third-box" href="<?php echo esc_url( home_url( 'membership/membership-plans' ) ) ?>">
                        <div class="graphic-box graphic-box--orange" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/graphic-box_membership.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--orange">Become a Member</span>
                                <span class="graphic-box__title">A global network and tools to help you grow</span>
                            </div>
                        </div>
                    </a>
                    <a class="big-info-block__third-box" href="<?php echo esc_url( home_url( 'communities/networks/international-council-of-purdue-women' ) ) ?>">
                        <div class="graphic-box graphic-box--dark-gray" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/graphic-box_icpw.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--dark-gray">Purdue Women</span>
                                <span class="graphic-box__title">A sisterhood that motivates, uplifts and connects</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="row flex">
            <div class="flex__item flex__item--two-thirds">
                <h2 class="front-page__section-title">News & Events</h2>
                <div class="news-event">
                    <img class="news-event__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/news-event_icpw-conference.jpg' ) ) ?>')" alt="Womens Conference, November 1-2, 2018 in Chicago" />
                    <div>
                        <h3 class="news-event__title">Women's Conference 2018</h3>
                        <p class="news-event__description">Network with a dynamic, diverse group of women. Foster your personal, professional and intellectual well-being. Participate in focused learning and growth opportunities.</p>
                        <a class="button" class="news-event__cta" href="https://purdue.imodules.com/s/1461/alumni/feature.aspx?sid=1461&gid=1001&pgid=9003">More Details Here<i class="fas fa-external-link-alt" style="margin-left: 5px;" title="External Link" aria-hidden=""></i><span class="sr-only">external link</span></a>
                    </div>
                </div>
                <div class="news-event">
                    <img class="news-event__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/news-event_online-networking.jpg' ) ) ?>" alt="man outside using his tablet" />
                    <div>
                        <h3 class="news-event__title">Online Career Networking</h3>
                        <p class="news-event__description">Looking to advance your career? Join us October 11 to share your experiences, exchange career tips, and build your professional network -- all online! Don't miss out on this chance to connect with people around the world who can help you in your career!</p>
                        <a class="button" class="news-event__cta" href="https://app.brazenconnect.com/a/purdue/e/nRp6Sy">Read More<i class="fas fa-external-link-alt" style="margin-left: 5px;" title="External Link" aria-hidden=""></i><span class="sr-only">external link</span></a>
                    </div>
                </div>
            </div>
            <div class="flex__item flex__item--one-third">
                <h2 class="front-page__section-title front-page__section-title--mo-top-margin">Small Steps, Giant Impact</h2>
                <aside class="feature-box">
                    <img class="feature-box__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/feature-box_giant-impact.jpg' ) ) ?>" alt="bootprint in moondust" />
                    <div class="feature-box__content">
                        <p class="feature-box__text">We want to hear stories of how a Purdue alumnus you know made a giant impact. It could be in one person's life or the life of an entire community.</p>
                        <p style="margin-bottom: 0;"><a class="button button--almost-black" href="<?php echo esc_url( home_url( 'giant-impact' ) ) ?>">Tell Their Story</a></p>
                    </div>
                </aside>
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