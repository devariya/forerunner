<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Home Page Template Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'home_page_template_meta_box',
  'title'     => 'HomePage Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: Slider Section
    array(
      'name'  => 'section_1',
      'title' => 'Slider Section',
      'icon'  => 'fa fa-angle-down',

      // begin: fields
      'fields' => array(

/*
        //home-section-1 background-image #section_1_bg_img
        array(
          'id'    => 'section_1_bg_img',
          'type'  => 'background',
          'title' => 'Background Image',
          'desc'  => 'Upload Home Section One Background Image'
        ),
*/
        //section_1_bg_slider
        array(
          'id'              => 'section_1_bg_slider',
          'type'            => 'group',
          'title'           => 'Background Slider',
          'button_title'    => 'Add New Slide',
          'accordion_title' => 'Add New Slide',
          'fields'          => array(
            array(
              'id'    => 'upload_slide_bg_img',
              'type'  => 'upload',
              'title' => 'Upload Slide Background Image',
            ),
            array(
              'id'    => 'section_1_title',
              'type'  => 'text',
              'title' => 'Top Title',
              'desc'  => 'Example: Glossier &#8211; Investment No. 30'
            ),
            array(
              'id'    => 'section_1_opacity',
              'type'  => 'text',
              'title' => 'Opacity',
              'desc'  => 'Example: First Slide Value 1, other slide Value 0'
            ),

          ),
        ),



        // section_1_title
        /*
        array(
          'id'    => 'section_1_title',
          'type'  => 'text',
          'title' => 'Top Title',
          'desc'  => 'Example: Glossier &#8211; Investment No. 30'
        ),
        */

        // section_1_main_title
        array(
          'id'    => 'section_1_main_title',
          'type'  => 'text',
          'title' => 'Main Title',
          'desc'  => 'Example: We Are Forerunner'
        ),

        // section_1_main_subtitle
        array(
          'id'    => 'section_1_main_subtitle',
          'type'  => 'textarea',
          'title' => 'Sub Title',
          'desc'  => 'Example: We Champion the Companies Who Rewrite the Rules of Culture'
        ),





      ), // end: fields
    ), // end: Slider Section

    // begin: What We Do
    array(
      'name'  => 'section_2',
      'title' => 'What We Do Section',
      'icon'  => 'fa fa-angle-down',
      'fields' => array(



        //home-section-1 background-image #section_1_bg_img
        array(
          'id'    => 'section_2_bg_img',
          'type'  => 'background',
          'title' => 'Background Image',
          'desc'  => 'Upload Home Section One Background Image'
        ),

        //Forerunner Logo
        array(
          'id'    => 'section_2_logo',
          'type'  => 'upload',
          'title' => 'Upload Logo',
          'desc'  => 'Upload Forerunner logo',
          'default' =>  get_template_directory_uri().'/assets/svg/forerunner.svg',
        ),


        // section_2_main_title
        array(
          'id'    => 'section_2_main_title',
          'type'  => 'text',
          'title' => 'Main Title',
          'desc'  => 'Example: What We Do'
        ),

        // section_2_main_subtitle
        array(
          'id'    => 'section_2_main_subtitle',
          'type'  => 'textarea',
          'title' => 'Sub Title',
          'desc'  => 'Example: We partner with early state entrepreneurs who challenge industry norms. Who upend entire categories. Who provoke unseen shifts.'
        ),


        //serction_2_p_url
        array(
          'id'    => 'serction_2_p_url',
          'type'  => 'text',
          'title' => 'Philosophy Url',
        ),       

      ),// end: fields
    ),// end: What We Do


    // begin: Our Portfolio
    array(
      'name'  => 'section_3',
      'title' => 'Our Portfolio',
      'icon'  => 'fa fa-angle-down',
      'fields' => array(

        // section_3_first_paragraph
        array(
          'id'    => 'section_3_first_paragraph',
          'type'  => 'textarea',
          'title' => 'First Paragraph',
          'desc'  => 'Example: We partner with those who challenge industry norms — Those who upend entire categories '
        ),

        // section_3_second_paragraph
        array(
          'id'    => 'section_3_second_paragraph',
          'type'  => 'textarea',
          'title' => 'Second Paragraph',
          'desc'  => 'Example: Because true transformation happens when we transcend commerce in a way that reshapes the world at large. When we lead the leaders that define each generation. When we champion those who rewrite the rules of culture  '
        ),


        //serction_3_portfolio_url
        array(
          'id'    => 'serction_3_portfolio_url',
          'type'  => 'text',
          'title' => 'Our Portfolio Url',
        ),    

      ),// end: fields
    ), // end: Our Portfolio


    // begin: Latest News
    array(
      'name'  => 'section_4',
      'title' => 'Latest News',
      'icon'  => 'fa fa-angle-down',
      'fields' => array(

        // section_4_title
        array(
          'id'    => 'section_4_title',
          'type'  => 'text',
          'title' => 'Latest News',
          'desc'  => 'Example: Latest News'
        ),

        //serction_4_news_url
        array(
          'id'    => 'serction_3_news_url',
          'type'  => 'text',
          'title' => 'News Page Url',
        ),         
      
        
      ),// end: fields
    ),// end: Latest News

    // begin: Newsletter
    array(
      'name'  => 'section_5',
      'title' => 'Newsletter',
      'icon'  => 'fa fa-angle-down',
      'fields' => array(

      ),// end: fields
    ),// end: Newsletter    
  ),
);

