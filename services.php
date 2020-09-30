<?php /* Template Name: Услуги */ ?>
<?php 
    get_header();
?>    
    <main>
        <section id="services" class="services services_page">
            <p>
                <?php
                    echo '<a href="' . site_url() . '"><span class="main_page_breadcrumbs">Главная</span></a> <img class="breadcrumbs_arrow" src="' . site_url() . '/wp-content/themes/Avrora/img/grey_arrow.png">Каталог';
                ?>
            </p>
            <p class="catalog">
                Каталог
            </p>
            <div class="services__slider">
            <div class="owl__carousel__not__slider">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('posts_per_page' => 9, 'paged' => $paged, 'category_name' => 'services', 'orderby' => 'date', 'order' => 'ASC' );
                    query_posts($args); 
                ?>
                <?php 
                    $id_services = 0;
                    if ( have_posts() ) : while (have_posts()) : the_post(); 
                ?>
 
                    <div class="owl-carousel__item">
                        <img id=<?php echo $id_services . "owl-carousel__item__img"; ?> src="<?php the_field("main_image");?>" alt="<?php the_title();?>">
                        <?php
                            if (get_field("two_rows_title")) :
                        ?>
                            <div class="services__slider__price two_rows_title">    
                        <?php
                            else :
                        ?>
                            <div class="services__slider__price">
                        <?php
                            endif;
                        ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <h3 class="services__slider__description"><span></span><?php the_field("service_name");?></span></h3>
                            </a>
                            <div class="services__slider__additional_pics">
                                <img id=<?php echo $id_services . "additional_image1"; ?> src="<?php the_field("additional_image1");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id_services . "additional_image2"; ?> src="<?php the_field("additional_image2");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id_services . "additional_image3"; ?> src="<?php the_field("additional_image3");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id_services . "additional_image4"; ?> src="<?php the_field("additional_image4");?>" alt="<?php the_title();?>">
                            </div>
                            <?php
                                $id_services++;
                            ?>
                            <p><?php the_field("price");?></p>
                            <div class="services__slider__price__button_container">
                                <button class="services__slider__price__button">
                                    <span>                                    Задать вопрос
                                    </span>
                                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/orange_arrow.png"; ?> alt="" class="orange_arrow">
                                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/green_arrow.png"; ?> alt="" class="green_arrow">
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile; 
                ?>
                </div>
            </div>
        </section>
        <div id="myModal_services" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img class="modal_img" src="" alt="">
        </div>
    </div>
        <div id="contact_form_services" class="modal">
        <div class="modal-content contact">
            <span class="close contact">&times;</span>
            <?php
    echo do_shortcode('[contact-form-7 id="123" title="задать вопрос"]');
    ?>
        </div>
    </div>
        <?php
                the_posts_pagination( array(
                'screen_reader_text' => ' ', 
                    'mid_size'  => 2,
                    'prev_text' => __( '<span class="previous"><span id="prev_arrow_hover" class="hover_arrow"></span><span id="prev_arrow" class="not_hover_arrow" /></span>Предыдущая</span>', 'textdomain' ),
                    'next_text' => __( '<span class="next">Следующая<span id="next_arrow" class="not_hover_arrow"></span><span id="next_arrow_hover" class="hover_arrow"></span></span>', 'textdomain' ),
                ) );
                ?>
                <?php else : ?>
                    <!-- No posts found -->
                <?php endif;
                ?>
                <section class="contacts">
            <div class="contacts__inner">
                <p id="where_to_find_contacts">Где нас найти</p>
                <p id="contacts">Контакты</p>
                <div class="contacts__info">
                    <div class="bottom__info logo bottom">
                        <p>
                        <a href=<?php echo get_home_url(); ?>>
                            ООО «Аврора»
                        </a>
                        </p>
                    </div>
                    <div class="triangle"></div>
                    <div class="bottom__info email">
                        <p>
                            E-mail
                        </p>
                        <a href="mailto:sergeia333o@mail.ru">
                            sergeia333o@mail.ru
                        </a>
                    </div>
                    <div class="bottom__info schedule">
                        <p>
                            График работы
                        </p>
                        <p>
                        <?php the_field('schedule')?>
                        </p>
                    </div>
                    <div class="bottom__info phone">
                        <p>
                            Телефон
                        </p>
                        <a href="tel:+89969627330">
                            +8 (996) 962-73-30
                        </a>
                    </div>
                    <a href="tel:+89969627330">
                        <div class="bottom__info call_button">
                            <button>
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/phone_icon.png"; ?>>
                            Позвонить
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    get_footer();
    