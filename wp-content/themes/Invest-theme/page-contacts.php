<?php
/*
Template Name:Контакты
*/
?>
<!doctype html>
<html lang="ru">

<?php get_header(  ); ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(  ); ?>
            </div>
            <div class="col-lg-8">
                <div class="content">
                <h2><?php the_title( ); ?></h2>

                   <div class="contacts">
                       <p class="contacts-phone">
                           <img src="<?php bloginfo('template_directory')?>/assets/img/contacts/phone.png" alt="Телефон" class="contacts-img">
                           <?php the_field('phone_number',19) ?>
                       </p>
                       <p class="contacts-mail">
                           <img src="<?php bloginfo('template_directory')?>/assets/img/contacts/email.png" alt="Почта" class="contacts-img">
                           <?php the_field('email',19) ?>
                       </p>
                       <a href="#" class="contacts-adress"><?php the_field('address-1',19) ?></a>
                       <a href="#" class="contacts-adress"><?php the_field('address-2',19) ?></a>
                       <a href="#" class="btn btn-primary contacts-btn">Задать вопрос</a>
                       <div class="contacts-social_links">
                           <ul>
                               <li><a href="<?php the_field('Vk',19); ?>"><i class="icon-vkontakte"></i></a></li>
                               <li><a href="<?php the_field('facebook',19); ?>"><i class="icon-facebook"></i></a></li>
                               <li><a href="<?php the_field('instagram',19); ?>"><i class="icon-instagram"></i></a></li>
                           </ul>
                       </div>
                   </div>

                
                </div>
                

    <?php get_footer(  ); ?>
