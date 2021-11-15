<?php
/**
 * Template Name: Услуги
 *
 * @package altetsa
 */

get_header();
?>
<section class="services">
        <div class="title-group animate__animated animate__fadeInDown animate__repeat-1">
            <span class="title-shadow">services</span>
            <h1 class="title"><span>наши </span>услуги</h1>
            <span class="divider"></span>
            <h2 class="subtitle">our skills</h2>
        </div>

        <div class="contacts__wrapper services__wrapper">
            <div class="contacts__form-wrapp services__text-wrapper wow animate__animated animate__fadeInBottomLeft">
                <div class="contacts__form-wrapp-title services__wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Наши услуги
                </h2>
                <p class="contacts__descr services__descr">
                    Мы консультируем, проектируем и разрабатываем успешные решения в области E-commerce. Мы разрабатываем дизайн не только для того, чтобы ваш бренд выглядел профессионально, но и для того, чтобы бы вместе с вами достигать коммерческих целей.
                </p>
                <ul class="services__items">
                    <li class="services__item">
                        <span class="services__item-title">
                            Разработка 
                        </span>
                        <p class="contacts__descr mt-19">
                            Наша команда экспертов поможет вам создать магазин и добавить товары, коллекции, а также приложения, с помощью которых ваши услуги или товары будут показывать высокую конверсию.
                        </p>
                    </li>

                    <li class="services__item">
                        <span class="services__item-title">
                            Дизайн и ЮЗАБИЛИТИ 
                        </span>
                        <p class="contacts__descr mt-19">
                            Наши опытные веб-дизайнеры Shopify помогают нашим клиентам создавать удобные для пользователей магазины, которые впечатляюще демонстрируют услуги и продукты. Идеальная визуальная концепция сделает ваш сайт потрясающим и привлекательным. Мы создадим и реализуем ваш E-commerce проект с превосходным дизайном.
                        </p>
                    </li>

                    <li class="services__item">
                        <span class="services__item-title">
                            поддержка и маркетинг
                        </span>
                        <p class="contacts__descr mt-19">
                            Мы создадим и реализуем маркетинговую стратегию. Произведем все этапы технических работ по работоспособности вашего сайта. Проанализируем и масштабируем рекламу. Предложим несколько проверенных рекламных стратегий, которые увеличат продажи и конверсию вашего проекта.
                        </p>
                    </li>
                </ul>
            </div>
            <picture class="contacts__img services__img">
                <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/services-img.png">
                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/services-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/services-img.png" alt="" >
            </picture>
            <!-- <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/services-img.png" alt="" class="contacts__img services__img wow animate__animated animate__fadeInBottomRight"> -->
        </div>
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/bg/figure-mid.png" class="services__figure">

        <div class="contacts__wrapper design__wrapper">
            <picture class="contacts__img  design__img">
                <source media="(min-width: 769px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/design-img.png">
                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/design-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/design-img.png" alt="" >
            </picture>
            <div class="contacts__form-wrapp design__text-wrapper wow animate__animated animate__fadeInBottomRight">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Дизайн и юзабилити
                </h2>
                <p class="contacts__descr design__descr">
                    Наша команда UX и UI-дизайнеров готова создать для вас красивый интернет-магазин. У нас индивидуальный процесс создания структуры и разработки юзабилити сайта. Благодаря этому, мы способны “упаковать” ваш проект в красивую упаковку, понятную для вашей целевой аудитории. Создание впечатляющих конверсионных e-commerce проектов - это не просто работа. Мы всегда вкладываем максимум усилий в проекты наших клиентов. 
                </p>
                <p class="contacts__descr design__descr">
                    Помимо UI реализуем UX-элементы на вашем сайте. Мы знаем, как подключить и сделать конверсионными триггеры продаж. Мы красиво оформим и установим сторонние приложения, чтобы увеличить конверсию вашего интернет-магазина, основываясь на психологических и поведенческих факторах.
                </p>
            </div>
        </div>
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/bg/design-figure.png" class="design__figure">

        <div class="contacts__wrapper support__wrapper">
            <div class="contacts__form-wrapp support__text-wrapper wow animate__animated animate__fadeInBottomLeft">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Поддержка
                </h2>
                <p class="contacts__descr design__descr">
                    Мы тесно взаимодействуем с нашими клиентами, как в процессе оказания услуг, так и после запуска проекта. Мы всегда рады помочь вам в работе с продуктовой матрицей: наполнение и редактирование. Возьмём на себя работу, как со статусами товарных категорий, так и отдельных позиций. Производим все необходимые правки на сайте, начиная от верстки, заканчивая наполнение контентом и расширением функционала с помощью дополнительных приложений (Apps) для Shopify.
                </p>
                <p class="contacts__descr design__descr">
                    Мы на постоянной основе производим работы по полному циклу работ с заказами и взаимодействию с клиентами, учитываем их пожелания и приоритеты. Создаем поведенческие триггеры с новыми и аукционными товарами. Редактируем и внедряем автоматические цепочки взаимодействия с клиентами благодаря sms, e-mail-рассылкам и push-уведомлениям. В итоге мы можем предоставить высококачественный, профессионально разработанный маркетинговый продукт.
                </p>
            </div>
            <picture class="contacts__img  design__img">
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/support-img.png">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/support-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/support-img.png" alt="" >
            </picture>
            <!-- <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/support-img.png" alt="" class="contacts__img support__img wow animate__animated animate__fadeInBottomRight"> -->
        </div>
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/bg/support-figure.png" class="support__figure">

        <div class="contacts__wrapper marketing__wrapper">
            <picture class="contacts__img  marketing__img">
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/marketing-img.png">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/services/marketing-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/marketing-img.png" alt="" >
            </picture>
            <!-- <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/marketing-img.png" alt="" class="contacts__img marketing__img wow animate__animated animate__fadeInBottomLeft"> -->
            <div class="contacts__form-wrapp marketing__text-wrapper wow animate__animated animate__fadeInBottomRight">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Маркетинг
                </h2>
                <p class="contacts__descr marketing__descr">
                    Интернет-продвижение - вечный источник лидов и продаж для любого бизнеса. Для реализации продаж мы запустим таргетированную рекламу и, как следствие, приведем пользователей, которые заинтересованы в вашем продукте. Наша команда имеет огромный опыт, как в тестовых запусках, так и в масштабировании рекламы в Facebook и Instagram на зарубежные рынки. 
                </p>
                <p class="contacts__descr marketing__descr">
                    Осуществляем SEO оптимизация вашего сайта. Прописываем теги и работаем с ключевыми словами. Выведем ваш интернет-магазин на высокие позиции в поисковой выдачи Google. Совместная работа позволит вам в короткие сроки окупить вложенные в SEO инвестиции и впоследствии увеличить выручку в несколько раз.
                </p>
                <p class="contacts__descr marketing__descr">
                    Подключаем новые каналы продаж. При необходимости можем настроить и осуществлять ведение таких каналов продаж как Pinterest, Google Shipping и многих других.
                </p>
            </div>
        </div>
        <img class="marketing__figure" src="<?php echo get_bloginfo('template_url');?>/assets/img/services/bg/marketing-figure.png">
        <span class="circle-top"></span>
        <span class="dot-top"></span>
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/bg/dots-rt.png" class="dots-left"></img>
    </section>


    <?php
get_footer();