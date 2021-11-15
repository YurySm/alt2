<?php
/**
 * Template Name: О нас
 *
 * @package altetsa
 */

get_header();
?>
    <section class="about">
        <div class="title-group">
            <span class="title-shadow">about us</span>
            <h1 class="title"><span>о</span> нас</h1>
            <span class="divider"></span>
            <h2 class="subtitle">performance</h2>
        </div>

        <div class="contacts__wrapper about__wrapper">
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/about-img.png" alt="" class="contacts__img about__img wow animate__animated animate__fadeInBottomLeft">
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/about-img-mob.png" alt="about" class="about__img_mob">
            <div class="contacts__form-wrapp about__text-wrapper wow animate__animated animate__fadeInBottomRight">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Наша студия
                </h2>
                <p class="contacts__descr about__descr">
                    Добро пожаловать в Altetsa Group – международное агентство, использующее самые современные технологические решения в мире <br> E-commerce. Мы давно зарекомендовали себя как профессиональная команда опытных веб - дизайнеров и разработчиков, которые сосредоточены на предоставлении высококачественных услуг в области программирования и web-дизайна. Благодаря большому накопленному опыту, мы поможем вам создать идеальный e-commerce проект.
                </p>

                <p class="contacts__descr about__descr">
                    Мы развиваем ваш бизнес с помощью универсальной E-commerce платформы Shopify. Благодаря интеграции с социальными сетями и расширенной настройке вы станете ближе к своей целевой аудитории. Именно поэтому Shopify позволяет вам достаточно быстро достигать ваших бизнес целей.
                    Наша страстная и преданная команда дизайнеров и разработчиков создаст потрясающий дизайн для вашего сайта, внедряя новейшие технологии и оптимальные решения.
                </p>
            </div>
        </div>


        <div class="strategy">
            <div class="contacts__form-wrapp about__text-wrapper wow animate__animated animate__fadeInUp">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Стратегия и разработка
                </h2>
                <p class="contacts__descr strategy__descr">
                    Мы создаем язык общения для вашей бизнес-стратегии и разработки продукта, который может превратить миллионы посетителей вашего сайта в постоянных клиентов.
                </p>
            </div>
            <div class="strategy__items">
                <div class="strategy__item strategy__item_1 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                    <h3 class="strategy__item_title"><span>Сначала проектируем</span></h3>
                    <p class="strategy__item_text strategy__item_text_1">
                        Люди игнорируют дизайн, который не гармонирует с основными задачами сайта. Мы разрабатываем привлекательный дизайн, который, в первую очередь, реализует главную задачу – продажа товара. Превратите свой сайт во что-то, что понравится вам и вашим клиентам. 
                    </p>
                </div>

                <div class="strategy__item strategy__item_2 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                    <h3 class="strategy__item_title">Планируем процессы</h3>
                    <p class="strategy__item_text">
                        Запуск и координация всех процессов электронной коммерции с реальными результатами. С первого дня мы поэтапно реализуем ваши приоритетные задачи.
                    </p>
                </div>

                <div class="strategy__item strategy__item_3 wow animate__animated animate__fadeInUp" data-wow-duration="2.5s">
                    <h3 class="strategy__item_title">Становимся партнерами</h3>
                    <p class="strategy__item_text strategy__item_text_3">
                        Мы придерживаемся подхода, ориентированного на долгосрочное сотрудничество. Наша команда готова воплотит в жизнь любую вашу бизнес-идею. 
                    </p>
                </div>
            </div>
        </div>

        <div class="team">
            <div class="contacts__wrapper team__wrapper">
                <picture class="contacts__img team__img">
                    <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/about/team-img.png">
                    <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/about/team-bg-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/team-bg-mob.png" alt="team" >
                </picture>
                <div class="contacts__form-wrapp team__text-wrapper wow animate__animated animate__fadeInBottomRight">
                    <div class="contacts__form-wrapp-title team__wrapp-title">Altetsa</div>
                    <h2 class="contacts__title">
                        Одна команда - одна цель 
                    </h2>
                    <p class="contacts__descr team__descr">
                        Мы способны создать элегантный сайт для вашего бизнеса с помощью потрясающего веб-дизайна и передовых веб-технологий. Реализуйте свой бизнес-план с помощью инновационных  методов веб-разработки. Мы дадим возможность вашей маркетинговой идее достичь целевой аудитории удобным для вас способом.
                    </p>
                    <ul class="services__items">
                        <li class="services__item team__item">
                            <span class="services__item-title">
                                Креативные решения 
                            </span>
                            <p class="contacts__descr mt-19 team__descr">
                                Мы верим в то, что придумываем оригинальные идеи и превращаем их в цифровую работу, которая является одновременно инновационной и интерактивной. Мы - команда профессиональных разработчиков, вдохновленных творчеством и движимых успехом клиентов
                            </p>
                        </li>
    
                        <li class="services__item team__item">
                            <span class="services__item-title">
                                Создано лучшими
                            </span>
                            <p class="contacts__descr mt-19 team__descr">
                                Мы опытное и инновационное агентство по разработке. Наша команда хорошо разбирается во всех аспектах разработки, дизайна, поисковой оптимизации, оптимизации конверсии и во многом другом.
                                Мы делаем то, что делают многие, просто делаем это лучше.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/circli-lt.png" alt="circle" class="circle">
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/about-top.png" alt="background" class="bg-top">
            <img src="<?php echo get_bloginfo('template_url');?>/assets/img/about/bg-mid.png" alt="background" class="bg-mid">
    </section>



<?php
get_footer();