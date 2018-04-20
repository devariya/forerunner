<?php
/*
Template name: Team
*/
/**
 * The Team Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forerunner
 */

get_header('manifesto');
?>
<?php
/*
 *Metabox value
 * $teamPTMB = team_page_template_meta_box
 * $backgound =  section_1_bg_img    
*/

    $teamPTMB = get_post_meta( get_the_ID(), 'team_page_template_meta_box', true );
?>    
    <div class="team-page-content">
        <div class="team-header forerunner-header">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                      <h1><?php single_post_title(); ?></h1>
                  </div>
                    <?php  if(($teamPTMB['teamptmb_sub_title']) != '') { ?>        
                        <div class="col-md-6 portf-header-desc">
                            <p><?php echo esc_attr($teamPTMB['teamptmb_sub_title']);?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="team-content">
            <div class="container">




<?php
//Team Post Type Query
 $mosaics = new WP_Query( array( 'post_type' => 'teams_mt', 'posts_per_page' => -1 ) ); // Query 
 while ($mosaics->have_posts()) : $mosaics->the_post();
 $TeamData = get_post_meta( get_the_ID(), 'teams_mt_post_type_meta_box', true );
?>

               <div class="team-detail-outer"><!-- team-detail-outer -->
                  <div class="team-detail"><!-- team-detail --> 
                    <div class="row">
                            <?php  if(($TeamData['tm_img_url']) != '') { ?>
                                <div class="col-sm-4">        
                                    <img src="<?php echo esc_url($TeamData['tm_img_url']);?>"></img>
                                </div>
                            <?php } ?>
                      <div class="col-sm-7 team-text">
                        <h2>
                            <?php  if(($TeamData['tm_first_name']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_first_name']);?>
                            <?php } ?>
                            <?php  if(($TeamData['tm_last_name']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_last_name']);?>
                            <?php } ?>
                                </h2>
                            <?php  if(($TeamData['tm_job_title']) != '') { ?>        
                                <h2 class="italic"><?php echo esc_attr($TeamData['tm_job_title']);?></h2>
                            <?php } ?>
                            <p>
                            <?php  if(($TeamData['tm_description']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_description']);?>
                            <?php } ?>
                            </p>

                    <?php  //if(($TeamData['tm_twitter_url']) != '') { ?>        
                          <?php //echo esc_url($TeamData['tm_twitter_url']);?>
                    <?php// } ?>

                    <?php // if(($TeamData['tm_instagram_url']) != '') { ?>        
                          <?php //echo esc_url($TeamData['tm_instagram_url']);?>
                    <?php //} ?>

                    <?php  //if(($TeamData['tm_linkedin_url']) != '') { ?>        
                          <?php //echo esc_url($TeamData['tm_linkedin_url']);?>
                    <?php //} ?>

                    <?php  //if(($TeamData['tm_medium_url']) != '') { ?>        
                          <?php //echo esc_url($TeamData['tm_medium_url']);?>
                    <?php //} ?>
    
                        <a href="#" class="close-btn">
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
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-12">
                        <h1 class="featured-news-header">Featured News</h1>
                      </div>
                    </div>
                    <div class="row team-news">
                        <div class="col-md-6">
                          <div class="news-item news-item-small push-right">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <img src="./uploads/2018/04/home-6.jpg" alt="Warby Parker — Fast Company">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="date">November 5, 2018</p>
                                    <div class="description">Denim is more than a staple in 2016: the key pieces, styles & brands you need to know laudantium.</div>
                                    <a class="read-more" href="#">READ MORE</a>
                                </div>
                                <div class="rotated-text">
                                  <p>
                                    <strong class="company-name">Warby Parker</strong>
                                    <strong class="divider">—</strong>
                                    <strong class="publication-name">Fast Company</strong>
                                  </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="news-item news-item-small push-left">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <img src="./uploads/2018/04/home-7.jpg" alt="Forerunner — Fortune Magazine">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="date">November 5, 2018</p>
                                    <div class="description">Dolce&Gabbana creates a oral collection which brings the essence of Spring</div>
                                    <a class="read-more" href="#">READ MORE</a>
                                </div>
                                <div class="rotated-text">
                                  <p>
                                    <strong class="company-name">Forerunner</strong>
                                    <strong class="divider">—</strong>
                                    <strong class="publication-name">Fortune Magazine</strong>
                                  </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 more-btn">
                          <a href="#" class="f-btn f-btn-gray">
                              See More News
                          </a>
                        </div>
                    </div> 
                  </div><!-- team-detail -->
                </div><!-- team-detail-outer -->















<?php endwhile; wp_reset_postdata(); ?>


 

                <div class="team-list row"><!-- team-list row --> 

<?php
//Team Post Type Query
 $mosaics = new WP_Query( array( 'post_type' => 'teams_mt', 'posts_per_page' => -1 ) ); // Query 
 while ($mosaics->have_posts()) : $mosaics->the_post();
 $TeamData = get_post_meta( get_the_ID(), 'teams_mt_post_type_meta_box', true );
?>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="team-member">
                        <?php  if(($TeamData['tm_img_url']) != '') { ?>        
                            <img class="team-photo-img" src="<?php echo esc_url($TeamData['tm_img_url']);?>"></img>
                        <?php } ?>
                        <span class="team-name">
                            <?php  if(($TeamData['tm_first_name']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_first_name']);?>
                            <?php } ?>
                            <?php  if(($TeamData['tm_last_name']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_last_name']);?>
                            <?php } ?>
                        </span>
                        <span class="team-role">
                            <?php  if(($TeamData['tm_job_title']) != '') { ?>        
                                <?php echo esc_attr($TeamData['tm_job_title']);?>
                            <?php } ?>
                        </span>
                      </div>
                    </div>
<?php endwhile; wp_reset_postdata(); ?>

                </div><!-- team-list row --> 


            </div>
        </div>
    </div>







<?php
get_footer();