// -----------------------------------------
// Manifesto Page Template Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'manifesto_page_template_meta_box',
  'title'     => 'Manifesto Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => '',
      'fields' => array(


        array(
          'id'            => 'mptmb_big_title',
          'type'          => 'text',
          'title' => 'Big Title',
          'attributes'    => array(
            'placeholder' => 'Manifesto'
          )
        ),

        array(
          'id'            => 'mptmb_sub_title',
          'type'          => 'textarea',
          'title' => 'Page Sub Title',
          'attributes'    => array(
            'placeholder' => 'We champion the companies who rewrite the rules of culture.'
          )
        ),

        array(
          'id'              => 'mptmb_manifesto',
          'type'            => 'group',
          'title'           => __('Manifesto', 'mtlng'), 
          'button_title'    => __('Add New', 'mtlng'), 
          //'accordion_title' => 'Audio Track',
          'fields'          => array(

                    array(
                      'id'            => 'm_title',
                      'type'          => 'text',
                      'title' => 'Title',
                    ),

                    array(
                      'id'            => 'm_role',
                      'type'          => 'text',
                      'title' => 'Role',
                    ), 

                    array(
                      'id'            => 'm_short_d',
                      'type'          => 'textarea',
                      'title' => 'Short Details',
                    ),            

          ),
        ),       

      ),
    ),

  ),
);

// -----------------------------------------
// Portfolio Page Template Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'portfolio_page_template_meta_box',
  'title'     => 'Portfolio Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => '',
      'fields' => array(


        array(
          'id'            => 'pptmb_sub_title',
          'type'          => 'textarea',
          'title' => 'Page Sub Title',
          'attributes'    => array(
            'placeholder' => 'We invest in influential companies that have the power to fuel cultural transformation. We partner with those who challenge norms and convention, and inspire others to do the same.'
          )
        ),

     

      ),
    ),

  ),
);

// -----------------------------------------
// Team Page Template Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'team_page_template_meta_box',
  'title'     => 'Team Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => '',
      'fields' => array(


        array(
          'id'            => 'teamptmb_sub_title',
          'type'          => 'textarea',
          'title' => 'Page Sub Title',
          'attributes'    => array(
            'placeholder' => 'We invest in influential companies that have the power to fuel cultural transformation. We partner with those who challenge norms and convention, and inspire others to do the same.'
          )
        ),

     

      ),
    ),

  ),
);


// -----------------------------------------
// News Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'news_post_meta_box',
  'title'     => 'Custom News Options',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'fields' => array(

        array(
          'id'    => 'brand_name',
          'type'  => 'text',
          'title' => 'Brand Name',
          'attributes'    => array(
            'placeholder' => 'Forerunner'
          )
        ),

        array(
          'id'    => 'publication_name',
          'type'  => 'text',
          'title' => 'Publication Name',
          'attributes'    => array(
            'placeholder' => 'Fortune Magazine'
          )
        ),

        array(
          'id'    => 'news_url',
          'type'  => 'text',
          'title' => 'Link Url',
        ),



      ),
    ),

  ),
);

