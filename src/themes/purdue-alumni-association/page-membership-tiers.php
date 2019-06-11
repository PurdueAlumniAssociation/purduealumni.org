<?php
    /*
        Template Name: Membership Tiers
    */
?>
<?php get_header(); ?>
<main id="main" tabindex="-1">
    <div class="hero-container">
        <div class="hero-text">
            <h1 class="text-center">Membership Plans</h1>
            <?php //<p>Purdue graduates are a diverse group of individuals with different goals, interests, stages of career, and resources. That’s why we are saying “goodbye” to the current one-size-fits-all membership and “Boiler Up!” to a new four-tier offering that allows you to choose the membership that’s right for you.</p>?>
            <p>Purdue obviously means a lot to you &mdash; it’s the place you grew up, fell in love, or learned your craft. Your roots are here. We want to help you maintain those traditions and memories. We want to help you along life's journey.</p>
<p>So whether it's discounts on Purdue gear and online courses or whether it's exclusive events and skills training, you belong here. Just like always.</p>
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
      <h1 class="text-center">Frequently Asked Questions</h2>
        <div class="container">
          <div class="bootstrap-row">
          <div class="col-xs-12 col-sm-4">
            <h3>Why are you offering four different types of memberships?</h3>
            <p>We recognize that our alumni are a diverse group of individuals with different needs in different times of life with different goals, interests, affinities, geographies, stages of career development, and resources.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>What is the difference between the various membership options?</h3>
            <p>All of the options are great, but the tiers allow you to choose a membership that is right for you, giving you control over the cost, the benefits, and the level of engagement.
              <ul>
                <li>BASIC: The no-frills gateway to Purdue Alumni</li>
                <li>PLUS: The “traditional” membership, perfect for staying connected … and saving!</li>
                <li>PROFESSIONAL: The membership to jump-start your career!</li>
                <li>CAREER MAX: The ultimate way to take your career to new heights!</li></p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>Why are you discontinuing life membership?</h3>
            <p>With the need to deliver relevant membership offerings at different stages of life, combined with the need to maintain flexibility in programs and services offered, the life membership business model is simply no longer feasible. However, for those looking for longer-term membership, we now offer 3- and 10-year memberships at discounted rates.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>What if I realize that I purchased the wrong membership — can I change to a different option?</h3>
            <p>Of course you can! We want you to find the membership package that fits your needs! If you want to change your selection, please contact our Purdue Alumni membership team and we will be happy to work with you to make sure we find the perfect fit. Please email alumnimembership@purdue.edu or call 800-414-1541 to change your membership selection.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>I was planning to purchase a life membership — is there still time to purchase it before it is no longer offered?</h3>
            <p>Life membership is no longer offered as of August 15, 2018. However, multi-year memberships are available at discounted rates. For example, you can save over 20% with a 10-year membership (compared to the single-year price). This added flexibility lets you move between membership offerings based on what is most valuable to you as your needs change.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h3>How do I know which membership option is the right one for me?</h3>
            <p>We encourage you to review the membership benefits in each tier to determine the best fit for your individual needs.
              If you only want to attend Purdue Alumni events, show your Purdue pride, and support Purdue Alumni in the most economical way, then BASIC membership may be for you.
              Looking for all those things in the BASIC membership but also want to stay connected through alumni networks, receive the award-winning Purdue Alumnus magazine, keep up to date on what’s happening across the University, and save up to 50% at thousands of retailers nationwide? Then PLUS membership may be your match.
              The PROFESSIONAL membership offers all the benefits above plus additional benefits to help jump-start your career, such as online course discounts, career resources and tools, career development webinars, CliftonStrengths leadership assessment tool, and access to research databases.
              CAREER MAX membership is perfect for those looking to take their career to new heights. In addition to all the benefits included in the other memberships, CAREER MAX provides unlimited access to LinkedIn Learning on-demand courses, higher discounts on online courses, resume review, one-on-one career counseling, and more!</p>
          </div>
        </div>
      <p class= "text-center"><a href="https://www.purduealumni.org/membership/membership-plans/frequently-asked-questions/">View all FAQs</a></p>
    </section>
</main>
<?php get_footer(); ?>
