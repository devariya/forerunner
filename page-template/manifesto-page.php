<?php
/*
Template name: Manifesto
*/
/**
 * The Manifesto Page Template
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
 * $MPTMB = manifesto_page_template_meta_box
 * $backgound =  section_1_bg_img    
*/

    $MPTMB = get_post_meta( get_the_ID(), 'manifesto_page_template_meta_box', true );
?>


<div class="manifesto-page-content">
        <div class="forerunner-header manifesto-header">
            <div class="container">
                <div class="row">
                <?php  if(($MPTMB['mptmb_big_title']) != '') { ?>        
                    <div class="col-md-10">
                        <h1><?php echo esc_attr($MPTMB['mptmb_big_title']);?></h1>
                    </div>
                <?php } ?>
                <?php  if(($MPTMB['mptmb_sub_title']) != '') { ?>        
                    <div class="col-md-10">
                        <h2><?php echo esc_attr($MPTMB['mptmb_sub_title']);?></h2>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>

        <div class="manifesto-content">
          <div class="container">


<?php 

if(($MPTMB['mptmb_manifesto']) != '') { 

    $PTData = $MPTMB['mptmb_manifesto'];

    foreach ($PTData as $PTable ) {
        $PTData = $PTable;


?>
            <div class="row">
              <div class="col-md-4">
                <h1><?php echo esc_attr($PTData['m_title']);?></h1>
                <h3><?php echo esc_attr($PTData['m_role']);?></h3>
              </div>
              <div class="col-md-7">
                <p>
                     <?php echo esc_attr($PTData['m_short_d']);?>
                </p>
              </div>
            </div>
 <?php } }?>


           

          </div>
        </div>

</div>



<?php
get_footer();
