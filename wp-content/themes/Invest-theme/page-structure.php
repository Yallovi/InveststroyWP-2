<?php
/*
Template Name:Структура 
*/
?>

  <?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8">
                <div class="content">
                <h2><?php the_title(); ?></h2>
                <div class="organization">
                   <div class="row">
                    
                    <?php 
                    $args = array(
                      'sort_order'   => 'ASC',
                      'sort_column'  => 'post_title',
                      'hierarchical' => 1,
                      'child_of'     => 123,
                      'parent'       => -1,
                      'post_type'    => 'page',
                      'post_status'  => 'publish',
                    ); 
                    $pages = get_pages( $args );
                    foreach( $pages as $post ){
                      setup_postdata( $post );
                      ?>

                      <div class="col-md-6">
                          <div class="organization-card">
                              <a href="#"><?php the_title(  ); ?></a>
                              <small>
                                ОГРН <?php the_field('ogrn'); ?> <br> 
                                ИНН <?php the_field('inn'); ?></small>
                              <p><?php the_excerpt(); ?></p>
                          </div>
                      </div>
                      <?php 
                    }  
                    wp_reset_postdata();
                     ?>

                       
                   </div>
                </div>
                </div>
             

    <?php get_footer(); ?>