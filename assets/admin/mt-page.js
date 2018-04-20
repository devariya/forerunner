// this is a basic change function, you can improve it.
;(function ( $, window, document, undefined ) {
    'use strict';
  
    $(document).ready( function() {
  
      $('#page_template').change( function() {
  
        $('#home_page_template_meta_box').hide(); //Home Page Metabox
        $('#manifesto_page_template_meta_box').hide(); //Manifesto Page Metabox
        $('#portfolio_page_template_meta_box').hide();//Portfolio Page Metabox
        $('#team_page_template_meta_box').hide();
        $('#metabox-id-3').hide();
        $('#postdivrich').show();
  
        switch( $( this ).val() ) {
  
        
        //Homepage Page Template
          case 'page-template/home-page.php':
            $('#home_page_template_meta_box').show(); 
            $('#postdivrich').hide();
          break;
        //Manifesto Page Template
          case 'page-template/manifesto-page.php':
            $('#manifesto_page_template_meta_box').show();
            $('#postdivrich').hide();
          break;
        //Portfolio Page Template
          case 'page-template/portfolio-page.php':
            $('#portfolio_page_template_meta_box').show();
            $('#postdivrich').hide();
          break;
        //Team Page Template 
          case 'page-template/team-page.php':
            $('#team_page_template_meta_box').show();
            $('#postdivrich').hide();
          break;
          case 'template-3.php':
            $('#metabox-id-3').show();
          break;
  
          default:
            $('#metabox-id-1').show();
          break;
        }
  
      }).change();
  
    });
  
  })( jQuery, window, document );