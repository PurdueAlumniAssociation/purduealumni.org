<?php
    /*
        Template Name: One Column
    */
?>
<?php get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( 'wp-content/themes/purdue-alumni-association/front-page.css' ) ); ?>" />
    <main class="front-page" id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <section class="row row--no-padding">
            <div class="homepage-hero">
                <img class="homepage-hero__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/five-new-members.jpg' ) ); ?>" />
                <div class="homepage-hero__dark-layer"></div>
                <div class="homepage-hero__content-container">
                    <div class="homepage-hero__primary">
                        <h1>Become a Member</h1>
                        <a class="button button--gold" href="#">Join today! &nbsp;<i class="fas fa-arrow-right" aria-hidden></i></a>
                        <p>You’re unique. But there's something you have in common with 600,000+ others. You're a Purdue graduate. The Purdue Alumni Association plugs you into the power of a global network and offers tools specific to your needs.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row row--no-padding" style="margin-top: 3px;">
            <div class="big-info-block">
                <div class="big-info-block__row">
                    <a class="big-info-block__third-box" href="#">
                        <div class="graphic-box graphic-box--green" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/tailgate.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--green">NEED HELP?</span>
                                <span class="graphic-box__title">Have questions about the new Alumni site? We Have Answers</span>
                            </div>
                        </div>
                    </a>
                    <a class="big-info-block__third-box" href="#">
                        <div class="graphic-box graphic-box--orange" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/tailgate.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--orange">HAPPY 150th!</span>
                                <span class="graphic-box__title">We make 150 years look AMAZING! Join The Party Of The Year</span>
                            </div>
                        </div>
                    </a>
                    <a class="big-info-block__third-box" href="#">
                        <div class="graphic-box graphic-box--dark-gray" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/tailgate.jpg' ) ) ?>')">
                            <div class="graphic-box__content">
                                <span class="graphic-box__category graphic-box__category--dark-gray">PURDUE WOMEN</span>
                                <span class="graphic-box__title">An alumnae sisterhood that motivates, uplifts, and connects. Be Part Of It</span>
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
                    <img class="news-event__image" src="http://via.placeholder.com/300x242" alt="students at career fair" />
                    <div>
                        <h3 class="news-event__title">Women's Conference 2018</h3>
                        <p class="news-event__description">Network with a dynamic, diverse group of women. Foster your personal, professional and intellectual well-being. Participate in focused learning and growth opportunities.</p>
                        <a class="button" class="news-event__cta" href="#">More Details Here</a>
                    </div>
                </div>
                <div class="news-event">
                    <img class="news-event__image" src="http://via.placeholder.com/300x242" alt="students at career fair" />
                    <div>
                        <h3 class="news-event__title">Online Career Networking</h3>
                        <p class="news-event__description">Looking to advance your career? Join us October 11 to share your experiences, exchange career tips, and build your professional network -- all online! Don't miss out on this chance to connect with people around the world who can help you in your career!</p>
                        <a class="button" class="news-event__cta" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex__item flex__item--one-third">
                <h2 class="front-page__section-title">Featured Alumni</h2>
                <a href="#">
                    <aside class="feature-box">
                        <img class="feature-box__image" src="https://purdue.imodules.com/s/1461/images/gid1001/editor/alumnus/2018_summer/keutzer.jpg" alt="Brian Chan" />
                        <div class="feature-box__content">
                            <p class="feature-box__text feature-box__text--quote">Never give up – regardless of the frustrations and difficulties, it will be work the effort!<span class="feature-box__source feature-box__source--black">- Becta Ketzer (HHS ’16)</span>
                            </p>
                        </div>
                    </aside>
                </a>
            </div>
        </section>
        <section class="row tint">
            <script async src="https://cdn.hypemarks.com/pages/a5b5e5.js"></script>
            <div class="tintup" data-id="alumni_web" data-columns="" data-expand="true" data-infinitescroll="true" data-personalization-id="877668" style="height:250px;width:100%;"></div>
            <p class="tint__sub-text">Follow us on social media to stay connected <span class="tint__social-media-handle">@purduealumni</span>
            </p>
        </section>
        <section class="row front-page__sponsors">
            <a class="front-page__sponsors-link" href="#"><img class="front-page__sponsors-image" src="<?php echo esc_url( home_url( 'wp-content/uploads/balfour-logo.jpg' ) ); ?>" alt="Balfour" /></a>
            <a class="front-page__sponsors-link" href="#"><img class="front-page__sponsors-image" src="<?php echo esc_url( home_url( 'wp-content/uploads/pefcu-card.jpg' ) ); ?>" alt="PEFCU" /></a>
            <a class="front-page__sponsors-link" href="#"><img class="front-page__sponsors-image" src="<?php echo esc_url( home_url( 'wp-content/uploads/libertymutual-logo.jpg' ) ); ?>" alt="Liberty Mutual Insurance" /></a>
        </section>
    </main>
<?php get_footer(); ?>