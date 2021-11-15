<?php
/**
 * Template Name: Стоимость услуг
 *
 * @package altetsa
 */

get_header();
?>
<section class="price">
        <div class="title-group wow animate__animated animate__fadeInDown animate__repeat-1">
            <span class="title-shadow">cost of work</span>
            <h1 class="title"><span>стоимость</span> услуг</h1>
            <span class="divider"></span>
            <h2 class="subtitle">price</h2>
        </div>

        <div class="contacts__wrapper price__wrapper">
            <div class="contacts__form-wrapp price__text-wrapper wow animate__animated animate__fadeInLeft">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Прайс на услуги
                </h2>
                <p class="contacts__descr price__descr">
                    Наша команда будет так же увлечена вашим проектом, как и вы. Выделить вас среди конкурентов - это то, что мы делаем лучше всего.
                </p>
                <ul class="services__items">
                    <li class="services__item price__item">
                        <span class="services__item-title">
                            Визуальный контент и UX-дизайн 
                        </span>
                        <p class="contacts__descr price__item-descr">
                            Наша команда создаст для ваших клиентов потрясающий визуальный концепт, который будет прекрасно выглядеть
                            на веб-сайте, мобильных устройствах и социальных платформах. Мы используем все самые трендовые технологии, чтобы обеспечить наилучшее качество обслуживания покупателей
                        </p>
                    </li>

                    <li class="services__item price__item">
                        <span class="services__item-title">
                            Разработка и программирование
                        </span>
                        <p class="contacts__descr price__item-descr">
                            Именно здесь все действительно начинает обретать форму, поскольку мы интегрируем структуру дизайна с требуемой функциональностью. В конце этого этапа мы создадим удобный и доступный веб-сайт, который будет эстетично отображаться на всех устройствах.
                        </p>
                    </li>

                    <li class="services__item price__item">
                        <span class="services__item-title">
                            Маркетинг и поддержка
                        </span>
                        <p class="contacts__descr price__item-descr">
                            Мы придерживаемся подхода, ориентированного на долгосрочное сотрудничество. Наши проекты - это всегда партнерские отношения. Мы реализуем для вас стратегию развития продаж и дальнейшего масштабирования бизнеса.
                        </p>
                    </li>
                </ul>
            </div>
            <picture class="contacts__img price__img">
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img.png">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img.png" alt="">
            </picture>
        </div>

        <div class="price__packages">

            <div class="price__packages_header wow animate__animated animate__fadeInLeftBig">
                <div class="contacts__form-wrapp price__packages_text-wrapper">
                    <div class="contacts__form-wrapp-title">Altetsa</div>
                    <h2 class="contacts__title">
                        Пакеты услуг
                    </h2>
                    <p class="contacts__descr price__packages_descr">
                        У нас есть несколько пакетов разработки. Каждый последющий включает все работы предыдущего. Но вы можете выбрать любую услуги или пакет. Просто нажмите кнопку “Заказать” и мы свяжемся с Вами.
                    </p>
                </div>
            </div>

            <div class="price__packages_items">
                <div class="price__packages_item item-1 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                    <h3 class="price__packages_item_title">
                        <span class="what">Разработка</span>
                        <span class="item_price"><span>₽</span>69 900</span>
                    </h3>
                    <ul class="price__packages_item_list dev_list">
                        <li>Установка и настройка темы</li>
                        <li>Настройка навигации по сайту</li>
                        <li>Дизайн и верстка страниц</li>
                        <li>Создание коллекций и продуктов</li>
                        <li> Навигация и меню </li>
                    </ul>
                    <p class="price__packages_item_text">
                        Будь то настройка темы или технические настройки, мы поможем вам какая бы задача перед нами не стояла 
                    </p>
                    <button class="btn price__packages_item_btn">заказать</button>
                </div>

                <div class="price__packages_item item-2 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                    <h3 class="price__packages_item_title">
                        <span class="what">Дизайн</span>
                        <span class="item_price"><span>₽</span>90 590</span>
                    </h3>
                        
                    <ul class="price__packages_item_list design_list">
                        <li>Разработка брендбука сайта</li>
                        <li>Создание баннеров</li>
                        <li>Разработка UI-KIT</li>
                        <li>Навигация и юзабилити</li>
                        <li>Установка приложений</li>
                    </ul>
                    <p class="price__packages_item_text">
                        Мы создадим идеальное сочетание UX и UI-компонентов для вашего сайта
                    </p>
                    <button class="btn price__packages_item_btn">заказать</button>
                </div>

                <div class="price__packages_item item-3 wow animate__animated animate__fadeInUp" data-wow-duration="2.5s">
                    <h3 class="price__packages_item_title">
                        <span class="what">конверсия</span>
                        <span class="item_price"><span>₽</span>130 190</span>
                    </h3>
                    <ul class="price__packages_item_list conversion_list">
                      	<li class="dec">Настройка сторонних приложений </li>
                        <li class="mob">Настройка приложений </li>
                        <li class="dec">Создание автоворонок по e-mail и sms </li>
                        <li class="mob">Aвтоворонки по e-mail и sms </li>
                        <li class="dec">Cоздание интеграций с помощью API</li>
                        <li class="mob">Интеграции с помощью API</li>
                        <li>Подключение новых каналов <span>продаж</span> </li>
                        <li>SEO оптимизация сайта</li>
                    </ul>
                    <p class="price__packages_item_text">
                        Мы являемся экспертами по увеличению конверсии на сайте
                    </p>
                    <button class="btn price__packages_item_btn">заказать</button>
                </div>
            </div>

            <div class="contacts__wrapper services__wrapper">
                <div class="contacts__form-wrapp services__text-wrapper wow animate__animated animate__fadeInBottomLeft">
                    <div class="contacts__form-wrapp-title">Altetsa</div>
                    <h2 class="contacts__title">
                        Поддержка и маркетинг
                    </h2>
                    <p class="contacts__descr services__descr">
                        У вас уже есть e-commerce проект? Есть необходимость техническом обслуживании? Если да, то смело можете обращаться к нам...  У нас большой опыт работы поддержки самых разных интернерт-магазинов. Также мы производим полный комплекс работ по привлечению трафика на сайт.
                    </p>
                    <ul class="services__items">
                        <li class="services__item">
                            <span class="services__item-title">
                                Поддержка и контент
                            </span>
                            <p class="contacts__descr mt-19 services__descr">
                                Доверьте нам заботу о техническом обслуживании магазина, чтобы вы могли больше сосредоточиться на своем бизнесе. Мы делаем копирайт необходимый для SEO, а также UI-дизайн. Наши дизайнеры сделают ваш проект стильным и уникальным. Также мы придумаем и реализуем структуру и логику товарных позиций и коллекций на сайте. 
                            </p>
                        </li>
                        <li class="services__item">
                            <span class="services__item-title">
                                Маркетинг
                            </span>
                            <p class="contacts__descr mt-19 services__descr">
                            Самое главное - это трафик. Доверьте нам работу по привлечению посетителей на ваш сайт. Мы делаем SEO-оптимизацию, а также настраиваем и внедряем автоворонки с целью увеличения продаж с помощью E-mail, SMS
                            -рассылок и Push-уведомлений.
                            </p>
                        </li>
                    </ul>
                </div>
                <picture class="contacts__img price__img">
                    <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img2.png">
                    <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img2-mob.png">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img2.png" alt="marketing" >
                </picture>
                <!-- <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/price-img2.png" alt="" class="contacts__img price__img services__img wow animate__animated animate__fadeInBottomRight"> -->
            </div>
        </div>
        <div class="price__faq wow animate__animated animate__zoomIn">
            <div class="lines">
                <span class="line-1"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/lines/line-1.png" alt=""></span>
                <span class="line-2"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/lines/line-2.png" alt=""></span>
                <span class="line-3"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/lines/line-3.png" alt=""></span>
                <span class="line-4"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/lines/line-4.png" alt=""></span>
                <span class="line-5"></span>
                <span class="line-6"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/lines/line-6.png" alt=""></span>
            </div>
            <div class="price__packages_header price__faq_header ">
                <div class="contacts__form-wrapp price__faq__text-wrapper">
                    <div class="contacts__form-wrapp-title price__faq__form-wrapp-title">Altetsa</div>
                    <h2 class="contacts__title">
                        F.A.Q
                    </h2>
                    <p class="contacts__descr">
                        Мы являемся студией с 5-летним опытом работы в области настройки интернет-проектов Shopify. Мы создали и настроили уже более 200+ магазинов. Давайте проверим подходим ли мы друг другу.
                    </p>
                </div>
            </div>
            <ul class="price__faq_list">
                <li class="price__faq_item">
                    <button class="price__faq_item_btn">
                        Хорошо ли мы подходим к друг к другу?
                    </button>
                    <p class="price__faq_item_text">Если вы выбрали платформу Shopify для создания и ведения вашего бизнеса, то будьте уверены какие бы задачи перед вами не стояли наша команда будет двигаться с вами в одном направлении, основываясь на общих принципах и ценностях.</p>
                    <div class="trigger">
                        <span></span><span></span>
                    </div>
                </li>
                <li class="price__faq_item">
                    <button class="price__faq_item_btn">
                        Почему я должен выбрать именно вас?
                    </button>
                    <p class="price__faq_item_text">Мы являемся официальными партнерами Shopify. За нашими плечами десятки созданных дропшиппинг-магазинов в разных отраслях торговли. Также есть большой опыт создания магазинов по системе POD (Print on demand). Мы выполняем только комплексные задачи: от дизайна магазина до создания приложений и рекламных компаний. В работе придерживаемся комплексного подхода в реализации проектов. Поэтому наша цель - упростить электронную коммерцию для предприятий всех размеров с помощью нашего коллективного опыта.</p>
                    <div class="trigger">
                        <span></span><span></span>
                    </div>
                </li>
                <li class="price__faq_item">
                    <button class="price__faq_item_btn">
                        Почему именно Shopify?
                    </button>
                    <p class="price__faq_item_text">Shopify - это одно из лучших технологических платформ для создания и ведения бизнеса в интернете. Вы легко можете реализовать все самые необходимые e-commerce-решения с целью увеличения продаж. У вас будет возможность с легкостью импортировать товары с самых крупных маркетплейсов и создать дропшиппинг-бизнес, продавая товары по всему миру. Shopify входит в тройку самых популярных платформ в мире для реализации онлайн-продаж.</p>
                    <div class="trigger">
                        <span></span><span></span>
                    </div>
                </li>
                <li class="price__faq_item">
                    <button class="price__faq_item_btn">
                        Какие гарантии вы даете?
                    </button>
                    <p class="price__faq_item_text">Только после анализа вашего проекта мы может предоставить вам определенные расчеты и прогнозы. Если мы беремся за работу, то можем гарантировать, что реализуем ваш проект с полной самоотдачей. От вас так же потребуется участие на всех этапах проектирования и целеполагания. Только в этом случае мы можем быть уверены, что есть взаимное доверие и, как следствие, реализованный совместный проект.</p>
                    <div class="trigger">
                        <span></span><span></span>
                    </div>
                </li>
            </ul>
        </div>
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/bg/circle-rt.png" alt="circle" class="circle-tr">
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/bg/dots-l.png" alt="circle" class="dots-l">
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/bg/circle-mid.png" alt="circle" class="circle-mid">
        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/price/bg/figure-mid.png" alt="figure" class="figure-mid">
    </section>


    <?php
get_footer();