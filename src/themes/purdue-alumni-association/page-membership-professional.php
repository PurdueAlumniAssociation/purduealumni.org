<?php
    /*
        Template Name: Professional Membership Details
    */
?>
<?php get_header(); ?>
<style>
.card{margin-bottom:2.5em}
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
            <div class="plan-details__summary plan-details__summary--professional">
                <h1>Professional</h1>
                <p style="font-size: 1.25em;">The membership to jump-start your career. Purdue online course discounts, job search tools, research database, career development webinars, and more.</p>
            </div>
            <div class="plan-details__benefits plan-details__benefits--professional">
                <h2 class="plan-details__button-row-title">Membership</h2>
                <div class="plan-details__button-row">
                    <div class="plan-details__button-row-container">
                        <p>1-Year</p>
                        <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR" >$99</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>3-Years</p>
                        <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR3YR" >$249</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>10-Years</p>
                        <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR10YR" >$769</a>
                    </div>
                </div>
                <p class="text-center"><a href="#pricing">See all pricing options below</a></p>
            </div>
        </div>
    </section>
    <section class="row row--cards-3">
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-global-discounts-for-professional' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small7.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Purdue Global Discounts</h2>
                        <p>Online degrees and certificates discounted for members</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/online-education-discounts' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small9.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Six Sigma & Project Management Savings</h2>
                        <p>Save 25% on in-demand certificates to boost your skills</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/cliftonstrengths-top-5' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small8.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">CliftonStrengths Top 5</h2>
                        <p>Discover your strengths, expand your career potential</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/job-search-tools' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small10.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Job Search Tools</h2>
                        <p>Save time and money when looking for your next opportunity</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <div class="flex-item-1-2-3">
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small11.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Career Development Webinars</h2>
                        <p>Coming Soon! Insights from industry experts to help further your career</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/proquest-research-database' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small12.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">ProQuest Research Database</h2>
                        <p>Thousands of periodicals at your fingertips</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <h2>Other included benefits</h2>

        <h3>Online Career Resources & Tools </h3>
        <p>Leverage helpful resources on campus, online, and in your community to support your career goals. Access Purdue career resources, attend career development online events, work with individual colleges and schools, and connect with alumni clubs and networks around the country.</p>

        <h3>Purdue Alumnus Magazine</h3>
        <p>Enjoy the Award-winning quarterly publication (print and digital versions) featuring inspirational stories, compelling photography, and updates from Purdue. Access past issues digitally via the online archive. <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-alumnus-magazine' ) ); ?>">Learn More</a></p>

        <h3>Clubs & Networks</h3>
        <p>Get involved with alumni clubs and networks in your area and around the world. With over 100 alumni clubs across the country and around the world, cultural networks such as Purdue Black Alumni Organization and Purdue Latino Alumni, and leadership networks such as the International Council of Purdue Women, the opportunities to make an impact are virtually endless. <a href="<?php echo esc_url( home_url( 'membership/benefits/communities' ) ); ?>" >Learn More</a></p>

        <h3>Nationwide Discounts</h3>
        <p>Save up to 50% at thousands of retailers across the US. Enjoy member-exclusive discounts on food, shopping, and entertainment every day. <a href="<?php echo esc_url( home_url( 'membership/benefits/nationwide-discounts' ) ); ?>" >Learn More</a></p>

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
    <section class="row row--cards-3" id="pricing">
        <div>
            <h2 class="plan-details__button-row-title">Membership</h2>
            <p class="plan-details__description plan-details__description--slim">&nbsp;</p>
            <div class="plan-details__button-row">
                <div class="plan-details__button-row-container">
                    <p>1-Year</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR" >$99</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR3YR" >$249</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>10-Years</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR10YR" >$769</a>
                </div>
            </div>
        </div>
        <div>
            <h2 class="plan-details__button-row-title">Recent Grad</h2>
            <p class="plan-details__description plan-details__description--slim">(5 years post-graduation)</p>
            <div class="plan-details__button-row">
                <div class="plan-details__button-row-container">
                    <p>1-Year</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR" >$79</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR3YR" >$199</a>
                </div>
            </div>
        </div>
        <div>
            <h2 class="plan-details__button-row-title">Life Member Upgrade*</h2>
            <p class="plan-details__description plan-details__description--slim">&nbsp;</p>
            <div class="plan-details__button-row">
                <div class="plan-details__button-row-container">
                    <p>1-Year</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR1YR" >$39</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--gold button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=PR3YR" >$99</a>
                </div>
            </div>
        </div>
        <p style="text-align:center;font-weight: bold; margin-top: 2em; width: 100%;">* Life membership upgrades for existing life members only. Life memberships will no longer be offered beginning August 15, 2018.</p>
    </section>
</main>
<?php get_footer(); ?>