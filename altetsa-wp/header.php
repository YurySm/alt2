<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package altetsa
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Yandex.Metrika counter -->
      <script type="text/javascript" >
         (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
         m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)	[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
         (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

         ym(86246164, "init", {
              clickmap:true,
              trackLinks:true,
              accurateTrackBounce:true,
              webvisor:true,
              ecommerce:"dataLayer"
         });
      </script>
      <noscript><div><img src="https://mc.yandex.ru/watch/86246164" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
      <!-- /Yandex.Metrika counter -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo('name'); echo " | "; echo bloginfo('description'); ?></title>
    <meta name="title" content="<?php echo bloginfo('name'); ?>">
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <?php wp_head(); ?>
    <script type="text/javascript">
        var templateUrl = '<?php echo get_bloginfo('template_url');?>';
    </script>
</head>
<body>
    <header class="header<?php
                                if (!is_front_page()) {
                                    ?> contacts__header <?php } ?> ">
        <button class="header__humburger">
            
                <?php
                    if (!is_front_page()) {
                    ?> 
                        <picture>
                            <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/humbB.svg">
                            <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/humb-mob-dark.svg">
                            <img src="../icons/humburger.svg" alt="">
                        </picture> 
                          
                    <?php 
                } else {
                        ?>  
                            <picture>
                                <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/humbB.svg">
                                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/humb-mob.svg">
                                <img src="<?php echo get_bloginfo('template_url');?>/assets/icons/humburger.svg" alt="">
                            </picture>  
                        <?php
                    } ?>
          
        </button>
        <button class="header__close">
                <?php
                    if (!is_front_page()) {
                    ?> 
                       <picture>
                            <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/close.svg">
                            <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/close-mob.svg">
                            <img src="<?php echo get_bloginfo('template_url');?>/assets/icons/close.svg" alt="">
                        </picture>
                          
                    <?php 
                } else {
                        ?>  
                            <picture>
                                <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/close.svg">
                                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/icons/close-mob.svg">
                                <img src="<?php echo get_bloginfo('template_url');?>/assets/icons/close.svg" alt="">
                            </picture>
                        <?php
                    } ?>
            
        </button>
        <a href="<?php echo get_home_url();?>" class="header__logo">
                <?php
                    if (!is_front_page()) {
                    ?> 
                       <picture>
                            <source media="(min-width: 1440px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/header/logoB.svg">
                            <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/header/logo-temp.svg">
                            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/header/logoB.svg" alt="Altesta">
                        </picture>
                          
                    <?php 
                } else {
                        ?>  
                            <picture>
                                <source media="(min-width: 1440px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/header/logoB.svg">
                                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/header/logo-mob.svg">
                                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/header/logoB.svg" alt="Altesta">
                            </picture>
                        <?php
                    } ?>
            
        </a>
        <a href="<?php echo home_url();?>/anketa" class="btn btn__header">
            Let's Work Together
        </a>
        <nav class="header__menu">
                <?php
                    wp_nav_menu( [
                        'menu'            => 'Main',
                        'container'       => false,
                        'menu_class'      => 'header__nav-items',
                        'echo'            => true,
                        'link_before'     => '<b>',
                        'link_after'      => '</b>',
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="header__nav-items">%3$s</ul>',
                        'depth'           => 1
                    ] );
                    
                ?>
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/header/menu-pic.png" alt="меню" class="header__nav-img">
            <h3 class="hero__descr nav__descr">altetsa</h3>
        </nav>
    </header>