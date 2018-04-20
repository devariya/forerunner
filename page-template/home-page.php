<?php
/*
Template name: Homepage
*/
/**
 * The HomePage Page Template
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

get_header('home');
?>

<?php
/*
 *Metabox value
 * $HPTMB = home_page_template_meta_box
 * $backgound =  section_1_bg_img    
*/

    $HPTMB = get_post_meta( get_the_ID(), 'home_page_template_meta_box', true );
       //$backgound =$HPTMB['section_1_bg_img'];
       $backgound2 =$HPTMB['section_2_bg_img'];
?>

   <!--==================== 1 ====================-->
   <section class="home-section-1 page-section home-banner">
            <div class="hero-banner-container">
                <?php 

                if(($HPTMB['section_1_bg_slider']) != '') { 

                    $PTData = $HPTMB['section_1_bg_slider'];

                    foreach ($PTData as $PTable ) {
                        $PTData = $PTable;

                ?>
                        <div class="hero-banner-full" style="background-image:url(<?php echo esc_url($PTData['upload_slide_bg_img']);?>); opacity: <?php echo esc_attr($PTData['section_1_opacity']);?>">
                            <p class="hb-part1 text-center">
                                <?php echo esc_attr($PTData['section_1_title']);?>
                            </p>
                        </div>
                <?php } }?>
            </div>




            <div class="hb-content">
                <?php  if(($HPTMB['section_1_main_title']) != '') { ?>        
                    <p><?php echo esc_attr($HPTMB['section_1_main_title']);?></p>
                <?php } ?>
                <?php  if(($HPTMB['section_1_main_subtitle']) != '') { ?>        
                    <h1><?php echo esc_attr($HPTMB['section_1_main_subtitle']);?></h1>
                <?php } ?>
            </div>




        </div>
    </section>
    <!--==================== 2 ====================-->
    <section class="home-section-2 page-section"  style="
            <?php  if(($backgound2['image']) != '') { ?>
                    background-image:url(<?php echo esc_url($backgound2['image']);?>);
            <?php } ?> 
            <?php  if(($backgound2['color']) != '') { ?>
                    background-color:<?php echo esc_attr($backgound2['color']);?>;
            <?php } ?> 
            <?php  if(($backgound2['repeat']) != '') { ?>    
                    background-repeat:<?php echo esc_attr($backgound2['repeat']);?>;
            <?php } ?>
            <?php  if(($backgound2['position']) != '') { ?>    
                    background-position:<?php echo esc_attr($backgound2['position']);?>;
            <?php } ?>
            <?php  if(($backgound2['size']) != '') { ?> 
                    background-size:<?php echo esc_attr($backgound2['size']);?>;
            <?php } ?>
            ">

        <div class="container text-center">
            <div>
                <?php  if(($HPTMB['section_2_logo']) != '') { ?> 
                            <div class="forerunner-logo">
                                <img src="<?php echo esc_url($HPTMB['section_2_logo']);?>" />
                            </div>
                <?php } ?>
            </div>

                <?php  if(($HPTMB['section_2_main_title']) != '') { ?>        
                    <p><?php echo esc_attr($HPTMB['section_2_main_title']);?></p>
                <?php } ?>
                <?php  if(($HPTMB['section_2_main_subtitle']) != '') { ?>        
                    <h1><?php echo esc_attr($HPTMB['section_2_main_subtitle']);?></h1>
                <?php } ?>
          

                <?php  if(($HPTMB['serction_2_p_url']) != '') { ?>             
                        <a href="<?php echo esc_url($HPTMB['serction_2_p_url']);?>" class="f-btn f-btn-white">
                                    Our Philosophy
                        </a>
                <?php } ?>  

        </div>
    </section>
    <!--==================== 3 ====================-->
    <section class="home-section-3 page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="news-item push-right">
                        <?php  if(($HPTMB['section_3_first_paragraph']) != '') { ?>        
                            <h1><?php echo esc_attr($HPTMB['section_3_first_paragraph']);?></h1>
                        <?php } ?>
                        <?php  if(($HPTMB['section_3_second_paragraph']) != '') { ?>        
                            <p><?php echo esc_attr($HPTMB['section_3_second_paragraph']);?></p>
                        <?php } ?>

                        <?php  if(($HPTMB['serction_3_portfolio_url']) != '') { ?>             
                                <a href="<?php echo esc_url($HPTMB['serction_3_portfolio_url']);?>" class="f-btn f-btn-blue">
                                        View Our Portfolio
                                </a>
                        <?php } ?>  
                    </div>

  
                    <!-- One Post Grid --> 
                    <?php
                    $do_not_duplicate = array(); //Don't Duplicate Array
                    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items', 'posts_per_page' => 1 ) ); // Query 
                    while ($mosaics->have_posts()) : $mosaics->the_post();
                    $do_not_duplicate[] = $post->ID; 

                    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                    ?>

                            <a href="<?php echo get_permalink();?>" class="news-item push-right">
                                <img src="<?php echo esc_url($large_image_url[0]); ?>" alt="<?php echo esc_html( get_the_title() );?>">
                                <div class="rotated-text">
                                    <p>
                                        <strong class="company-name"><?php the_title( '<strong>', ',</strong>' );?></strong>
                                        <strong class="divider">—</strong>
                                        <strong class="investment-number">Investment No.<?php echo esc_attr($PortData['port_issue']);?></strong>
                                    </p>
                                </div>
                            </a>

                    <?php endwhile; wp_reset_postdata(); ?>
                    <!-- One Post Grid End--> 


                </div>
                <!---->



                <div class="col-md-6">
                
                        <!-- Two Post Grid --> 
                        <?php
                        $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) );
                        while ($mosaics->have_posts()) : $mosaics->the_post();
                        $do_not_duplicate[] = $post->ID; 
                        $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                        ?>
                            <a href="<?php echo get_permalink();?>" class="news-item push-left">
                                <img src="<?php echo esc_url($large_image_url[0]); ?>" alt="<?php echo esc_html( get_the_title() );?>">
                                <div class="rotated-text">
                                    <p>
                                        <strong class="company-name"><?php the_title( '<strong>', ',</strong>' );?></strong>
                                        <strong class="divider">—</strong>
                                        <strong class="investment-number">Investment No.<?php echo esc_attr($PortData['port_issue']);?></strong>
                                    </p>
                                </div>
                            </a>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <!-- Two Post Grid End--> 

                </div>



            </div>
        </div>
    </section>
    <!--==================== 4 ====================-->
    <section class="home-section-4 page-section">
        <div class="container">
            <?php  if(($HPTMB['section_4_title']) != '') { ?>        
                        <h2><?php echo esc_attr($HPTMB['section_4_title']);?></h2>
            <?php } ?>            
            <!---->
            <div class="row"><!-- Row -->

                    <?php   $do_not_duplicate = array(); ?>
                    <?php   $mosaics = new WP_Query('posts_per_page=2'); ?>
                    <?php   while ($mosaics->have_posts()) : $mosaics->the_post(); ?>
                    <?php   $do_not_duplicate[] = $post->ID; 

                    $NPTMB = get_post_meta( get_the_ID(), 'news_post_meta_box', true );
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                    ?>

                        <!-- Single News Post --> 
                            <div class="col-md-6">
                                <div class="news-item news-item-big push-right">
                                    <img src="<?php echo esc_url($large_image_url[0]); ?>" alt="<?php echo esc_attr($NPTMB['brand_name']); ?> - " />
                                    <p class="date"><?php echo esc_attr(get_the_date()); ?></p>
                                    <?php the_title( '<div class="description">', '</div>' );?>
                                    <a class="read-more" href="<?php echo esc_attr($NPTMB['news_url']); ?>">READ MORE</a>
                                    <div class="rotated-text">
                                    <p>
                                        <strong class="company-name"><?php echo esc_attr($NPTMB['brand_name']); ?></strong>
                                        <strong class="divider">—</strong>
                                        <strong class="publication-name"><?php echo esc_attr($NPTMB['publication_name']); ?></strong>
                                    </p>
                                    </div>
                                </div>
                            </div>
                        <!-- Single News Post End--> 

                        
                    <?php endwhile; wp_reset_postdata(); ?>


            </div><!-- Row End -->
            <div class="row"><!-- Row -->


                    <?php   $mosaics = new WP_Query( array('posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) ); ?>
                    <?php   while ($mosaics->have_posts()) : $mosaics->the_post(); ?>
                    <?php   $do_not_duplicate[] = $post->ID; 

                    $NPTMB = get_post_meta( get_the_ID(), 'news_post_meta_box', true );
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                    ?>


                        <!-- Single News Post --> 
                            <div class="col-md-6">
                                <div class="news-item news-item-small push-right">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                                <img src="<?php echo esc_url($large_image_url[0]); ?>" alt="<?php echo esc_attr($NPTMB['brand_name']); ?> - " />
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="date"><?php echo esc_attr(get_the_date()); ?></p>
                                            <?php the_title( '<div class="description">', '</div>' );?>
                                            <a class="read-more" href="<?php echo esc_attr($NPTMB['news_url']); ?>">READ MORE</a>
                                        </div>
                                        <div class="rotated-text">
                                            <p>
                                                <strong class="company-name"><?php echo esc_attr($NPTMB['brand_name']); ?></strong>
                                                <strong class="divider">—</strong>
                                                <strong class="publication-name"><?php echo esc_attr($NPTMB['publication_name']); ?></strong>
                                            </p>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        <!-- Single News Post End--> 

                        
                    <?php   endwhile; wp_reset_postdata(); ?>



            </div><!-- Row End-->


                <?php  if(($HPTMB['serction_3_news_url']) != '') { ?>             
                        <div class="text-center">
                            <a href="<?php echo esc_url($HPTMB['serction_3_news_url']);?>" class="f-btn f-btn-gray">See All Articles</a>
                        </div>                        
                <?php } ?>  


        </div>
    </section>


    <!--==================== 5 ====================-->
    <section class="home-section-5 page-section text-center">
        <div class="container">
            <h2 class="text-center">Subscribe to Our Newsletter</h2>
            <form>
                <input type="text" name="name" placeholder="Enter Your Email" maxlength="100">
            </form>
            <a href="#" class="f-btn f-btn-blue">Subscribe</a>
        </div>
    </section>


<?php
get_footer();
