<?php
    /*
        Template Name: One Column
    */
?>
<?php get_header(); ?>
    <main id="main" tabindex="-1">
        <h1 class="sr-only">Purdue Alumni Association</h1>
        <section class="row big-info-block">
            <div class="big-info-block__row">
                <div class="big-info-block__primary-box">
                    <h2 class="big-info-block__primary-title">Featured Member Idea</h2>
                    <p class="big-info-block__primary-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae harum asperiores nesciunt et maiores facere iste atque nobis pariatur deleniti provident assumenda expedita, sed autem sunt, nam, ullam illo omnis. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Officiis culpa odio recusandae voluptatibus odit commodi dolore laudantium voluptatum. Debitis quasi quas eligendi magni, vero eveniet ad quis, at. Delectus, nemo!</p>
                    <a class="button button--gold big-info-block__primary-cta" href="#">CTA Link &nbsp;<i class="fas fa-arrow-right" aria-hidden></i></a>
                </div>
                <div class="big-info-block__secondary-box">
                    <h2 class="big-info-block__secondary-title">Featured Member Idea</h2>
                    <p class="big-info-block__secondary-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae harum asperiores nesciunt et maiores facere iste atque nobis pariatur deleniti provident assumenda expedita, sed autem sunt, nam, ullam illo omnis.</p>
                    <a class="button button--invert-white big-info-block__secondary-cta" href="#">CTA Link</a>
                </div>
            </div>
            <div class="big-info-block__row">
                <a class="big-info-block__third-box" href="#">
                    <div class="graphic-box graphic-box--green" style="background-image: url('../../images/dev/tailgate.jpg')">
                        <div class="graphic-box__content">
                            <span class="graphic-box__category graphic-box__category--green">Events</span>
                            <span class="graphic-box__title">Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here</span>
                        </div>
                    </div>
                </a>
                <a class="big-info-block__third-box" href="#">
                    <div class="graphic-box graphic-box--orange" style="background-image: url('../../images/dev/tailgate.jpg')">
                        <div class="graphic-box__content">
                            <span class="graphic-box__category graphic-box__category--orange">Events</span>
                            <span class="graphic-box__title">Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here</span>
                        </div>
                    </div>
                </a>
                <a class="big-info-block__third-box" href="#">
                    <div class="graphic-box graphic-box--dark-gray" style="background-image: url('../../images/dev/tailgate.jpg')">
                        <div class="graphic-box__content">
                            <span class="graphic-box__category graphic-box__category--dark-gray">Events</span>
                            <span class="graphic-box__title">Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here Headline for a Club Event or Story Can Go Here</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="row flex">
            <div class="flex__item flex__item--two-thirds">
                <h2 class="no-top-margin">News & Events</h2>
                <div class="news-event">
                    <img class="news-event__image" src="http://via.placeholder.com/300x242" alt="students at career fair" />
                    <div>
                        <h3 class="news-event__title">Mock Career Fair</h3>
                        <p class="news-event__description">Practice networking with real employers. Get guidance on your resume. Shop the Macy's Pop-Up Store. Wednesday September 5 at PMU.</p>
                        <a class="button" class="news-event__cta" href="#">Read More</a>
                    </div>
                </div>
                <div class="news-event">
                    <img class="news-event__image" src="http://via.placeholder.com/300x242" alt="students at career fair" />
                    <div>
                        <h3 class="news-event__title">Mock Career Fair</h3>
                        <p class="news-event__description">Practice networking with real employers. Get guidance on your resume. Shop the Macy's Pop-Up Store. Wednesday September 5 at PMU.</p>
                        <a class="button" class="news-event__cta" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="flex__item flex__item--one-third">
                <h2 class="no-top-margin">Featured Alumnus</h2>
                <a href="#">
                    <aside class="feature-box">
                        <img class="feature-box__image" src="https://purdue.imodules.com/s/1461/images/gid1001/editor/alumnus/2018_summer/brian-chan_p.jpg" alt="Brian Chan" />
                        <div class="feature-box__content">
                            <p class="feature-box__text feature-box__text--quote">We are repurposing waste to generate electricity in an otherwise power-deficit country.<span class="feature-box__source feature-box__source--black">- Brian Chan (LA'11)</span>
                            </p>
                        </div>
                    </aside>
                </a>
            </div>
        </section>
        <section class="row tint">
            <script async src="https://cdn.hypemarks.com/pages/a5b5e5.js"></script>
            <div class="tintup" data-id="alumni_web" data-columns="" data-expand="true" data-infinitescroll="true" data-personalization-id="877668" style="height:500px;width:100%;"></div>
            <p class="tint__sub-text">Follow us on social media to stay connected <span class="tint__social-media-handle">@purduealumni</span>
            </p>
        </section>
    </main>
<?php get_footer(); ?>