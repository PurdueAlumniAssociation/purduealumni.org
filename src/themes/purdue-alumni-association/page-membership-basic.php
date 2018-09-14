<?php
    /*
        Template Name: Basic Membership Details
    */
?>
<?php get_header(); ?>
<style>
.card{margin-bottom:2.5em}@media (min-width:62em){.card{margin-bottom:0}}
</style>
<main id="main" tabindex="-1">
    <section class="row row--slim row--flex row--space-between">
        <p><a href="<?php echo esc_url( home_url( 'member' ) ); ?>"  style="text-decoration: none;"><i class="fas fa-chevron-left" aria-hidden></i> Back to Plans</a>
        </p>
        <p>
            <a class="button button--invert-light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'member/frequently-asked-questions' ) ); ?>" >FAQ</a>
            <a class="button button--invert-light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'member/frequently-asked-questions' ) ); ?>" >Membership Options FAQ</a>
        </p>
    </section>
    <section class="row">
        <div class="plan-details">
            <div class="plan-details__summary plan-details__summary--basic">
                <h1>Basic</h1>
                <p style="font-size: 1.25em;">The no-frills gateway to Purdue Alumni. Discounted member pricing at events, Purdue gear discounts, online directory, and more.</p>
            </div>
            <div class="plan-details__benefits plan-details__benefits--basic">
                <h2 class="plan-details__button-row-title">Membership</h2>
                <div class="plan-details__button-row">
                    <div class="plan-details__button-row-container">
                        <p>1-Year</p>
                        <a class="button button--invert-blue button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=B1YR" >$25</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>1-Year Joint</p>
                        <a class="button button--invert-blue button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=B1YR" >$50</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row row--cards-3">
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/alumni-event-discounts' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small19.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Member Discounts at Events </h2>
                        <p>Receive discounted admission at alumni events</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-gear' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Purdue Merchandise</h2>
                        <p>Save on Purdue gear and gifts in-store and online</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/travel-program' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small3.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Purdue Alumni Travel</h2>
                        <p>See the world with fellow alumni and Purdue hosts</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <h2>Other included benefits</h2>

        <h3>Online Networking</h3>
        <p>Join fellow alumni to share your love for Purdue, get career advice, or just meet new people — all online! Speed chat sessions keep things fresh and interesting. <a href="<?php echo esc_url( home_url( 'membership/benefits/online-networking' ) ); ?>">Learn More</a>
        </p>

        <h3>Online Alumni Directory</h3>
        <p>Stay connected with friends, classmates, and other Purdue alumni. Search by name, year, college/school, company, or other filters.</p>

        <h3>Local Discounts (West Lafayette)</h3>
        <p>Enjoy member-exclusive savings on food, goods, and services at numerous businesses around Purdue’s West Lafayette campus. <a href="<?php echo esc_url( home_url( 'membership/benefits/west-lafayette-discounts' ) ); ?>" >Learn More</a></p>

        <h3>Free Printables and Downloads</h3>
        <p>Enjoy downloadable Purdue-themed printables and desktop calendars.</p>
    </section>
</main>
<?php get_footer(); ?>