<?php
/*
Template name: Portfolio
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

get_header();
?>
<?php
/*
 *Metabox value
 * $PPTMB = portfolio_page_template_meta_box
 * $backgound =  section_1_bg_img    
*/

    $PPTMB = get_post_meta( get_the_ID(), 'portfolio_page_template_meta_box', true );
?>
<!-- Portfolio Body -->
<div class="portfolio-page-content">

    <!-- Portfolio Page Head --> 
        <div class="portfolio-header forerunner-header">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                      <h1><?php single_post_title(); ?></h1>
                  </div>
                  <div class="col-md-6 portf-header-desc">
                      <p><?php echo esc_attr($PPTMB['pptmb_sub_title']);?></p>
                  </div>
                  <div class="col-md-12 text-center">
                      <a class="portf-grid-type pgt-active" href="#">
                        Image View
                      </a>
                      <span class="portf-grid-sep"></span>
                      <a class="portf-grid-type" href="#">
                        List View
                      </a>
                  </div>
                </div>
            </div>
        </div>
    <!-- Portfolio Page Head End --> 

    <!-- Portfolio Content -->
        <div class="portfolio-content clearfix">
            <div class="portfolio-grid">
            


<!-- Two Post Grid --> 
<?php
 $do_not_duplicate = array(); //Don't Duplicate Array
 $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items', 'posts_per_page' => 2 ) ); // Query 
 while ($mosaics->have_posts()) : $mosaics->the_post();
 $do_not_duplicate[] = $post->ID; 

 $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
?>


                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<!-- Two Post Grid End--> 



<!-- Three Post Grid --> 
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 3, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    /*Find the Second item */
    if($i%2 == 0) {
        echo '<a href="'.get_permalink().'" class="col-md-8 block-right portfolio-item">';
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-4 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- Three Post Grid End--> 





<!-- SIX POST GRID -->
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');  
?>
                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                    <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 5, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    if($i%3== 0) {
        echo '<a href="'.get_permalink().'" class="col-md-6 block-right portfolio-item">';;
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-3 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- SIX POST GRID End-->



<!-- 2nd part -->


<!-- Three Post Grid --> 
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 3, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    /*Find the Second item */
    if($i%2 == 0) {
        echo '<a href="'.get_permalink().'" class="col-md-8 block-right portfolio-item">';
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-4 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- Three Post Grid End--> 





<!-- SIX POST GRID -->
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');  
?>
                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                    <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 5, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    if($i%3== 0) {
        echo '<a href="'.get_permalink().'" class="col-md-6 block-right portfolio-item">';;
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-3 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- SIX POST GRID End-->



<!-- Two Post Grid Two--> 
<?php

 $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) );
 while ($mosaics->have_posts()) : $mosaics->the_post();
 $do_not_duplicate[] = $post->ID; 

 $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
?>


                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<!-- Two Post Grid Two End--> 


<!-- 3rd part -->

<!-- Three Post Grid --> 
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 3, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    /*Find the Second item */
    if($i%2 == 0) {
        echo '<a href="'.get_permalink().'" class="col-md-8 block-right portfolio-item">';
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-4 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- Three Post Grid End--> 





<!-- SIX POST GRID -->
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');  
?>
                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                    <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<?php
    $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 5, 'post__not_in' => $do_not_duplicate ) );
    $i = 1;
    while ($mosaics->have_posts()) : $mosaics->the_post();
    $do_not_duplicate[] = $post->ID; 
    $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

    if($i%3== 0) {
        echo '<a href="'.get_permalink().'" class="col-md-6 block-right portfolio-item">';;
        $i = 0;
    }
    else {
        echo'<a href="'.get_permalink().'" class="col-md-3 portfolio-item">';
    }
    
?>
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php   $i++; endwhile; wp_reset_postdata(); ?>
<!-- SIX POST GRID End-->



<!-- Two Post Grid Two--> 
<?php

 $mosaics = new WP_Query( array( 'post_type' => 'portfolio-items','posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) );
 while ($mosaics->have_posts()) : $mosaics->the_post();
 $do_not_duplicate[] = $post->ID; 

 $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
?>


                <a href="<?php echo get_permalink();?>" class="col-md-6 portfolio-item">
                 <div class="portf-item-bg" style="background:url(<?php echo esc_url($large_image_url[0]); ?>) no-repeat center;" /></div>
                    <div class="portf-item-text">
                    <?php the_title( '<span class="portf-item-title">', ',</span>' );?><span class="portf-item-desc">No.<?php echo esc_attr($PortData['port_issue']);?></span>
                    </div>
                </a>

<?php endwhile; wp_reset_postdata(); ?>
<!-- Two Post Grid Two End--> 


            </div><!-- Portfolio Grid -->
        </div>
    <!-- Portfolio Content -->

    </div>
<!-- Portfolio Body End --> 


<?php
//Portfolio List Style
    require get_template_directory() . '/portfolio-list.php';
?>

<?php
get_footer();