// -----------------------------------------
// Portfolio PostType Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'portfolio_items_post_type_meta_box',
  'title'     => 'Company Options',
  'post_type' => 'portfolio-items',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'fields' => array(

        array(
          'id'    => 'port_issue',
          'type'  => 'text',
          'title' => 'Item Issue NO',
          'attributes'    => array(
            'placeholder' => '68'
          )
        ),

        array(
          'id'            => 'port_intro_title',
          'type'          => 'textarea',
          'title' => 'Tagline',
          'attributes'    => array(
            'placeholder' => 'An eyewear company that sought to throw the status quo out the window. Warby Parker revolutionized the way we shop online. '
          )
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Use those fields for project single page',
        ),

        
        array(
          'id'    => 'port_img_url',
          'type'  => 'upload',
          'title' => 'Thumbnail',
        ),

        array(
          'id'    => 'port_main_title',
          'type'  => 'text',
          'title' => '2-3 Words',
        ),

        array(
          'id'            => 'port_main_desc',
          'type'          => 'textarea',
          'title' => 'Description',
        ),

        array(
          'id'    => 'port_founder_name',
          'type'  => 'text',
          'title' => 'Founder Name',
        ),

        array(
          'id'    => 'port_location',
          'type'  => 'text',
          'title' => 'Location',
        ),

        array(
          'id'       => 'port_status',
          'type'     => 'checkbox',
          'title'    => 'Status',
          'options'  => array(
            'Active'  => 'Active',
            'Exited'   => 'Exited',
          ),
        ),

        array(
          'id'    => 'port_sold_to',
          'type'  => 'text',
          'title' => 'Sold To',
          'info' => 'Sold To Apple Inc',
          //'dependency'   => array( 'port_status_sold_to', '==', 'true' ),
        ),   

        array(
          'id'    => 'port_url',
          'type'  => 'text',
          'title' => 'Website Url',
        ),


      ),
    ),

  ),
);



// -----------------------------------------
// Team PostType Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'teams_mt_post_type_meta_box',
  'title'     => 'Member Options',
  'post_type' => 'teams_mt',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'fields' => array(

        array(
          'id'    => 'tm_first_name',
          'type'  => 'text',
          'title' => 'First Name',
          'info'  => 'Example: Kirsten',
        ),

        array(
          'id'    => 'tm_last_name',
          'type'  => 'text',
          'title' => 'Last Name',
          'info'  => 'Example: Green',
        ),

        array(
          'id'    => 'tm_job_title',
          'type'  => 'text',
          'title' => 'Job Title',
          'info'  => 'Example: General Partner',
        ),

        array(
          'id'    => 'tm_img_url',
          'type'  => 'upload',
          'title' => 'Member Image',
        ),
        
        array(
          'id'            => 'tm_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 10,
            'tinymce'       => true,
            'media_buttons' => false,
          )
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Member Social Network Profile Links',
        ),

        array(
          'id'    => 'tm_twitter_url',
          'type'  => 'text',
          'title' => 'Twitter Profile link',
          'info'  => 'Example: https://twitter.com/metrothemes',
        ),

        array(
          'id'    => 'tm_instagram_url',
          'type'  => 'text',
          'title' => 'Instagram Profile link',
          'info'  => 'Example: https://www.instagram.com/fgmstudio/',
        ),

        array(
          'id'    => 'tm_linkedin_url',
          'type'  => 'text',
          'title' => 'LinkedIn Profile link',
          'info'  => 'Example: https://www.linkedin.com/in/coltontbrown',
        ),

        array(
          'id'    => 'tm_medium_url',
          'type'  => 'text',
          'title' => 'Medium Profile link',
          'info'  => 'Example: https://medium.com/@metrothemes',
        ),

      ),
    ),

  ),
);


CSFramework_Metabox::instance( $options );
