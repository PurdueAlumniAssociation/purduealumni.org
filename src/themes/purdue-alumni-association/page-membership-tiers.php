<?php
    /*
        Template Name: Membership Tiers
    */
?>
<?php get_header(); ?>
<style>
.hero-container{background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(https://purduealumni.org/dev2/images/membership.jpg);background-position:50%;background-repeat:no-repeat;background-size:cover;position:relative;height:400px}.hero-text{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:#fff;margin:0;width:65%}.hero-text h1{margin:0;color:#fff;}.hero-text p{margin-top:2.5em}@media (min-width:768px){.hero-text p{font-size:1.2em}}
</style>
<main id="main" tabindex="-1">
    <div class="hero-container">
        <div class="hero-text">
            <h1 class="text-center">Membership Plans</h1>
            <p>Purdue graduates are a diverse group of individuals with different goals, interests, stages of career, and resources. That’s why we are saying “goodbye” to the current one-size-fits-all membership and “Boiler Up!” to a new four-tier offering
                that allows you to choose the membership that’s right for you.</p>
        </div>
    </div>
    <section class="row row--slim flex flex--space-between">
        <p>
            <a class="button button--light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions#section2' ) ); ?>">Current Members</a>
            <a class="button button--light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions#section2' ) ); ?>">Current Members - Click here for upgrade info</a>
        </p>
        <p>
            <a class="button button--light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions' ) ); ?>">FAQ</a>
            <a class="button button--light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions' ) ); ?>">Membership Options FAQ</a>
        </p>
    </section>
    <section class="row">
        <div class="pricing-table">
            <div class="pricing-table__plan plan plan--basic">
                <h2 class="plan__title">Basic</h2>
                <p class="plan__subtitle">&nbsp;</p>
                <div class="plan__details">
                    <p class="plan__cost">$25<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The no-frills gateway to Purdue Alumni. Discounted member pricing at events, Purdue gear discounts, online directory and more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/basic' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--blue button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=B1YR">Join Now</a>
                </div>
            </div>
            <div class="pricing-table__plan plan plan--plus plan--highlight">
                <h2 class="plan__title">Plus</h2>
                <p class="plan__subtitle">Includes the benefits of BASIC
                    <br />No charge for existing life members</p>
                <div class="plan__details">
                    <p class="plan__cost">$59<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The ‘traditional’ membership &mdash; the perfect way to stay connected and save. Nationwide savings program, clubs and alumni networks, magazine, newsletters, and more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/plus' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--green button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR">Join Now</a>
                </div>
            </div>
            <div class="pricing-table__plan plan plan--professional">
                <h2 class="plan__title">Professional</h2>
                <p class="plan__subtitle">Includes the benefits of PLUS</p>
                <div class="plan__details">
                    <p class="plan__cost">$99<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The membership to jump-start your career. Purdue online course discounts, job search tools, research database, career development webinars, and more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/professional' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--gold button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR">Join Now</a>
                </div>
            </div>
            <div class="pricing-table__plan plan plan--career-max">
                <h2 class="plan__title">Career Max</h2>
                <p class="plan__subtitle">Includes the benefits of PROFESSIONAL</p>
                <div class="plan__details">
                    <p class="plan__cost">$199<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The ultimate way to take your career to the next level. 1-1 career counseling, unlimited LinkedIn Learning on-demand courses, CliftonStrengths Leadership Assessment, and so much more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/career-max' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--orange button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR">Join Now</a>
                </div>
            </div>
        </div>
        <p class="text-center">Multi-year discounts available for PLUS, PROFESSIONAL, and CAREER MAX memberships.
            <br />Discounts available for recent grads.
            <br />
            <a href="<?php echo esc_url( home_url( 'membership/membership-plans/detailed-plan-comparison' ) ); ?>">View the detailed comparison</a>
        </p>
    </section>
</main>
<?php get_footer(); ?>