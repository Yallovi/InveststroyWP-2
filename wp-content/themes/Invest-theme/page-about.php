<?php
/*
Template Name:О компании
*/
?>
	<?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
            	<?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <h2> <?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <a href="#" class="btn btn-primary">Узнать больше о компании</a>
                </div><!-- content -->
                <h2>Руководство СтройИнвест</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-1'); ?>" alt="">
                            <h4><?php the_field('owner-name-1'); ?></h4>
                            <p><?php the_field('owner-post-1'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-2'); ?>" alt="">
                            <h4><?php the_field('owner-name-2'); ?></h4>
                            <p><?php the_field('owner-post-2'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-3'); ?>" alt="">
                            <h4><?php the_field('owner-name-3'); ?></h4>
                            <p><?php the_field('owner-post-3'); ?></p>
                        </div>
                    </div>
                </div>
            

    <?php get_footer(); ?>