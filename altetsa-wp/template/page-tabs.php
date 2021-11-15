<?php
/**
 * Template Name: Анкеты
 *
 * @package altetsa
 */

get_header();
?>

<section class="tabs">
        <div class="title-group wow animate__animated animate__fadeInDown animate__repeat-1">
            <span class="title-shadow">Feedback</span>
            <h1 class="title"><span>Напишите</span> нам</h1>
            <span class="divider"></span>
            <h2 class="subtitle">What do you need help with?</h2>
        </div>

        <div class="tabs__container wow animate__animated animate__zoomIn">
            <div class="tabs__btns ">
                <button class="tabs__btn tabs__btn_active">
                    Создание магазина<span> с нуля</span>
                </button>

                <button class="tabs__btn">
                    <span>Контент и </span>UX-дизайн 
                </button>

                <button class="tabs__btn">
                    Маркетинг<span> и поддержка</span>
                </button>

                <button class="tabs__btn">
                    Разработка приложений<span> (APP)</span>
                </button>
            </div>

            <div class="tabs__content">
                <picture class="tabs__img">
                    <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-1.png">
                    <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-1-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-1.png" alt="tab-1">
                </picture>

                <div class="tabs__form-wrapper">
                    <div class="tabs__form">
                        <?php echo do_shortcode('[contact-form-7 id="66" title="Создание магазина с нуля"]') ?>
                    </div>
                </div>
            </div>

            <div class="tabs__content">
                <picture class="tabs__img">
                    <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-2.png">
                    <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-2-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-2.png" alt="tab-2">
                </picture>

                <div class="tabs__form-wrapper">
                    <div class="tabs__form">
                        <?php echo do_shortcode('[contact-form-7 id="67" title="Контент и UX-дизайн"]') ?>
                    </div>
                </div>
            </div>

            <div class="tabs__content">
                <picture class="tabs__img tab-3">
                    <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-3.png">
                    <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-3-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-3.png" alt="tab-3">
                </picture>
                <div class="tabs__form-wrapper">
                   <div class="tabs__form">
                        <?php echo do_shortcode('[contact-form-7 id="69" title="Маркетинг и поддержка"]') ?>
                    </div>
                </div>
            </div>

            <div class="tabs__content">
                <picture class="tabs__img">
                    <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-4.png">
                    <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-4-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/tab-4.png" alt="tab-4">
                </picture>
                <div class="tabs__form-wrapper">
                    <div class="tabs__form">
                        <?php echo do_shortcode('[contact-form-7 id="77" title="Разработка приложений"]') ?>
                    </div>



                    <!-- <form action="#" class="tabs__form">
                        <label for="user_name">Представьтесь<span>*</span></label>
                        <input type="text" id="user_name" placeholder="Ваше имя">

                        <label for="user_phone">Ваши контакты<span>*</span></label>
                        <input type="tel" id="user_phone" placeholder="Номер телефона">

                        <label for="user_email">E-mail<span>*</span></label>
                        <input type="email" id="user_email">

                        <label for="user_company">Название компании</label>
                        <input type="text" id="user_company">
                       

                        <label for="user_site">Ваш сайт</label>
                        <input type="text" id="user_site" placeholder="https://">


                        <label for="user_works">Описание<span>*</span></label>
                        <textarea type="text" id="user_works" placeholder="Расскажите какие функции должно выполнять APP. Какие задачи оно должно решать?"></textarea>

                        <label for="user_coments">Ваши комментарии</label>
                        <textarea type="text" id="user_coments" placeholder="Любая информация, которая будет актуальна для нас"></textarea>



                        <button class="btn tabs__form_btn">Отправить</button>
                    </form> -->
                </div>
            </div>



            <div class="tabs__content_ok">
                <button class="ok__close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <rect x="0.914062" width="21.3344" height="1.29299" transform="rotate(45 0.914062 0)" fill="#989898"/>
                        <rect y="15.0857" width="21.3344" height="1.29299" transform="rotate(-45 0 15.0857)" fill="#989898"/>
                    </svg>
                </button>
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/ok__img.png" alt="" class="ok__img">
                <h2 class="ok__title">
                    Ваш запрос отправлен!
                </h2>
                <p class="ok__subtitle">
                    В ближайшее время мы с Вами свяжемся 🙂 <br>
                            Будьте на связи 🎉
                </p>
            </div>
        </div>

        <div class="tabs__company wow animate__animated wow animate__animated animate__fadeInRightBig">
            <picture>
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/parner.svg">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/parner-mob.svg">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/parner.svg" alt="parner">
            </picture>

            <picture>
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/google.svg">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/google-mob.svg">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/google.svg" alt="parner">
            </picture>
            
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/plus.svg" alt="plus" class="plus">

            <picture>
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/instagram.svg">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/inst-mob.svg">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/company/instagram.svg" alt="parner">
            </picture>
        </div>

        <!-- <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/group-lt.png" alt="" class="group-lt">
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/tabs/group-rt.png" alt="" class="group-rt"> -->
    </section>


    <?php
get_footer();