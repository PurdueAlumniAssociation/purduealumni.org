<?php

require_once '../classes/GWEmailDomainControl.class.php';

// exclude purdue.edu from email
new GWEmailDomainControl(array(
    'form_id' => 30,
    'field_id' => 2,
    'domains' => array('purdue.edu'),
    'validation_message' => __('Whoops! At some point Purdue will delete your <strong>%s</strong> email account, and we want to be able to stay in touch afterwards. Please provide an alternate email address.'),
    'mode' => 'ban'
));