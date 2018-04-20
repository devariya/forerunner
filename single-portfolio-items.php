<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Forerunner
 */

get_header('portfolio');
?>

<?php 
/*
 *Metabox value
 * $PortData = portfolio_page_template_meta_box
 * $large_image_url = Featured Image
*/
$PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');  
$checkboxes = $PortData['port_status'];

?>
  <!--==================== 1 ====================-->
  <section class="single-project-section-1 single-project-banner">
        <div class="single-project-section-1-inner" style="background-image:url(<?php echo esc_url($large_image_url[0]); ?>);">
            <div class="container">
                <?php the_title( '<h2>', ',</h2>' );?>
                <h2><?php echo esc_attr($PortData['port_issue']);?></h2>
            </div>
        </div>
    </section>
    <!--==================== 2 ====================-->
    <?php if($PortData['port_intro_title'] != '') { ?>
        <section class="single-project-section-2">
            <div class="container text-center">
                <h1>
                    <?php echo esc_attr($PortData['port_intro_title']);?>
                </h1>
            </div>
        </section>
    <?php } ?>
    <!--==================== 3 ====================-->
    <section class="single-project-section-3">
        <div class="container">
            <div class="row">
            <?php if($PortData['port_img_url'] != '') { ?>
                <div class="col-md-6">
                        <img src="<?php echo esc_url($PortData['port_img_url']);?>" alt=" <?php the_title();?>">
                </div>
            <?php } ?>
                <div class="col-md-6">
                    <div class="text-wrap">
                <?php if($PortData['port_main_title'] != '') { ?>
                    <h2>
                        <?php echo esc_attr($PortData['port_main_title']);?>
                    </h2>
                <?php } ?>
                <?php if($PortData['port_main_desc'] != '') { ?>
                    <p>
                        <?php echo esc_attr($PortData['port_main_desc']);?>
                    </p>
                <?php } ?>
                <?php if($PortData['port_founder_name'] != '') { ?>
                    <p class="founder"><strong>Founder:</strong> <?php echo esc_attr($PortData['port_founder_name']);?></p>
                <?php } ?>
                <?php if($PortData['port_location'] != '') { ?>
                    <p class="location"><strong>Location:</strong> <?php echo esc_attr($PortData['port_location']);?></p>
                <?php } ?>
                <?php if($PortData['port_status'] != '') { ?>
                    <p class="location"><strong>Status:</strong> <?php 
                                                                        foreach ($checkboxes as $checkbox) {
                                                                           
                                                                            echo $checkbox;
                                                                            //echo $checkbox.", ";
                                                                            //echo implode(', ', $checkboxes);
                                                                        }
                                                                ?>
                    </p>
                <?php } ?>
                <?php if($PortData['port_sold_to'] != '') { ?>
                    <p class="location"><strong>Status:</strong> <?php echo esc_attr($PortData['port_sold_to']);?>
                    </p>
                <?php } ?>
                
                <?php if($PortData['port_url'] != '') { ?>                
                    <a href="<?php echo esc_url($PortData['port_url']);?>" class="f-btn f-btn-blue">Visit Website</a>
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



   <section class="single-project-section-5">
      <div class="container">
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
              <a href="#" class="f-btn f-btn-blue">
                  See More
              </a>
            </div>
        </div>
      </div>
    </section>

    <!--==================== 4 ====================-->
<?php 
    $prv_post = get_previous_post(); // For Previous post
    $next_post = get_next_post();  // For Next Post
?>
    <section class="single-project-section-4">
        <div class="single-project-navigation clearfix">

<?php if(!empty($prv_post)) { 
        $prv_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($prv_post->ID), 'large'); // Previous Post Featured Image
        $PrvMData = get_post_meta( $prv_post->ID, 'portfolio_items_post_type_meta_box', true ); // Previous Metabox Data
?>
            <a href="<?php echo esc_url(get_permalink($prv_post->ID )); ?>" class="single-project-item">
                <div class="single-project-item-bg prev-project" style="background:url(<?php echo esc_url($prv_image_url[0]);?>) no-repeat center;"></div>
            </a>

<?php }

else{
    echo'<a href="#" class="single-project-item">
                <div class="single-project-item-bg prev-project"></div>
        </a>';
}
?>

<?php if(!empty($next_post)) { 
        $next_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'large'); // Next Post Featured Image
        $NextMData = get_post_meta( $next_post->ID, 'portfolio_items_post_type_meta_box', true ); // Next Metabox Data  
    ?>

            <a href="<?php echo esc_url(get_permalink($next_post->ID )); ?>" class="single-project-item">
                <div class="single-project-item-bg next-project" style="background:url(<?php echo esc_url($next_image_url[0]);?>) no-repeat center;"></div>
            </a>


<?php } ?>





        </div>

        <div class="container">
          <div class="row">



<?php if(!empty($prv_post)) { 
        $prv_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($prv_post->ID), 'large'); // Previous Post Featured Image
        $PrvMData = get_post_meta( $prv_post->ID, 'portfolio_items_post_type_meta_box', true ); // Previous Metabox Data
?>
            <div class="col-6">
                <span class="single-project-item-title"><?php echo esc_attr(get_the_title($prv_post->ID ))?></span>
                <span class="single-project-item-desc"> No. <?php echo esc_attr($PrvMData['port_issue']);?></span>
            </div>

<?php }
else{
    echo'<div class="col-6">
                <span class="single-project-item-title"></span>
                <span class="single-project-item-desc"></span>
        </div>';
} 
?> 
         
<?php if(!empty($next_post)) { 
        $next_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'large'); // Next Post Featured Image
        $NextMData = get_post_meta( $next_post->ID, 'portfolio_items_post_type_meta_box', true ); // Next Metabox Data  
    ?>

            <div class="col-6">
                <span class="single-project-item-title"><?php echo esc_attr(get_the_title($next_post->ID ))?></span>
                <span class="single-project-item-desc"> No. <?php echo esc_attr($NextMData['port_issue']);?></span>
            </div>
<?php } ?>

          </div>
        </div>
    </section>





<?php
get_footer();