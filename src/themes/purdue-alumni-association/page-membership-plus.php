<?php
    /*
        Template Name: Plus Membership Details
    */
?>
<?php get_header(); ?>
<style>
.card{margin-bottom:2.5em}@media (min-width:62em){.card{margin-bottom:0}}
</style>
<main id="main" tabindex="-1">
    <section class="row row--slim flex flex--space-between">
        <p><a href="<?php echo esc_url( home_url( 'member' ) ); ?>"  style="text-decoration: none;"><i class="fas fa-chevron-left" aria-hidden></i> Back to Plans</a>
        </p>
        <p>
            <a class="button button--light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'member/frequently-asked-questions' ) ); ?>" >FAQ</a>
            <a class="button button--light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'member/frequently-asked-questions' ) ); ?>" >Membership Options FAQ</a>
        </p>
    </section>
    <section class="row">
        <div class="plan-details">
            <div class="plan-details__summary plan-details__summary--plus">
                <h1>Plus</h1>
                <p style="font-size: 1.25em;">The ‘traditional’ membership — the perfect way to stay connected and save. Nationwide savings program, clubs and alumni networks, magazine, newsletters, and more.</p>
            </div>
            <div class="plan-details__benefits plan-details__benefits--plus">
                <h2 class="plan-details__button-row-title">Membership</h2>
                <div class="plan-details__button-row">
                    <div class="plan-details__button-row-container">
                        <p>1-Year</p>
                        <a class="button button--invert-green button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR" >$59</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>3-Years</p>
                        <a class="button button--invert-green button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P3YR" >$149</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>10-Years</p>
                        <a class="button button--invert-green button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P10YR" >$469</a>
                    </div>
                </div>
                <p class="text-center"><a href="#pricing">See all pricing options below</a></p>
            </div>
        </div>
    </section>
    <section class="row row--cards-3">
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-alumnus-magazine' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small20.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title"><em>Purdue Alumnus</em> Magazine</h2>
                        <p>Award-winning quarterly publication featuring captivating stories and compelling photography</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/communities' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small5.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Clubs and Networks</h2>
                        <p>Get involved with alumni clubs and networks in your area and around the world</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/nationwide-discounts' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small6.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Nationwide Discounts</h2>
                        <p>Member-exclusive savings up to 50% at thousands of retailers across the US</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <h2>Other included benefits</h2>

        <h3>Customized BOILER UPdate E-Newsletter</h3>
        <p>Stay informed with news and updates from Purdue. You select topics you want to read about and when you want to receive it — then it shows up in your inbox as scheduled.</p>

        <h3>John Purdue Club Priority Points</h3>
        <p>Earn points toward your John Purdue Club membership. Points are used to determine priority seating and access to high-demand tickets and benefits for Purdue athletic events.</p>

        <h3>Member Discounts at Events</h3>
        <p>Members receive discounted admission to Purdue Alumni events across the country and around the world. <a href="<?php echo esc_url( home_url( 'membership/benefits/alumni-event-discounts' ) ); ?>" >Learn More</a></p>

        <h3>Purdue Merchandise</h3>
        <p>Showing your pride and passion for Purdue just got easier! Save 10-15% on Purdue gear and gifts online or in-store (West Lafayette). <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-gear' ) ); ?>" >Learn More</a></p>

        <h3>Purdue Alumni Travel</h3>
        <p>See the world with fellow Purdue alumni, including trips hosted by faculty guides and experts. <a href="<?php echo esc_url( home_url( 'membership/benefits/travel-program' ) ); ?>" >Learn More</a></p>

        <h3>Online Networking</h3>
        <p>Join fellow alumni to share your love for Purdue, get career advice, or just meet new people — all online! Speed chat sessions keep things fresh and interesting. <a href="<?php echo esc_url( home_url( 'membership/benefits/online-networking' ) ); ?>">Learn More</a></p>

        <h3>Online Alumni Directory</h3>
        <p>Stay connected with friends, classmates, and other Purdue alumni. Search by name, year, college/school, company, or other filters.</p>

        <h3>Local Discounts (West Lafayette)</h3>
        <p>Enjoy member-exclusive savings on food, goods, and services at numerous businesses around Purdue’s West Lafayette campus. <a href="<?php echo esc_url( home_url( 'membership/benefits/west-lafayette-discounts' ) ); ?>" >Learn More</a></p>

        <h3>Free Printables and Downloads</h3>
        <p>Enjoy downloadable Purdue-themed printables and desktop calendars.</p>
    </section>
    <section class="row clearfix" id="pricing">
        <h2>Pricing Options</h2>
        <style>
            .special-bg {
                background-color: #eee;
            }
        </style>
        <table class="table table--roomy table--text-center table--font-big left" style="margin-bottom:1em;">
            <caption class="sr-only">Plus Membership Pricing</caption>
            <thead>
                <tr>
                    <th></th>
                    <th class="special-bg" colspan="3">Membership
                        <br />&nbsp;</th>
                </tr>
                <tr>
                    <th scope="col" class="sr-only">Type</th>
                    <th class="special-bg" scope="col">1-Year</th>
                    <th class="special-bg" scope="col">3-Year</th>
                    <th class="special-bg" scope="col">10-Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Individual</th>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR" >$59</a>
                    </td>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P3YR" >$149</a>
                    </td>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P10YR" >$469</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Joint</th>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR" >$79</a>
                    </td>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P3YR" >$199</a>
                    </td>
                    <td class="special-bg"><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P10YR" >$599</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table--roomy table--text-center table--font-big left" style="margin-left: 2em;">
            <caption class="sr-only">Special PLUS membership pricing for recent grads.</caption>
            <thead>
                <tr>
                    <th></th>
                    <th colspan="2">Recent Grad
                        <br /><span style="font-size:.8em;font-weight:400;">5 years post-graduation</span>
                    </th>
                </tr>
                <tr>
                    <th scope="col" class="sr-only">Type</th>
                    <th scope="col">1-Year</th>
                    <th scope="col">3-Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Individual</th>
                    <td><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR" >$35</td>
                    <td><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P3YR" >$75</td>
                </tr>
                <tr>
                    <th scope="row">Joint</th>
                    <td><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR" >$55</td>
                    <td><a class="button button--small button--invert-green" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P3YR" >$129</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
<?php get_template_part( 'template-parts/sponsors' ); ?>
<?php get_footer(); ?>