<?php
    /*
        Template Name: Detailed Membership Comparison
    */
    $basic_price = '25';
    $plus_price = '59';
    $professional_price = '99';
    $career_max_price = '199';
    $back_link = 'membership';

    if ( isset( $_GET['recent-grad'] ) ) {
        $plus_price = '35';
        $professional_price = '79';
        $career_max_price = '169';
        $back_link = 'membership/recent-grads';
    }
?>
<?php get_header(); ?>
<main id="main" tabindex="-1">
    <section class="row row--slim flex flex--space-between">
        <p><a href="<?php echo esc_url( home_url( $back_link ) ); ?>" style="text-decoration: none;"><i class="fas fa-chevron-left" aria-hidden></i> Back to Plans</a>
        </p>
        <p>
            <a class="button button--light-gray button--dark-text button--bold mobile-only" href="<?php echo esc_url( home_url( 'membership/frequently-asked-questions' ) ); ?>">FAQ</a>
            <a class="button button--light-gray button--dark-text button--bold not-mobile" href="<?php echo esc_url( home_url( 'membership/frequently-asked-questions' ) ); ?>">Membership Options FAQ</a>
        </p>
    </section>
    <section class="row">
        <h1 style="text-align: center; margin-bottom: 1em;">Detailed Membership Plan Comparison</h1>
        <table class="detailed-comparison-table">
            <caption class="detailed-comparison-table__caption">A detailed comparison between membership tiers.</caption>
            <colgroup>
                <col class="detailed-comparison-table__column detailed-comparison-table__column--benefits"></col>
                <col class="detailed-comparison-table__column detailed-comparison-table__column--basic"></col>
                <col class="detailed-comparison-table__column detailed-comparison-table__column--plus"></col>
                <col class="detailed-comparison-table__column detailed-comparison-table__column--professional"></col>
                <col class="detailed-comparison-table__column detailed-comparison-table__column--career-max"></col>
            </colgroup>
            <thead>
                <tr>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--benefit sr-only" scope="col">Benefit</th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--basic rotate" scope="col">
                        <div><span>Basic</span>
                        </div>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--plus rotate" scope="col">
                        <div><span>Plus</span>
                        </div>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--professional rotate" scope="col">
                        <div><span>Professional</span>
                        </div>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--career-max rotate" scope="col">
                        <div><span>Career Max</span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--benefit detailed-comparison-table__heading--tfoot sr-only" scope="row">Pricing</th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--basic detailed-comparison-table__heading--tfoot" scope="col"><span class="detailed-comparison-table__cost">$<?= $basic_price ?></span><span class="detailed-comparison-table__cost-year">/year</span>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--plus detailed-comparison-table__heading--tfoot" scope="col"><span class="detailed-comparison-table__cost">$<?= $plus_price ?></span><span class="detailed-comparison-table__cost-year">/year</span>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--professional detailed-comparison-table__heading--tfoot" scope="col"><span class="detailed-comparison-table__cost">$<?= $professional_price ?></span><span class="detailed-comparison-table__cost-year">/year</span>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--career-max detailed-comparison-table__heading--tfoot" scope="col"><span class="detailed-comparison-table__cost">$<?= $career_max_price ?></span><span class="detailed-comparison-table__cost-year">/year</span>
                    </th>
                </tr>
                <tr>
                    <td class="detailed-comparison-table__heading detailed-comparison-table__heading--benefit detailed-comparison-table__heading--tfoot" scope="row"></td>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--basic detailed-comparison-table__heading--tfoot"><a class="button button--small button--blue" href="<?php echo esc_url( home_url( 'membership/basic' ) ); ?>">View</a>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--plus detailed-comparison-table__heading--tfoot" scope="col"><a class="button button--small button--green" href="<?php echo esc_url( home_url( 'membership/plus' ) ); ?>">View</a>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--professional detailed-comparison-table__heading--tfoot" scope="col"><a class="button button--small button--gold" href="<?php echo esc_url( home_url( 'membership/professional' ) ); ?>">View</a>
                    </th>
                    <th class="detailed-comparison-table__heading detailed-comparison-table__heading--career-max detailed-comparison-table__heading--tfoot" scope="col"><a class="button button--small button--orange" href="<?php echo esc_url( home_url( 'membership/career-max' ) ); ?>">View</a>
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Access to members-only events
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Receive invitations to exclusive, members-only alumni club and network events.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Discounted pricing at Purdue Alumni events
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                                <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                                <span class="tooltip__content">Members save money on Purdue Alumni events around the world.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Discounts on Purdue merchandise
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Save on Purdue gear &mdash; apparel, gifts, and more – online and in-store!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Online networking events
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Connect with fellow alumni &mdash; personally or professionally. Events held monthly!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Online alumni directory
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Keep in touch with other Purdue alumni.  Search by name, year, college/school, or company.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Access to travel program
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">See the world with fellow Purdue alumni, including trips hosted by faculty guides.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Free Purdue printables and downloads
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Enjoy downloadable Purdue-themed printables and desktop calendars</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Award-winning <em>Purdue Alumnus</em> magazine (digital and print)
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">The University's flagship publication features captivating stories, engaging profiles, and compelling photography.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Customized BOILER UPdate e-newsletter
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Receive Purdue updates &mdash; you choose what you want, when you want it!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Access to cultural, leadership, and affinity networks
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Join thousands of alumni unified and motivated by their shared Purdue experience.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Discounts up to 50% at thousands of retailers nationwide
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Enjoy exclusive savings on food, shopping, and activities every day!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Earn John Purdue Club priority points
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Your Purdue Alumni membership contributes points to your JPC membership! Win-win.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Discounts on Purdue Global online degrees and certificates
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Savings up to 40% on world-class online education!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Online career resources and tools
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Helpful services and tools to support your career goals.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Career development webinars
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Insights from industry experts to help further your career.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">ProQuest research database
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Thousands of periodicals at your fingertips.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">CareerShift job search tool
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Save time and money when looking for your next opportunity.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">CliftonStrengths – Leadership Assessment
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">No guessing. Know your strengths and how you can use them in your career.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included">Top 5</td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included">Full 34</td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Purdue Online Six Sigma and Project Management course discounts
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Save on these certificates to advance your career!</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--included">10% Off</td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included">10% Off</td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">Resume review
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Optimize your resume to jump-start your job search.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
                <tr>
                    <th class="detailed-comparison-table__data detailed-comparison-table__data--benefit" scope="row">1:1 Career coaching session
                        <span class="tooltip detailed-comparison-table__tooltip" role="tooltip">
                            <i class="far fa-question-circle detailed-comparison-table__tooltip-icon"></i>
                            <span class="tooltip__content">Tap into expertise in resume reviews, strengths coaching, interview preparation, networking, and career strategy.</span>
                        </span>
                    </th>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--basic detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Basic"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--plus detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Plus"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--professional detailed-comparison-table__data--excluded"><i class="fas fa-times sr-only" title="Not Included in Professional"></i>
                    </td>
                    <td class="detailed-comparison-table__data detailed-comparison-table__data--career-max detailed-comparison-table__data--included"><i class="fas fa-check" title="Included in Career Max"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="row">
        <p style="text-align: center;">Multi-year discounts available for PLUS, PROFESSIONAL, and CAREER MAX memberships.<br />
            <?php if ( ! isset( $_GET['recent-grad'] ) ) : ?>Discounts available for recent grads.<br /><? endif; ?>
            Joint Member discounts available for PLUS memberships.</p>
    </section>

</main>
<?php get_footer(); ?>