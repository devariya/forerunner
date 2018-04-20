<!-- Portfolio list View --> 
  <div class="portfolio-content">
          <div class="container">
            <div class="row">
              
              <div class="col">

<!-- # -->
                <div>
                  <div class="portf-list-header"><strong>#</strong></div>
                    <?php
                        $letter = 'hash';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- # End-->
<!-- A -->
                <div>
                  <div class="portf-list-header"><strong>A</strong></div>
                    <?php
                        $letter = 'A';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- A End-->  
<!-- B -->
                <div>
                  <div class="portf-list-header"><strong>B</strong></div>
                    <?php
                        $letter = 'B';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- B End-->
<!-- C -->
                <div>
                  <div class="portf-list-header"><strong>C</strong></div>
                    <?php
                        $letter = 'C';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- C End--> 
<!-- D -->
                <div>
                  <div class="portf-list-header"><strong>D</strong></div>
                    <?php
                        $letter = 'D';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- D End-->  
<!-- E -->
                <div>
                  <div class="portf-list-header"><strong>E</strong></div>
                    <?php
                        $letter = 'E';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- E End-->  
<!-- F -->
                <div>
                  <div class="portf-list-header"><strong>F</strong></div>
                    <?php
                        $letter = 'F';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- F End-->  
<!-- G -->
                <div>
                  <div class="portf-list-header"><strong>G</strong></div>
                    <?php
                        $letter = 'G';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- G End-->  
<!-- H -->
                <div>
                  <div class="portf-list-header"><strong>H</strong></div>
                    <?php
                        $letter = 'H';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- H End--> 
<!-- I -->
                <div>
                  <div class="portf-list-header"><strong>I</strong></div>
                    <?php
                        $letter = 'I';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- I End-->   
<!-- J -->
                <div>
                  <div class="portf-list-header"><strong>J</strong></div>
                    <?php
                        $letter = 'J';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- J End-->  
<!-- K -->
                <div>
                  <div class="portf-list-header"><strong>K</strong></div>
                    <?php
                        $letter = 'K';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- K End-->  
              </div><!-- Col End -->
                <div class="col">
<!-- L -->
                <div>
                  <div class="portf-list-header"><strong>L</strong></div>
                    <?php
                        $letter = 'L';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- L End-->  
<!-- M -->
                <div>
                  <div class="portf-list-header"><strong>M</strong></div>
                    <?php
                        $letter = 'M';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- M End-->  
<!-- N -->
                <div>
                  <div class="portf-list-header"><strong>N</strong></div>
                    <?php
                        $letter = 'N';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- N End-->  
<!-- O -->
                <div>
                  <div class="portf-list-header"><strong>O</strong></div>
                    <?php
                        $letter = 'O';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- O End-->  
<!-- P -->
                <div>
                  <div class="portf-list-header"><strong>P</strong></div>
                    <?php
                        $letter = 'P';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- P End-->  
<!-- Q -->
                <div>
                  <div class="portf-list-header"><strong>Q</strong></div>
                    <?php
                        $letter = 'Q';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- Q End-->  
<!-- R -->
                <div>
                  <div class="portf-list-header"><strong>R</strong></div>
                    <?php
                        $letter = 'R';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- R End-->  
<!-- S -->
                <div>
                  <div class="portf-list-header"><strong>S</strong></div>
                    <?php
                        $letter = 'S';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- S End-->  
<!-- T -->
                <div>
                  <div class="portf-list-header"><strong>T</strong></div>
                    <?php
                        $letter = 'T';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- T End-->   
<!-- U -->
                <div>
                  <div class="portf-list-header"><strong>U</strong></div>
                    <?php
                        $letter = 'U';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- U End-->  
<!-- V -->
                <div>
                  <div class="portf-list-header"><strong>V</strong></div>
                    <?php
                        $letter = 'V';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- V End-->  
<!-- W -->
                <div>
                  <div class="portf-list-header"><strong>W</strong></div>
                    <?php
                        $letter = 'W';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- W End-->  
<!-- X -->
                <div>
                  <div class="portf-list-header"><strong>X</strong></div>
                    <?php
                        $letter = 'X';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- X End-->  
<!-- X -->
                <div>
                  <div class="portf-list-header"><strong>X</strong></div>
                    <?php
                        $letter = 'X';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- X End-->  
<!-- Y -->
                <div>
                  <div class="portf-list-header"><strong>Y</strong></div>
                    <?php
                        $letter = 'Y';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- Y End-->  
<!-- Z -->
                <div>
                  <div class="portf-list-header"><strong>Z</strong></div>
                    <?php
                        $letter = 'Z';
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'tagportifolio',
                                    'field' => 'slug',
                                    'terms' => array($letter)
                                ),
                            ),
                            'post_type' => 'portfolio-items',
                            'posts_per_page' => -1
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                $term = $query->queried_object;
                                while ( $query->have_posts() ) : $query->the_post();
                                $PortData = get_post_meta( get_the_ID(), 'portfolio_items_post_type_meta_box', true );
                                echo'
                                    <div>
                                        <a href="'.get_permalink().'">
                                        <span class="portf-list-item-title">'.get_the_title().',</span>
                                        <span class="portf-list-item-desc">No .'.esc_attr($PortData['port_issue']).'</span>
                                        </a>
                                    </div>
                                ';
                            endwhile;
                            }
                            //RESET YOUR QUERY VARS
                            wp_reset_query();
                    ?>
                </div>
<!-- Z End-->  
               </div><!-- Col End -->
          </div>
        </div>
    </div>
<!-- Portfolio list View End--> 