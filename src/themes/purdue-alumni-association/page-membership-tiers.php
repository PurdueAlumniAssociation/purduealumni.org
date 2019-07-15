<?php
    /*
        Template Name: Membership Tiers
    */
?>
<?php get_header(); ?>
<main id="main" tabindex="-1">
    <section class="row">
        <h1 class="membership-plans__title text-center">Membership Plans</h1>
        <p class="membership-plans__subtitle text-center">Find out which plan is right for you</p>
    </section>
    <section class="row row--slim">
        <div class="pricing-table">
            <div class="pricing-table__plan plan plan--basic">
                <h2 class="plan__title">Basic</h2>
                <p class="plan__subtitle">&nbsp;</p>
                <div class="plan__details">
                    <p class="plan__cost">$25<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The no-frills gateway to Purdue Alumni. Discounted member pricing at events, Purdue gear discounts, online directory and more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/basic' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--blue button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=B1YR">Join Now or Renew</a>
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
                    <a class="plan__join button button--green button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=P1YR">Join Now or Renew</a>
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
                    <a class="plan__join button button--gold button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR">Join Now or Renew</a>
                </div>
            </div>
            <div class="pricing-table__plan plan plan--career-max">
                <h2 class="plan__title">Career Max</h2>
                <p class="plan__subtitle">Includes the benefits of PROFESSIONAL</p>
                <div class="plan__details">
                    <p class="plan__cost">$199<span class="plan__cost-year"> / year</span>
                    </p>
                    <p class="plan__description">The ultimate way to take your career to new heights. 1-1 career counseling, unlimited LinkedIn Learning on-demand courses, CliftonStrengths Leadership Assessment, and so much more.</p>
                    <a class="plan__learn-more" href="<?php echo esc_url( home_url( 'membership/membership-plans/career-max' ) ); ?>">Learn More</a>
                    <a class="plan__join button button--orange button--bold" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR">Join Now or Renew</a>
                </div>
            </div>
        </div>
        <p class="text-center">Multi-year discounts available for PLUS, PROFESSIONAL, and CAREER MAX memberships.
            <br />Discounts available for recent grads.
            <br />
            <a href="<?php echo esc_url( home_url( 'membership/membership-plans/detailed-plan-comparison' ) ); ?>">View the detailed comparison</a>
        </p>
    </section>
    <section class="row">
      <h2 class="text-left">Frequently Asked Questions</h2>
        <div class="container">
          <div class="bootstrap-row">
          <div class="col-xs-12 col-sm-4">
            <h3>Do I have to be an alumnus of Purdue University?</h3>
            <p>No! Our membership plans and benefits are geared towards Purdue grads, but membership is not only limited to graduates of the university.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>Which plan is right for me?</h3>
            <p>Check out our <a href="https://www/purduealumni.org/membership/membership-plans/detailed-plan-comparison">detailed plan comparison</a> to compare the benefits each plan.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>Is it possible to switch to another plan after signing up?</h3>
            <p>Yes! Our plans are designed to fit your needs and goals. If your situation changes, please call us at 800-414-1541 and ask to speak with our membership team.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>Which payment methods do you accept?</h3>
            <p>We accept all major credit cards.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>How can I redeem a coupon code?</h3>
            <p>You’ll be able to add your coupon code during the checkout process. The corresponding discount will be applied to your order.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>How do I access my benefits?</h3>
            <p>Log in to your account and click on the link to </p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>How can I cancel my membership?</h3>
            <p>If you ever want to cancel your membership for any reason, please call us at 800-414-1541 and ask to speak with our membership team. We promise not to pester you about why you’re leaving.</p>
          </div>
        </div>
      <p class= "text-center"><a href="https://www.purduealumni.org/membership/membership-plans/frequently-asked-questions/">View all FAQs</a></p>
    </section>
</main>
<?php get_footer(); ?>
