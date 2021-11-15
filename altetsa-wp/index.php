<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package altetsa
 */

get_header();
?>	

    <main>
        <section class="hero">
            <div class="hero__wrapper animate__animated animate__fadeInDown animate__repeat-1">
                <h1 class="hero__title">
                    мы создаем <span>e-commerce</span> проекты по модели dropshiping на платформе <span>shopify</span>
                </h1>
                <h2 class="hero__subtitle">
                    Мы объединяем UX-дизайн с бизнес-стратегиями
                    для достижения результатов.
                </h2>
            </div>
            <h3 class="hero__descr animate__animated animate__fadeInUp animate__repeat-1">shopify</h3>
            <h3 class="hero__descr_mob animate__animated animate__fadeInUp animate__repeat-1">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/hero/hero-descr-mob.svg" alt="shopify">
            </h3>
            <div class="section-number">01</div>
            <aside class="counter-dots">
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
            </aside>
            <aside class="counter-number">
                <span>01</span>/04
            </aside> 

            <img class="hero__bg" src="<?php echo get_bloginfo('template_url');?>/assets/img/hero/man.png" alt="man" >
            
        </section>
    </main>

    
</body>
</html>

<?php
get_footer();


