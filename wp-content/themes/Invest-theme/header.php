<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts Gooogle Robott -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">


    <!-- fontello.CSS -->
    <link rel="stylesheet" href="/css/fontello.css">

    <?php wp_head(); ?>
       
    <title>Строй Инвест - корпоративный сайт</title>
</head>

<body>
    
    <div  class="container">
        <div class="top-nav">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-auto col-lg-2">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-10">
                    <button class="top-nav_btn">
                       <i class="icon-menu"></i> 
                    </button>

                    <?php wp_nav_menu( array(
                        'menu'            => 'top_menu',
                        'container'       => 'ul',
                        'container_class' => 'top-nav_menu',
                        'container_id'    => '',
                        'menu_class'      => 'top-nav_menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) ); ?>
                    
                </div>
            </div>
        </div>
        <!-- ./top-nav -->