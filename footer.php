<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forerunner
 */

?>
    <footer id="footer" class="site-footer page-section" role="contentinfo">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="footer-copyright col-md-8">
                    <a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
                    <p class="copyright">
                        <?php if(cs_get_option( 'footer_text_1' ) != '') { ?>
                            <span><?php echo esc_attr(cs_get_option( 'footer_text_1' )); ?></span>
                        <?php } ?> 
                        <span class="divider">—</span>                
                        <?php if(cs_get_option( 'footer_text_2' ) != '') { ?>
                            <span><?php echo esc_attr(cs_get_option( 'footer_text_2' )); ?></span>
                        <?php } ?>                                   
                    </p>
                    <p>
                        <?php if(cs_get_option( 'footer_lp_login_url' ) != '') { ?>                    
                            <a href="<?php echo esc_url(cs_get_option( 'footer_lp_login_url' )); ?>" target="_blank">LP Login</a>
                        <?php } ?>
                        &nbsp;|&nbsp; 
                        <?php if(cs_get_option( 'footer_lead_login_url' ) != '') { ?>                   
                            <a href="<?php echo esc_url(cs_get_option( 'footer_lead_login_url' )); ?>" target="_blank">Leadership Login</a>
                        <?php } ?>    
                    </p>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
