<?php
/**
 * The main template file
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

    <div class="news-header forerunner-header">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <h1><?php single_post_title(); ?></h1>
              </div>
            </div>
        </div>
    </div>





    <section class="news-section-4">
        <div class="container">
            <div class="row">



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

    
<?php   endwhile; wp_reset_postdata(); ?>




<?php   $mosaics = new WP_Query( array('posts_per_page' => 4, 'post__not_in' => $do_not_duplicate ) ); ?>
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


            </div><!--row content-top -->
            <div class="text-center">
                <a href="./news.html" class="f-btn f-btn-blue">See All Articles</a>
            </div>
        </div>
    </section>
	
<?php
get_footer();
