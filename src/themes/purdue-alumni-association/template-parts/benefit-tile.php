<?php
setup_postdata( $post );

echo "
      <div class=\"benefit-tile\">
          <img class=\"benefit-tile__image\" src=\"https://via.placeholder.com/650x400\" alt=\"benefit image\" />
          <h3 class=\"benefit-tile__title\">{$benefit__name} {$benefit_id}</h3>
          <p class=\"benefit-tile__description\">{$benefit__member_description}</p>";
          if ( $benefit__member_url != '' ) {
                echo " <a class=\"button benefit-tile__button\" href=\"{$benefit__member_url}\" rel=\"noopener\">Access Benefit</a>";
          }
echo " </div>";
