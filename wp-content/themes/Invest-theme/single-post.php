	<?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
            	<?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <h2> <?php the_title(); ?></h2>
                    <div class="object-page">
                        <div class="object-page_galery">
                            <!-- <?php the_content(); ?>-->
                        </div>
                        <div class="object-page_text">
                            <p>Площадь: <b><?php the_field('area'); ?></b></p>
                                <p>Назначение: <b><?php the_field('target'); ?></b></p>
                                <p>Стоимость: <b><?php the_field('object_price'); ?></b></p>
                                <p>Описание: <b><?php the_content();?></b></p>
                                <p>Земельный участок № 122 по ул. Сосновая, д.11, с коммуникациями: газ, вода, свет,
                                внутрипоселковые дороги (входят в стоимость).</p>
                                <p>Беспроцентная рассрочка на 3 года</p>
                                <p>Подробнее: <a href="#">лесныеморкваши.рф</a></p>
                                 <a href="#" class="btn btn-primary">Узнать больше о компании</a>
                        </div>
                    </div>                </div><!-- content -->
                
                
    <?php get_footer(); ?>