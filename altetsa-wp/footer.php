<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package altetsa
 */

?>

<?php
	if (!is_front_page()) {
        if(is_page('anketa')) {
            ?>
                <footer class="footer tabs__footer">
                    <div class="footer__wrapper wow animate__animated animate__zoomIn">
                        <div class="footer__item">
                            <h3 class="footer__item_title">Контакты</h3>
                            <p class="footer__item_text">
                                Адрес: Омск. Россия
                                <br><br>
                                Рабочее время: Пн - Пятница. 09.00 - 18.00
                                <br><br>
                                <span>Email: info@altetsa.com, altetsa@yandex.ru </span>
                            </p>
                        </div>

                        <div class="footer__item">
                            <h3 class="footer__item_title">Меню</h3>
                            <span class="footer__item_divider"></span>
                            
                            <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Footer',
                                        'container'       => false,
                                        'menu_class'      => 'footer__item_list',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul class="footer__item_list">%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                        </div>

                        <div class="footer__item">
                            <h3 class="footer__item_title">Поддержка</h3>
                            <span class="footer__item_divider blue"></span>
                            <ul class="footer__item_list">
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Terms of service</a></li>
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Help center</a></li>
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Policies</a></li>
                            </ul>
                        </div>

                        <div class="footer__item">
                            <h3 class="footer__item_title last">Консультация</h3>
                            <ul class="footer__item_list social">
                                <li><a href="https://<?php the_field('telegram'); ?>"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.241656 6.12503C1.87849 5.22909 3.70566 4.48133 5.41287 3.72974C8.34993 2.49871 11.2987 1.289 14.2772 0.162784C14.8567 -0.0291122 15.8979 -0.216777 16 0.636613C15.9441 1.84458 15.7141 3.04547 15.5564 4.24636C15.156 6.88723 14.6932 9.51905 14.2419 12.1512C14.0864 13.028 12.9811 13.4819 12.2739 12.9208C10.5743 11.78 8.86159 10.6503 7.18367 9.48299C6.63403 8.928 7.14371 8.13102 7.6346 7.7347C9.03446 6.36383 10.519 5.19911 11.8457 3.7574C12.2036 2.89862 11.1462 3.62237 10.7974 3.84413C8.88102 5.15645 7.0115 6.54888 4.99099 7.70224C3.95892 8.26679 2.75602 7.78433 1.72441 7.46929C0.799442 7.08875 -0.555976 6.70536 0.241562 6.12509L0.241656 6.12503Z" fill="white"/>
                                    </svg>
                                    </a></li>
                                <li><a href="https://<?php the_field('facebook', 47); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9" fill="none">
                                    <path d="M0.101879 7.58727L3.96502 1.49739C4.57984 0.527059 5.89495 0.28856 6.81881 0.974652L9.89289 3.26489C10.1756 3.47399 10.5636 3.47399 10.8431 3.26162L14.9922 0.131739C15.5446 -0.286451 16.2679 0.373505 15.8997 0.958317L12.0332 7.04493C11.4184 8.01526 10.1033 8.25376 9.17944 7.56767L6.10537 5.27743C5.82262 5.06833 5.43466 5.06833 5.1552 5.28069L1.00602 8.41058C0.453672 8.82877 -0.26964 8.17208 0.101879 7.58727Z" fill="white"/>
                                    </svg></a></li>
                                <li><a href="https://<?php the_field('instagram', 47); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M11.2335 0H4.76649C2.13823 0 0 2.12479 0 4.73652V11.1629C0 13.7746 2.13823 15.8994 4.76649 15.8994H11.2335C13.8618 15.8994 16 13.7746 16 11.1629V4.73652C16 2.12479 13.8617 0 11.2335 0ZM14.3904 11.1629C14.3904 12.8954 12.977 14.2999 11.2335 14.2999H4.76649C3.023 14.2999 1.6096 12.8954 1.6096 11.1629V4.73652C1.6096 3.00397 3.023 1.59948 4.76649 1.59948H11.2335C12.977 1.59948 14.3904 3.00397 14.3904 4.73652V11.1629Z" fill="white"/>
                                    <path d="M8 3.83765C5.7182 3.83765 3.86182 5.68237 3.86182 7.94981C3.86182 10.2173 5.7182 12.062 8 12.062C10.2818 12.062 12.1382 10.2173 12.1382 7.94981C12.1382 5.68235 10.2818 3.83765 8 3.83765ZM8 10.4625C6.60349 10.4625 5.47142 9.33758 5.47142 7.94984C5.47142 6.56211 6.60352 5.43714 8 5.43714C9.39651 5.43714 10.5286 6.56211 10.5286 7.94984C10.5286 9.33755 9.39648 10.4625 8 10.4625Z" fill="white"/>
                                    <path d="M12.1461 4.854C12.6938 4.854 13.1377 4.41285 13.1377 3.86865C13.1377 3.32446 12.6938 2.8833 12.1461 2.8833C11.5985 2.8833 11.1545 3.32446 11.1545 3.86865C11.1545 4.41285 11.5985 4.854 12.1461 4.854Z" fill="white"/>
                                    </svg></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__copy wow animate__animated animate__fadeIn">
                        <p>All Rights Reseved ©2021</p>
                        <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.38627 1.62675C8.21415 0.34419 10.7292 -0.317101 13.0038 0.149711C15.2783 0.616523 16.4511 2.03467 15.6232 3.31722L8.50296 14.348C7.67508 15.6306 5.16005 16.2919 2.88547 15.8251C0.610899 15.3582 -0.561882 13.9401 0.265996 12.6575L7.38627 1.62675Z" fill="#484CE6"/>
                            <path d="M20.4981 1.65214C21.326 0.36958 23.841 -0.291711 26.1156 0.175102C28.3901 0.641914 29.5629 2.06006 28.7351 3.34261L21.6148 14.3734C20.7869 15.656 18.2719 16.3173 15.9973 15.8505C13.7227 15.3836 12.5499 13.9655 13.3778 12.6829L20.4981 1.65214Z" fill="#FFBA00"/>
                        </svg>
                    </div>
                    <img class="footer_bg" src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tabs_footer.png" alt="footer_bg">
                </footer>
            <?php 
        } else {
            ?>
            <footer class="footer">
                <div class="wow animate__animated animate__fadeInDown">
                    <h2 class="footer__title">
                        Мы создаем и поддерживаем крутые проекты 
                            для клиентов по всему миру
                    </h2>
                    <p class="footer__subtitle">Узнайте как увеличить прибыль в вашем E-commerce-проекте</p>
                    <a href="<?php echo home_url();?>/anketa" class="btn footer__btn">Узнать<span>
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.300049 1.4L4.90005 6L0.300049 10.6L1.70005 12L7.70005 6L1.70005 1.66948e-08L0.300049 1.4Z" fill="white"/>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="footer__wrapper wow animate__animated animate__zoomIn">
                    <div class="footer__item">
                        <h3 class="footer__item_title">Контакты</h3>
                        <p class="footer__item_text">
                            Адрес: Омск. Россия
                            <br><br>
                            Рабочее время: Пн - Пятница. 09.00 - 18.00
                            <br><br>
                            <span>Email: info@altetsa.com, altetsa@yandex.ru</span> 
                        </p>
                    </div>
        
                    <div class="footer__item">
                        <h3 class="footer__item_title">Меню</h3>
                        <span class="footer__item_divider"></span>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Footer',
                                        'container'       => false,
                                        'menu_class'      => 'footer__item_list',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul class="footer__item_list">%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                    </div>
        
                    <div class="footer__item">
                        <h3 class="footer__item_title">Поддержка</h3>
                        <span class="footer__item_divider blue"></span>
                        <ul class="footer__item_list">
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Terms of service</a></li>
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Help center</a></li>
                            <li><a href="<?php echo home_url();?>/nashi-politiki">Policies</a></li>
                        </ul>
                    </div>
        
                    <div class="footer__item">
                        <h3 class="footer__item_title last">Консультация</h3>
                        <ul class="footer__item_list social">
                            <li><a href="https://<?php the_field('telegram', 47); ?>"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.241656 6.12503C1.87849 5.22909 3.70566 4.48133 5.41287 3.72974C8.34993 2.49871 11.2987 1.289 14.2772 0.162784C14.8567 -0.0291122 15.8979 -0.216777 16 0.636613C15.9441 1.84458 15.7141 3.04547 15.5564 4.24636C15.156 6.88723 14.6932 9.51905 14.2419 12.1512C14.0864 13.028 12.9811 13.4819 12.2739 12.9208C10.5743 11.78 8.86159 10.6503 7.18367 9.48299C6.63403 8.928 7.14371 8.13102 7.6346 7.7347C9.03446 6.36383 10.519 5.19911 11.8457 3.7574C12.2036 2.89862 11.1462 3.62237 10.7974 3.84413C8.88102 5.15645 7.0115 6.54888 4.99099 7.70224C3.95892 8.26679 2.75602 7.78433 1.72441 7.46929C0.799442 7.08875 -0.555976 6.70536 0.241562 6.12509L0.241656 6.12503Z" fill="white"/>
                                </svg>
                                </a></li>
                            <li><a href="https://<?php the_field('facebook', 47); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9" fill="none">
                                <path d="M0.101879 7.58727L3.96502 1.49739C4.57984 0.527059 5.89495 0.28856 6.81881 0.974652L9.89289 3.26489C10.1756 3.47399 10.5636 3.47399 10.8431 3.26162L14.9922 0.131739C15.5446 -0.286451 16.2679 0.373505 15.8997 0.958317L12.0332 7.04493C11.4184 8.01526 10.1033 8.25376 9.17944 7.56767L6.10537 5.27743C5.82262 5.06833 5.43466 5.06833 5.1552 5.28069L1.00602 8.41058C0.453672 8.82877 -0.26964 8.17208 0.101879 7.58727Z" fill="white"/>
                                </svg></a></li>
                            <li><a href="https://<?php the_field('instagram', 47); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.2335 0H4.76649C2.13823 0 0 2.12479 0 4.73652V11.1629C0 13.7746 2.13823 15.8994 4.76649 15.8994H11.2335C13.8618 15.8994 16 13.7746 16 11.1629V4.73652C16 2.12479 13.8617 0 11.2335 0ZM14.3904 11.1629C14.3904 12.8954 12.977 14.2999 11.2335 14.2999H4.76649C3.023 14.2999 1.6096 12.8954 1.6096 11.1629V4.73652C1.6096 3.00397 3.023 1.59948 4.76649 1.59948H11.2335C12.977 1.59948 14.3904 3.00397 14.3904 4.73652V11.1629Z" fill="white"/>
                                <path d="M8 3.83765C5.7182 3.83765 3.86182 5.68237 3.86182 7.94981C3.86182 10.2173 5.7182 12.062 8 12.062C10.2818 12.062 12.1382 10.2173 12.1382 7.94981C12.1382 5.68235 10.2818 3.83765 8 3.83765ZM8 10.4625C6.60349 10.4625 5.47142 9.33758 5.47142 7.94984C5.47142 6.56211 6.60352 5.43714 8 5.43714C9.39651 5.43714 10.5286 6.56211 10.5286 7.94984C10.5286 9.33755 9.39648 10.4625 8 10.4625Z" fill="white"/>
                                <path d="M12.1461 4.854C12.6938 4.854 13.1377 4.41285 13.1377 3.86865C13.1377 3.32446 12.6938 2.8833 12.1461 2.8833C11.5985 2.8833 11.1545 3.32446 11.1545 3.86865C11.1545 4.41285 11.5985 4.854 12.1461 4.854Z" fill="white"/>
                                </svg></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__copy wow animate__animated animate__zoomIn">
                    <p>All Rights Reseved ©2021</p>
                    <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.38627 1.62675C8.21415 0.34419 10.7292 -0.317101 13.0038 0.149711C15.2783 0.616523 16.4511 2.03467 15.6232 3.31722L8.50296 14.348C7.67508 15.6306 5.16005 16.2919 2.88547 15.8251C0.610899 15.3582 -0.561882 13.9401 0.265996 12.6575L7.38627 1.62675Z" fill="#484CE6"/>
                        <path d="M20.4981 1.65214C21.326 0.36958 23.841 -0.291711 26.1156 0.175102C28.3901 0.641914 29.5629 2.06006 28.7351 3.34261L21.6148 14.3734C20.7869 15.656 18.2719 16.3173 15.9973 15.8505C13.7227 15.3836 12.5499 13.9655 13.3778 12.6829L20.4981 1.65214Z" fill="#FFBA00"/>
                    </svg>
                </div>
            </footer>
            <?php
        }
    }
    ?>


<?php
    wp_footer(); 
?>

</body>
</html>
