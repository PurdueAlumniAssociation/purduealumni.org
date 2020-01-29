<?php
/*
    Template Name: Community Page
*/
$country_codes = array("Afghanistan" => "AF",
                      "Aland Islands" => "AX",
                      "Albania" => "AL",
                      "Algeria" => "DZ",
                      "American Samoa" => "AS",
                      "Andorra" => "AD",
                      "Angola" => "AO",
                      "Anguilla" => "AI",
                      "Antigua and Barbuda" => "AG",
                      "Argentina" => "AR",
                      "Armenia" => "AM",
                      "Aruba" => "AW",
                      "Australia" => "AU",
                      "Austria" => "AT",
                      "Azerbaijan" => "AZ",
                      "Bahamas" => "BS",
                      "Bahrain" => "BH",
                      "Bangladesh" => "BD",
                      "Barbados" => "BB",
                      "Belarus" => "BY",
                      "Belgium" => "BE",
                      "Belize" => "BZ",
                      "Benin" => "BJ",
                      "Bermuda" => "BM",
                      "Bhutan" => "BT",
                      "Bolivia" => "BO",
                      "Bonaire" => "BQ",
                      "Bosnia and Herzegovina" => "BA",
                      "Botswana" => "BW",
                      "Brazil" => "BR",
                      "British Indian Ocean Territory" => "IO",
                      "Brunei Darussalam" => "BN",
                      "Bulgaria" => "BG",
                      "Burkina Faso" => "BF",
                      "Burundi" => "BI",
                      "Cabo Verde" => "CV",
                      "Cambodia" => "KH",
                      "Cameroon" => "CM",
                      "Canada" => "CA",
                      "Cayman Islands" => "KY",
                      "Central African Republic" => "CF",
                      "Chad" => "TD",
                      "Chile" => "CL",
                      "China" => "CN",
                      "Christmas Island" => "CX",
                      "Cocos (Keeling) Islands" => "CC",
                      "Colombia" => "CO",
                      "Comoros" => "KM",
                      "Cook Islands" => "CK",
                      "Costa Rica" => "CR",
                      "Côte d'Ivoire" => "CI",
                      "Croatia" => "HR",
                      "Cuba" => "CU",
                      "Curaçao" => "CW",
                      "Cyprus" => "CY",
                      "Czech Republic" => "CZ",
                      "Democratic Republic of the Congo" => "CD",
                      "Denmark" => "DK",
                      "Djibouti" => "DJ",
                      "Dominica" => "DM",
                      "Dominican Republic" => "DO",
                      "Ecuador" => "EC",
                      "Egypt" => "EG",
                      "El Salvador" => "SV",
                      "England" => "GB-ENG",
                      "Equatorial Guinea" => "GQ",
                      "Eritrea" => "ER",
                      "Estonia" => "EE",
                      "Ethiopia" => "ET",
                      "Falkland Islands" => "FK",
                      "Faroe Islands" => "FO",
                      "Federated States of Micronesia" => "FM",
                      "Fiji" => "FJ",
                      "Finland" => "FI",
                      "Former Yugoslav Republic of Macedonia" => "MK",
                      "France" => "FR",
                      "French Guiana" => "GF",
                      "French Polynesia" => "PF",
                      "French Southern Territories" => "TF",
                      "Gabon" => "GA",
                      "Gambia" => "GM",
                      "Georgia" => "GE",
                      "Germany" => "DE",
                      "Ghana" => "GH",
                      "Gibraltar" => "GI",
                      "Greece" => "GR",
                      "Greenland" => "GL",
                      "Grenada" => "GD",
                      "Guadeloupe" => "GP",
                      "Guam" => "GU",
                      "Guatemala" => "GT",
                      "Guernsey" => "GG",
                      "Guinea" => "GN",
                      "Guinea-Bissau" => "GW",
                      "Guyana" => "GY",
                      "Haiti" => "HT",
                      "Holy See" => "VA",
                      "Honduras" => "HN",
                      "Hong Kong" => "HK",
                      "Hungary" => "HU",
                      "Iceland" => "IS",
                      "India" => "IN",
                      "Indonesia" => "ID",
                      "Iran" => "IR",
                      "Iraq" => "IQ",
                      "Ireland" => "IE",
                      "Isle of Man" => "IM",
                      "Israel" => "IL",
                      "Italy" => "IT",
                      "Jamaica" => "JM",
                      "Japan" => "JP",
                      "Jersey" => "JE",
                      "Jordan" => "JO",
                      "Kazakhstan" => "KZ",
                      "Kenya" => "KE",
                      "Kiribati" => "KI",
                      "Kosovo" => "XK",
                      "Kuwait" => "KW",
                      "Kyrgyzstan" => "KG",
                      "Laos" => "LA",
                      "Latvia" => "LV",
                      "Lebanon" => "LB",
                      "Lesotho" => "LS",
                      "Liberia" => "LR",
                      "Libya" => "LY",
                      "Liechtenstein" => "LI",
                      "Lithuania" => "LT",
                      "Luxembourg" => "LU",
                      "Macau" => "MO",
                      "Madagascar" => "MG",
                      "Malawi" => "MW",
                      "Malaysia" => "MY",
                      "Maldives" => "MV",
                      "Mali" => "ML",
                      "Malta" => "MT",
                      "Marshall Islands" => "MH",
                      "Martinique" => "MQ",
                      "Mauritania" => "MR",
                      "Mauritius" => "MU",
                      "Mayotte" => "YT",
                      "Mexico" => "MX",
                      "Moldova" => "MD",
                      "Monaco" => "MC",
                      "Mongolia" => "MN",
                      "Montenegro" => "ME",
                      "Montserrat" => "MS",
                      "Morocco" => "MA",
                      "Mozambique" => "MZ",
                      "Myanmar" => "MM",
                      "Namibia" => "NA",
                      "Nauru" => "NR",
                      "Nepal" => "NP",
                      "Netherlands" => "NL",
                      "New Caledonia" => "NC",
                      "New Zealand" => "NZ",
                      "Nicaragua" => "NI",
                      "Niger" => "NE",
                      "Nigeria" => "NG",
                      "Niue" => "NU",
                      "Norfolk Island" => "NF",
                      "North Korea" => "KP",
                      "Northern Ireland" => "GB-NIR",
                      "Northern Mariana Islands" => "MP",
                      "Norway" => "NO",
                      "Oman" => "OM",
                      "Pakistan" => "PK",
                      "Palau" => "PW",
                      "Panama" => "PA",
                      "Papua New Guinea" => "PG",
                      "Paraguay" => "PY",
                      "Peru" => "PE",
                      "Philippines" => "PH",
                      "Pitcairn" => "PN",
                      "Poland" => "PL",
                      "Portugal" => "PT",
                      "Puerto Rico" => "PR",
                      "Qatar" => "QA",
                      "Republic of the Congo" => "CG",
                      "Réunion" => "RE",
                      "Romania" => "RO",
                      "Russia" => "RU",
                      "Rwanda" => "RW",
                      "Saint Barthélemy" => "BL",
                      "Saint Helena" => "SH",
                      "Saint Kitts and Nevis" => "KN",
                      "Saint Lucia" => "LC",
                      "Saint Martin" => "MF",
                      "Saint Pierre and Miquelon" => "PM",
                      "Saint Vincent and the Grenadines" => "VC",
                      "Samoa" => "WS",
                      "San Marino" => "SM",
                      "Sao Tome and Principe" => "ST",
                      "Saudi Arabia" => "SA",
                      "Scotland" => "GB-SCT",
                      "Senegal" => "SN",
                      "Serbia" => "RS",
                      "Seychelles" => "SC",
                      "Sierra Leone" => "SL",
                      "Singapore" => "SG",
                      "Sint Maarten" => "SX",
                      "Slovakia" => "SK",
                      "Slovenia" => "SI",
                      "Solomon Islands" => "SB",
                      "Somalia" => "SO",
                      "South Africa" => "ZA",
                      "South Georgia and the South Sandwich Islands" => "GS",
                      "South Korea" => "KR",
                      "South Sudan" => "SS",
                      "Spain" => "ES",
                      "Sri Lanka" => "LK",
                      "State of Palestine" => "PS",
                      "Sudan" => "SD",
                      "Suriname" => "SR",
                      "Svalbard and Jan Mayen" => "SJ",
                      "Swaziland" => "SZ",
                      "Sweden" => "SE",
                      "Switzerland" => "CH",
                      "Syrian Arab Republic" => "SY",
                      "Taiwan" => "TW",
                      "Tajikistan" => "TJ",
                      "Tanzania" => "TZ",
                      "Thailand" => "TH",
                      "Timor-Leste" => "TL",
                      "Togo" => "TG",
                      "Tokelau" => "TK",
                      "Tonga" => "TO",
                      "Trinidad and Tobago" => "TT",
                      "Tunisia" => "TN",
                      "Turkey" => "TR",
                      "Turkmenistan" => "TM",
                      "Turks and Caicos Islands" => "TC",
                      "Tuvalu" => "TV",
                      "Uganda" => "UG",
                      "Ukraine" => "UA",
                      "United Arab Emirates" => "AE",
                      "United Kingdom" => "GB",
                      "United States Minor Outlying Islands" => "UM",
                      "United States of America" => "US",
                      "Uruguay" => "UY",
                      "Uzbekistan" => "UZ",
                      "Vanuatu" => "VU",
                      "Venezuela" => "VE",
                      "Vietnam" => "VN",
                      "Virgin Islands (British)" => "VG",
                      "Virgin Islands (U.S.)" => "VI",
                      "Wales" => "GB-WLS",
                      "Wallis and Futuna" => "WF",
                      "Western Sahara" => "EH",
                      "Yemen" => "YE",
                      "Zambia" => "ZM",
                      "Zimbabwe" => "ZW");

