<?php
/*
    Template Name: Community Page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            $image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);
            ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="<?= $image_alt ?>" />
            </section>
<?php } ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php the_title(); ?></h1>
                <?php the_content();
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

            $community__type = rwmb_meta( 'community__type' );
            $community__city = rwmb_meta( 'community__city' );
            $community__state = rwmb_meta( 'community__state' );
            $community__country = rwmb_meta( 'community__country' );
            $community__desc = rwmb_meta( 'community__desc' );
            $community__phone = rwmb_meta( 'community__phone' );
            $community__email = rwmb_meta( 'community__email' );
            $community__staff = rwmb_meta( 'community__staff' );
            $social__channel = rwmb_meta( 'social__channel' );
            $social__url = rwmb_meta( 'social__url' );
            $group__sm = rwmb_meta( 'group__sm' );
            $community__other = rwmb_meta( 'community__other' );
            $community__scholarship = rwmb_meta( 'community__scholarship' );
            $community__name = rwmb_meta( 'community__name' );

            ?>
    </main>

  <div>

    <!--Produce International flag-->
    <?php if ($community__type == 'International') {
      echo "<img style=\"display:block; max-width: 300px; height: 10em; border: 1px solid #000; float: right;\" src=\"https://www.purduealumni.org/flags/4x3/{$country_codes[$community__country]}.svg\">";
    } ?>

    <!-- Output location based on type of community -->
    <?php if($community__type == 'International') { ?>
      <h3><?php echo $community__city . ", " . $community__country; ?></h3>
    <?php }
    else { ?>
      <h3><?php echo $community__city . ", " . $community__state; ?></h3>
    <?php } ?>

    <!-- Output community description -->
    <h4><?php echo $community__desc; ?></h4>

    <!-- Output community contact with heading, contact name, phone number -->
    <h5>Community contact</h5>

    <p><strong><?php echo $community__name; ?></strong></p>

    <?php if($community__phone != "" ){ ?>
      <p><strong><?php echo $community__phone; ?></strong></p>
    <?php } ?>

    <?php if($community__email != "" ){ ?>
      <p><a href="mailto:<?php echo $community__email?>"><?php echo $community__email; ?></a></p>
    <?php } ?>

    <!-- Output Purdue alumni staff contact -->
    <?php if($community__staff != "" ){ ?>
      <h5>Staff contact</h5><p><strong><?php echo $community__staff; ?></strong></p>
    <?php } ?>

    <?php if($community__staff == "Trevor Foley") { ?>
      <p><strong><a href="mailto:trevorfoley@purdue.edu">trevorfoley@purdue.edu</a></strong></p>
      <strong>765-494-5189</strong>
      </br>
    <?php  } ?>

    <?php if($community__staff == "Courtney Magnuson") { ?>
      <p><strong><a href="mailto:magnusc@purdue.edu">magnusc@purdue.edu</a></strong></p>
      <strong>765-494-0430</strong>
      </br>
    <?php  } ?>

    <?php if($community__staff == "Natalie Evans") { ?>
      <p><strong><a href="mailto:evans352@purdue.edu">evans352@purdue.edu</a></strong></p>
      <strong>765-496-6279</strong>
      </br>
    <?php  } ?>

    <?php if($community__staff == "Maria Whipple") { ?>
      <p><strong><a href="mailto:whipple@purdue.edu">whipple@purdue.edu</a></strong></p>
      <strong>765-496-6281</strong>
      </br>
    <?php  } ?>

    <?php if($community__staff == "Sharetha Marshall") { ?>
      <p><strong><a href="mailto:srmarsha@purdue.edu">srmarsha@purdue.edu</a></strong></p>
      </br>
    <?php  } ?>

    </br>

    <!-- Output linked svg of selected social channel -->
    <?php if($social__url != "" ){ ?>
      <?php echo "<strong><p>Social Links</strong></p>"; ?>
    <?php } ?>

    <?php foreach ($group__sm as $social) {
      if ($social['social__channel'] == 'Instagram') {
        $social__type = "fab fa-instagram";
      }

      if ($social['social__channel'] == 'Facebook') {
        $social__type = "fab fa-facebook-square";
      }

      if ($social['social__channel'] == 'Twitter') {
        $social__type = "fab fa-twitter-square";
      }

      if ($social['social__channel'] == 'Youtube') {
        $social__type = "fab fa-youtube-square";
      }

      if ($social['social__channel'] == 'Graduway') {
        $social__type = "fas fa-graduation-cap";
      }

      echo "<a href=\"{$social['social__url']}\"><i style=\"padding-right: .25em\" class=\"{$social__type} fa-5x\"></i></a>";
    } ?>

    <!-- Output other text outputs -->
    <?php if($community__other != "" ){ ?>
      <p><?php echo $community__other; ?></p>
    <?php } ?>

    <?php if($community__scholarship != "" ){ ?>
      <p><?php echo $community__scholarship; ?></p>
    <?php } ?>

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
