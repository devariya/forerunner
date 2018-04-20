<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forerunner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="news page-template-default page-template-page-news">

    <header id="header" class="site-header" role="banner" style="border-color: black; fill: black; background: white;">
          <div class="top-stripe"></div>
          <div class="header-inner">
            <a class="logo-wrap" href="<?php echo esc_url( home_url( '/' ) ); ?>"><!-- Logo SVG -->
              <svg width="97px" height="123px" viewBox="0 0 97 123" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Page-1" stroke="none" stroke-width="1" fill="inherit" fill-rule="evenodd">
                      <g id="Artboard-2" transform="translate(-87.000000, -49.000000)" fill-rule="nonzero">
                          <g id="Forerunner_F_Icon_White" transform="translate(87.000000, 49.000000)">
                              <path d="M85.4633698,0 C71.4646245,0 77.7767203,0 66.9973247,0 C53.8486324,0 50.7558864,9.58464912 50.7558864,9.58464912 L39.9584046,43.445614 L21.1125485,43.445614 L20.4252716,45.6035088 L39.2530414,45.6035088 L18.9964591,109.045614 C18.9964591,109.045614 15.1802637,121.921053 11.8523966,121.921053 C7.11380323,121.921053 15.3249536,100.180263 15.3249536,100.180263 L0.439982808,100.180263 C0.439982808,100.180263 -3.35812638,123 11.3640683,123 C26.0862629,123 19.5752186,123 30.3546142,123 C43.3224441,123 46.324759,112.983772 46.324759,112.983772 L67.8292915,45.6035088 L86.6751475,45.6035088 L87.3805107,43.445614 L68.5165684,43.445614 L77.7405478,14.547807 C77.7405478,14.547807 81.6110019,1.09692982 85.0654727,1.09692982 C89.6051175,1.09692982 82.2259339,20.9315789 82.2259339,20.9315789 L96.7310937,20.9315789 C96.7130075,20.9135965 99.8057536,0 85.4633698,0 Z" id="Shape"></path>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
            <div class="menu-section-wrap">
                <a class="hamburger" href="#">
                  <svg width="103px" height="77px" viewBox="0 0 103 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="inherit" fill-rule="evenodd">
                          <g id="Artboard-2" transform="translate(-255.000000, -71.000000)">
                              <g id="Group" transform="translate(255.000000, 71.000000)">
                                  <rect id="Rectangle" x="0" y="0" width="103" height="5"></rect>
                                  <rect id="Rectangle-Copy" x="0" y="36" width="103" height="5"></rect>
                                  <rect id="Rectangle-Copy-2" x="0" y="72" width="103" height="5"></rect>
                              </g>
                          </g>
                      </g>
                  </svg>
                </a>
            </div>
        </div>
        <div class="sidebar">
          <a class="close-btn" href="#">
            <svg width="77px" height="77px" viewBox="0 0 1 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="inherit" fill-rule="evenodd">
                    <g id="Artboard-2" transform="translate(-423.000000, -72.000000)">
                        <g id="Group-2" transform="translate(461.500000, 110.500000) rotate(-315.000000) translate(-461.500000, -110.500000) translate(410.000000, 59.000000)">
                            <polygon id="Rectangle-Copy-3" points="0 49 103 49 103 54 0 54"></polygon>
                            <polygon id="Rectangle-Copy-4" points="54 0 54 103 49 103 49 -9.18485099e-16"></polygon>
                        </g>
                    </g>
                </g>
            </svg>
          </a>
          <div class="sidebar-links">
                <!-- Navigation -->
                <?php wp_nav_menu(array(
                      'theme_location' => 'menu-1',
                      'container' => '',
                      'menu_class' => '', 
                      'menu_id' => 'primary-menu',
                      'fallback_cb' => 'show_top_menu_inset',
                      'echo' => true,
                      'walker' => new ForerunnerWalkerNavMenu(),
                      'depth' => 3 ) ); 
                  ?>                  
                <!-- Navigation End -->
          </div>

          <div class="sidebar-contact container">
            <div class="row">
              <div class="col-xl-6 col-lg-12 left">
                <p><strong>GET IN TOUCH</strong></p>
                <div>
                  <img class="tw-icon" src="<?php echo get_template_directory_uri();?>/assets/img/twitter-32.ico" />
                  <?php if(cs_get_option( 'sb_twitter_username' ) != '') { ?>
                            <span><?php echo esc_attr(cs_get_option( 'sb_twitter_username' )); ?></span>
                  <?php } ?>
                </div>
                  <?php if(cs_get_option( 'sb_address_line_1' ) != '') { ?>
                            <div><?php echo esc_attr(cs_get_option( 'sb_address_line_1' )); ?></div>
                  <?php } ?>
                  <?php if(cs_get_option( 'sb_address_line_2' ) != '') { ?>
                            <div><?php echo esc_attr(cs_get_option( 'sb_address_line_2' )); ?></div>
                  <?php } ?>
              </div>
              <div class="col-xl-6 col-lg-12 right">
                <p><strong>EMAIL</strong></p>
                  <?php if(cs_get_option( 'sb_email_address_1' ) != '') { ?>
                            <div><?php echo esc_attr(cs_get_option( 'sb_email_address_1' )); ?></div>
                  <?php } ?>
                  <?php if(cs_get_option( 'sb_email_address_2' ) != '') { ?>
                            <div><?php echo esc_attr(cs_get_option( 'sb_email_address_2' )); ?></div>
                  <?php } ?>
                  <?php if(cs_get_option( 'sb_email_address_3' ) != '') { ?>
                            <div><?php echo esc_attr(cs_get_option( 'sb_email_address_3' )); ?></div>
                  <?php } ?>
              </div>
            </div>
          </div>
        </div>
    </header>