?>
<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    // use custom banner or default if none selected
    if ( has_post_thumbnail() ) {
        $banner_src = the_post_thumbnail_url();
    } else {
        $banner_src = "https://www.purduealumni.org/wp-content/uploads/web-banner_community-default.jpg";
    } ?>
    <section class="row row--no-padding">
        <img class="banner" src="<?= $banner_src ?>" alt="" />
    </section>
    <section class="row">
        <div class="bootstrap-row">
            <div class="col-xs-12 col-sm-9">
                <main class="" id="main" tabindex="-1">
                    <h1><?php the_title(); ?></h1>
                    <?php
                    $community_type = rwmb_meta( 'community__type' );
                    $community_city = rwmb_meta( 'community__city' );
                    $community_state = rwmb_meta( 'community__state' );
                    $community_country = rwmb_meta( 'community__country' );
                    $community_desc = rwmb_meta( 'community__desc' );
                    $community_contact_name = rwmb_meta( 'community__name' );
                    $community_contact_phone = rwmb_meta( 'community__phone' );
                    $community_contact_email = rwmb_meta( 'community__email' );
                    $community_staff_name = rwmb_meta( 'community__staff' );
                    $community_mailing_address = rwmb_meta( 'community__mailing_address' );
                    $group_sm = rwmb_meta( 'group__sm' );
                    $community_other = rwmb_meta( 'community__other' );
                    $community_scholarship = rwmb_meta( 'community__scholarship' );
                    $widget_id = rwmb_meta( 'widget__id' );
                    $calendar_id = rwmb_meta( 'calendar__id' );

                    // output community description
                    if (!empty($community_desc)) {
                        echo do_shortcode($community_desc);
                    }

                    // output other text
                    if (!empty($community_other)) {
                        echo do_shortcode($community_other);
                    }

                    // output scholarship content
                    if (!empty($community_scholarship)) {
                        echo do_shortcode($community_scholarship);
                    }

                    if (!empty($widget_id) && !empty($calendar_id)) {
                        echo "<h2 id=\"community-events\">Events</h2>";
                        echo "<div id=\"calendar-widget-container\" data-widget-id=\"{$widget_id}\" data-calendar-id=\"{$calendar_id}\" data-height=\"\" data-width=\"\" data-show-icons=\"true\"><script type=\"text/javascript\">window.cvtDomain = \"www.cvent.com\";var cventWidgetRenderScript = document.createElement(\"script\");var versionInHours = new Date().getTime()/(3600 * 1000);cventWidgetRenderScript.src = \"//www.cvent.com/g/mobile/javascript/calendar-widget-loader.js?version=\"+ versionInHours;document.getElementsByTagName(\"head\")[0].appendChild(cventWidgetRenderScript);</script></div>";
                    }
                    ?>
                </main>
            </div>
            <aside class="col-xs-12 col-sm-3">
                <?php
                // output location based on type of community
                if ($community_type == 'International') {
                    $location = "{$community_country}";
                } else {
                    $location = "{$community_city}, {$community_state}";
                }

                echo "<h2>Location</h2>";

                // output International flag
                if ($community_type == 'International') {
                    $lower_community = strtolower($country_codes[$community_country]);

                    echo "<img style=\"display:block; max-width: 300px; height: 10em; border: 1px solid #000;\" class=\"international-flag\" src=\"https://www.purduealumni.org/flags/4x3/{$lower_community}.svg\" alt=\"{$community_country} flag\">";
                }

                echo "<p>{$location}</p>";

                // output community contact with heading, contact name, phone number
                echo "<h2>Contact Us</h2>";

                // don't output local contact for international network (they will be listed in the content body)
                if (isset($community_contact_name) && $community_type != 'International') {
                    echo "<div class=\"community_contact\">
                        <h3>Community Contact</h3>
                        <p class=\"community_contact__name\">{$community_contact_name}</p>";

                    if (isset($community_contact_email)) {
                        echo "<p class=\"community_contact__email\"><a href=\"mailto:{$community_contact_email}\">{$community_contact_email}</a></p>";
                    }

                    if (isset($community_contact_phone)) {
                        echo "<p class=\"community_contact__phone\">{$community_contact_phone}</p>";
                    }

                    echo "</div>";
                }

                // output Purdue alumni staff contact
                 if (isset($community_staff_name)) {

                    switch ($community_staff_name) {
                        case 'Trevor Foley':
                            $staff_email = 'trevorfoley@purdue.edu';
                            $staff_phone = '765-494-5189';
                            break;
                        case 'Courtney Magnuson':
                            $staff_email = 'magnusc@purdue.edu';
                            $staff_phone = '765-494-0430';
                            break;
                        case 'Natalie Evans':
                            $staff_email = 'ngevans@purdue.edu';
                            $staff_phone = '765-496-6279';
                            break;
                        case 'Maria Whipple':
                            $staff_email = 'whipple@purdue.edu';
                            $staff_phone = '765-496-6281';
                            break;
                        case 'Sharetha Marshall':
                            $staff_email = 'sharetha@purdue.edu';
                            $staff_phone = '765-494-5180';
                            break;
                        case 'Jimmy Cox':
                            $staff_email = 'jimmycox@purdue.edu';
                            $staff_phone = '765-496-6549';
                            break;
                        case 'Kelli Cornelius':
                          $staff_email = 'kcornelius@purdue.edu';
                          $staff_phone = '765-496-1136';
                          break;
                    }

                    echo "<div class=\"community_contact community_contact--staff\">
                        <h3>Staff Contact</h3>
                        <p class=\"community_contact__name\">{$community_staff_name}</p>";

                    if (isset($staff_email)) {
                        echo "<p class=\"community_contact__email\"><a href=\"mailto:{$staff_email}\">{$staff_email}</a></p>";
                    }

                    if (isset($staff_phone)) {
                        echo "<p class=\"community_contact__phone\">{$staff_phone}</p>";
                    }

                    echo "</div>";
                }

                if (!empty($community_mailing_address)) {
                    echo $community_mailing_address;
                }

                // output social network icons, exclude international networks
                if(!empty($group_sm) && $community_type != 'International' ) {
                    echo "<h2>Connect with Us</h2>
                        <div class=\"community_social\">";

                    foreach ($group_sm as $social) {
                        if ($social['social__channel'] == 'Instagram') {
                            $fa_social_class = "fab fa-instagram";
                        }

                        if ($social['social__channel'] == 'Facebook') {
                            $fa_social_class = "fab fa-facebook-square";
                        }

                        if ($social['social__channel'] == 'Twitter') {
                            $fa_social_class = "fab fa-twitter-square";
                        }

                        if ($social['social__channel'] == 'Youtube') {
                            $fa_social_class = "fab fa-youtube-square";
                        }

                        if ($social['social__channel'] == 'Graduway') {
                            $fa_social_class = "fas fa-graduation-cap";
                        }

                        if ($social['social__channel'] == 'Website') {
                            $fa_social_class = "fas fa-link";
                        }

                        if ($social['social__channel'] == 'LinkedIn') {
                            $fa_social_class = "fab fa-linkedin";
                        }

                        if ($social['social__channel'] == 'Whatsapp') {
                            $fa_social_class = "fab fa-whatsapp";
                        }

                        echo "<a class=\"community_social__link\" href=\"{$social['social__url']}\">
                            <i class=\"{$fa_social_class} fa-3x community_social__icon\"></i>
                            </a>";
                    }

                    echo "</div>";
                }
                if (is_user_logged_in()) {
                    $volunteer = get_user_meta( get_current_user_id(), 'club_volunteer', TRUE );

                    $user = wp_get_current_user();
                    $roles = (array) $user->roles;
                    $is_admin = in_array('administrator', $roles);

                    if ( ! empty($volunteer) || $is_admin ) { ?>
                        <p><a href="https://www.purduealumni.org/communities/change-request/">Request Changes</a></p>
                    <?php }
                }
                ?>

            </aside>
        </div>
    </section>
<?php endwhile; else : ?>
<section class="row">
    <main id="main" tabindex="-1">
        <h1>Oh no!</h1>
        <p>Sorry, something went wrong.</p>
    </main>
</section>
<?php endif; ?>
<?php get_footer(); ?>
