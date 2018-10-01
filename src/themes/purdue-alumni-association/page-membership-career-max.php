<?php
    /*
        Template Name: Career Max Membership Details
    */
?>
<?php get_header(); ?>
<main id="main" tabindex="-1">
    <section class="row row--slim flex flex--space-between">
        <p><a href="<?php echo esc_url( home_url( 'member' ) ); ?>" style="text-decoration: none;"><i class="fas fa-chevron-left" aria-hidden></i> Back to Plans</a>
        </p>
        <p>
            <a class="button button--light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions' ) ); ?>" >FAQ</a>
            <a class="button button--light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'membership/membership-plans/frequently-asked-questions' ) ); ?>" >Membership Options FAQ</a>
        </p>
    </section>
    <section class="row">
        <div class="plan-details">
            <div class="plan-details__summary plan-details__summary--career-max">
                <h1>Career Max</h1>
                <p style="font-size: 1.25em;">The ultimate way to take your career to the next level. 1-1 career counseling, unlimited LinkedIn Learning on-demand courses, CliftonStrengths Leadership Assessment, and so much more.</p>
            </div>
            <div class="plan-details__benefits plan-details__benefits--career-max">
                <h2 class="plan-details__button-row-title">Membership</h2>
                <div class="plan-details__button-row">
                    <div class="plan-details__button-row-container">
                        <p>1-Year</p>
                        <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR" >$199</a>
                    </div>
                    <div class="plan-details__button-row-container">
                        <p>3-Years</p>
                        <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C3YR" >$499</a>
                    </div>
                </div>
                <p class="text-center"><a href="#pricing">See all pricing options below</a></p>
            </div>
        </div>
    </section>
    <section class="row row--cards-3">
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/linkedin-learning' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small13.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">LinkedIn Learning</h2>
                        <p>Unlimited access to thousands of skill enhancement courses</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-global-discounts-for-career-max' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small16.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Purdue Global Discounts</h2>
                        <p>Online degrees and certificates discounted for members</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/online-education-discounts-for-career-max' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small21.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Six Sigma & Project Management Savings</h2>
                        <p>Save 50% on in-demand certificates to boost your skills</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/cliftonstrengths-34' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small14.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">CliftonStrengths 34</h2>
                        <p>Maximize your full potential by leveraging your natural talents</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/1-1-career-coaching' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small15.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">1:1 Career coaching</h2>
                        <p>Receive personalized advice, support, and guidance to take your career to the next level.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex-item-1-2-3">
            <a href="<?php echo esc_url( home_url( 'membership/benefits/resume-review' ) ); ?>" >
                <div class="card card--flex-item-3">
                    <img class="card__image" src="<?php echo esc_url( home_url( 'wp-content/uploads/300x200Small17.jpg' ) ); ?>" alt="">
                    <div class="card__content">
                        <h2 class="card__title">Resume review</h2>
                        <p>Optimize your resume with individualized feedback from career services specialists</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <h2>Other included benefits</h2>

        <h3>Career Development Webinars</h3>
        <p>Coming Soon! Insights from industry experts to help further your career. Participate live from anywhere around the world, or view past webinars from the on-demand archive.</p>

        <h3>Job Search Tools</h3>
        <p>Save time and money when looking for your next opportunity. CareerShift provides all the on-line tools and links to keep you organized for success. <a href="<?php echo esc_url( home_url( 'membership/benefits/job-search-tools' ) ); ?>" >Learn More</a>
        </p>

        <h3>ProQuest Research Database</h3>
        <p>Empower your research and learning with ProQuest. Enjoy access to the best journals, databases, and e-book resources from your favorite library's collection. <a href="<?php echo esc_url( home_url( 'membership/benefits/proquest-research-database' ) ); ?>">Learn More</a>
        </p>

        <h3>Online Career Resources & Tools </h3>
        <p>Leverage helpful resources on campus, online, and in your community to support your career goals. Access Purdue career resources, attend career development online events, work with individual colleges and schools, and connect with alumni clubs and networks around the country.</p>

        <h3>Purdue Alumnus Magazine</h3>
        <p>Enjoy the Award-winning quarterly publication (print and digital versions) featuring inspirational stories, compelling photography, and updates from Purdue. Access past issues digitally via the online archive. <a href="<?php echo esc_url( home_url( 'membership/benefits/purdue-alumnus-magazine' ) ); ?>">Learn More</a>
        </p>

        <h3>Clubs & Networks</h3>
        <p>Get involved with alumni clubs and networks in your area and around the world. With over 100 alumni clubs across the country and around the world, cultural networks such as Purdue Black Alumni Organization and Purdue Latino Alumni, and leadership networks such as the International Council of Purdue Women, the opportunities to make an impact are virtually endless. <a href="<?php echo esc_url( home_url( 'membership/benefits/communities' ) ); ?>" >Learn More</a>
        </p>

        <h3>Nationwide Discounts</h3>
        <p>Save up to 50% at thousands of retailers across the US. Enjoy member-exclusive discounts on food, shopping, and entertainment every day. <a href="<?php echo esc_url( home_url( 'membership/benefits/nationwide-discounts' ) ); ?>" >Learn More</a>
        </p>

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
        <p>Join fellow alumni to share your love for Purdue, get career advice, or just meet new people — all online! Speed chat sessions keep things fresh and interesting. <a href="<?php echo esc_url( home_url( 'membership/benefits/online-networking' ) ); ?>">Learn More</a>
        </p>

        <h3>Online Alumni Directory</h3>
        <p>Stay connected with friends, classmates, and other Purdue alumni. Search by name, year, college/school, company, or other filters.</p>

        <h3>Local Discounts (West Lafayette)</h3>
        <p>Enjoy member-exclusive savings on food, goods, and services at numerous businesses around Purdue’s West Lafayette campus. <a href="<?php echo esc_url( home_url( 'membership/benefits/west-lafayette-discounts' ) ); ?>" >Learn More</a>
        </p>

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
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR" >$199</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C3YR" >$499</a>
                </div>
            </div>
        </div>
        <div>
            <h2 class="plan-details__button-row-title">Recent Grad</h2>
            <p class="plan-details__description plan-details__description--slim">(5 years post-graduation)</p>
            <div class="plan-details__button-row">
                <div class="plan-details__button-row-container">
                    <p>1-Year</p>
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR" >$169</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C3YR" >$429</a>
                </div>
            </div>
        </div>
        <div>
            <h2 class="plan-details__button-row-title">Life Member Upgrade*</h2>
            <p class="plan-details__description plan-details__description--slim">&nbsp;</p>
            <div class="plan-details__button-row">
                <div class="plan-details__button-row-container">
                    <p>1-Year</p>
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C1YR" >$139</a>
                </div>
                <div class="plan-details__button-row-container">
                    <p>3-Years</p>
                    <a class="button button--invert-orange button--small plan-details__CTA" href="https://secure.ud.purdue.edu/s/1461/alumni/index.aspx?sid=1461&gid=1001&pgid=8945&cid=23100&pc=C3YR" >$359</a>
                </div>
            </div>
        </div>
    </section>
    <p style="text-align:center;font-weight: bold; margin-top: 2em; width: 100%;">* Life membership upgrades for existing life members only. Life memberships will no longer be offered beginning August 15, 2018.</p>
</main>
<?php get_footer(); ?>