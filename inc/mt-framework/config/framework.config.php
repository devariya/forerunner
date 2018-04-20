<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'mt-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general-settings',
  'title'       => 'General Settings',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(


    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Below Sidebar Navigation Informations Fields',
    ),


    // begin: sb_twitter_username
    array(
      'id'      => 'sb_twitter_username',
      'type'    => 'text',
      'title'   => 'Twitter Username',
      'default' => '@forerunnervc',
    ),
    // end: sb_twitter_username

    // begin: sb_address_line_1
    array(
      'id'      => 'sb_address_line_1',
      'type'    => 'text',
      'title'   => 'Address Line 1',
      'default' => '1161 Mission St. Suite 300',
    ),
    // end: sb_address_line_1

    // begin: sb_address_line_2
    array(
      'id'      => 'sb_address_line_2',
      'type'    => 'text',
      'title'   => 'Address Line 2',
      'default' => 'San Francisco, CA 94103',      
    ),
    // end: sb_address_line_2

    // begin: sb_email_address_1
    array(
      'id'      => 'sb_email_address_1',
      'type'    => 'text',
      'title'   => 'Email Address 1',
      'default' => 'info@forerunnerventures.com',       
    ),
    // end: sb_email_address_1

    // begin: sb_email_address_2
    array(
      'id'      => 'sb_email_address_2',
      'type'    => 'text',
      'title'   => 'Email Address 2',
      'default' => 'investments@forerunnerventures.com',       
    ),
    // end: sb_email_address_2

    // begin: sb_email_address_3
    array(
      'id'      => 'sb_email_address_3',
      'type'    => 'text',
      'title'   => 'Email Address 3',
      'default' => 'media@forereunnerventures.com',       
    ),
    // end: sb_email_address_3


  ), // end: fields
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'footer_section',
  'title'    =>__('Footer', 'applause'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'id'    => 'footer_logo',
      'type'  => 'upload',
      'title' => 'Footer Logo',
      'desc'  => 'Upload Footer logo',
      'default' =>  get_template_directory_uri().'/assets/img/icon-f.png',
    ),

    array(
      'id'        => 'footer_text_1',
      'type'      => 'text',
      'title'     => 'Footer Text Line 1',
      'info'      => 'Forerunner Ventures 2018',
    ),
    array(
      'id'        => 'footer_text_2',
      'type'      => 'text',
      'title'     => 'Footer Text Line 2',
      'info'      => 'All Rights Reserved',
    ),
    array(
      'id'      => 'footer_lp_login_url',
      'type'    => 'text',
      'title'   => 'LP Login',
      'default' => 'http://metrothemes.me',
    ),

    array(
      'id'      => 'footer_lead_login_url',
      'type'    => 'text',
      'title'   => 'Leadership Login',
      'default' => 'http://metrothemes.me',
    ),


  )
);





// ------------------------------
// Code Integration             -
// ------------------------------
$options[]   = array(
  'name'     => 'integration_section',
  'title'    =>__('Code Integration', 'applause'),
  'icon'     => 'fa fa-code',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Code Integration', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('You can your custom javascript and css code here also google analytics code', 'applause'), 
    ),

    //Custom Css
    array(
      'id'      => 'mt_custom_css',
      'type'    => 'textarea',
      'title'   =>__('Custom Css Code', 'applause'),
      'desc'    =>__('Custom css code for theme', 'applause'),
    ),


    //Custom js
    array(
      'id'      => 'mt_custom_js',
      'type'    => 'textarea',
      'title'   =>__('Custom Js Code', 'applause'),
      'desc'    =>__('Custom Js code for theme', 'applause'),
    ),




  )
);




// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    =>__('Backup', 'applause'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);




// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
