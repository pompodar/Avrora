<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Аврора</title>
    <meta name="description" content="ООО «Аврора»
                            Полный спектр
                            современных материалов
                            для бетонирования полов">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php 
			   wp_head();
		?>
</head>

<body>
    <!--
    <div class="header__vertical_line first"></div>
    <div class="header__vertical_line second"></div>
    <div class="header__vertical_line third"></div>
    <div class="header__vertical_line forth"></div>
    <div class="header__vertical_line fifth"></div>
    -->
    <header>
        <div class="sticky_header">
            <div class="header__top__info logo mobile">
                <p>
                    <a href=<?php echo get_home_url(); ?>>
                        ООО «Аврора»
                    </a>
                </p>
            </div>
            <menu class="menu_mobile">
                <ul>
                    <li>
                    <a href=<?php echo get_home_url(); ?>>
                            <img src="./wp-content/themes/Avrora/img/black_line.png" alt="" class="line">
                            <img src="./wp-content/themes/Avrora/img/black_arrow.png" alt="" class="arrow"> Главная
                        </a>
                    </li>
                    <li>
                    <a href=<?php echo get_home_url() . "/o-nas"; ?>>
                            <img src="./wp-content/themes/Avrora/img/black_line.png" alt="" class="line">
                            <img src="./wp-content/themes/Avrora/img/black_arrow.png" alt="" class="arrow"> О нас
                        </a>
                    </li>
                    <li>
                    <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                            <img src="./wp-content/themes/Avrora/img/black_line.png" alt="" class="line">
                            <img src="./wp-content/themes/Avrora/img/black_arrow.png" alt="" class="arrow"> Каталог
                        </a>
                    </li>
                    <li>
                    <a href=<?php echo get_home_url() . "/kontakty"; ?>>                            <img src="./wp-content/themes/Avrora/img/black_line.png" alt="" class="line">
                            <img src="./wp-content/themes/Avrora/img/black_arrow.png" alt="" class="arrow"> Контакты
                        </a>
                    </li>
                </ul>
            </menu>
            <div class="header__top__info phone mobile">
            <a href="tel:+79969627330">
                    +7 (996) 962-73-30
                </a>
            </div>
            <div class="header__top__info call_button">
            <a href="tel:+79969627330">
                    <button>
                    <img src="./wp-content/themes/Avrora/img/phone_icon.png">
                    Позвонить
                </button></a>
            </div>
        </div>
        <div>
            <div class="header__top">
                <div class="header__top__info logo">
                    <p>
                    <a href=<?php echo get_home_url(); ?>>
                            ООО «Аврора»
                        </a>
                    </p>
                </div>
                <div class="header__top__info email">
                    <p>
                        E-mail
                    </p>
                    <a href="mailto:sergeia333o@mail.ru">
                        sergeia333o@mail.ru
                    </a>
                </div>
                <div class="header__top__info schedule">
                    <p>
                        График работы
                    </p>
                    <p>
                    <?php the_field('schedule')?>
                    </p>
                </div>
                <div class="header__top__info phone">
                    <a href="tel:+79969627330">
                        +7 (996) 962-73-30
                    </a>
                </div>
                <div class="header__top__info call_button">
                    <a href="tel:+79969627330">
                        <button>
                        <img src="./wp-content/themes/Avrora/img/phone_icon.png">
                        Позвонить
                    </button></a>
                </div>
            </div>

            <!--header_top mobile-->

            <div>
                <div class="header__top__mobile">
                    <div class="header__top__mobile__top">
                        <div class="header__top__info logo">
                            <p>
                            <a href=<?php echo get_home_url(); ?>>
                                ООО «Аврора»
                            </a>
                            </p>
                        </div>
                        <div class="header__top__info call_button">
                        <a href="tel:+79969627330">
                                <button>
                            <img src="./wp-content/themes/Avrora/img/phone_icon.png">
                            Позвонить
                        </button></a>
                        </div>
                        <div class="burger__container">
                            <button id="burger" class="open-main-nav">
                                <span class="burger"></span>
                            </button>
                            <nav class="main-nav" id="main-nav">
                                <ul>
                                    <li>
                                    <a href=<?php echo get_home_url(); ?>>
                                            Главная</a>
                                    </li>
                                    <li>
                                    <a href=<?php echo get_home_url() . "/o-nas"; ?>>
О нас</a>
                                    </li>
                                    <li>
                                    <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                                            Каталог</a>
                                    </li>
                                    <li>
                                    <a href=<?php echo get_home_url() . "/kontakty"; ?>>Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__top__mobile__bottom">
                        <div class="header__top__mobile__bottom__left">
                            <div class="header__top__info email__mobile">
                                <p>
                                    E-mail
                                </p>
                                <a href="mailto:sergeia333o@mail.ru">
                            sergeia333o@mail.ru
                        </a>
                            </div>
                            <div class="header__top__info schedule__mobile">
                                <p>
                                    График работы
                                </p>
                                <p>
                                <?php the_field('schedule')?>
                                </p>
                            </div>
                        </div>
                        <div class="header__top__mobile__bottom_right">
                            <div class="header__top__info phone__mobile">
                                <a href="tel:+79969627330">
                            +7 (996) 962-73-30
                        </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__bottom">
                    <div class="slider" id="main-slider">
                        <?php
                            $new_query = new WP_Query( array('posts_per_page' => -1, 'category_name' => 'header_slider', 'orderby' => 'date', 'order' => 'ASC')); 
                        ?>
                        <?php 
                            if ( $new_query->have_posts() ) : 
                        ?> 
                                <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                                    <div class="slider-wrapper">
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'slide' ) ); ?>
                                    </div>
                                <?php
                                    endwhile; 
                                ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <!-- No posts found -->
                            <?php endif;
                            ?>                      
                    </div>
                    <div class="header__slogan">
                        <h1>
                        <?php the_field('header_slogan')?>
                        </h1>
                        <button>
                        <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                    Узнать подробнее
                        </a>
                </button>
                        <menu>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="./wp-content/themes/Avrora/img/line.png" alt="" class="line">
                                        <img src="./wp-content/themes/Avrora/img/arrow.png" alt="" class="arrow"> Главная
                                    </a>
                                </li>
                                <li>
                                <a href=<?php echo get_home_url() . "/o-nas"; ?>>
                                        <img src="./wp-content/themes/Avrora/img/line.png" alt="" class="line">
                                        <img src="./wp-content/themes/Avrora/img/arrow.png" alt="" class="arrow"> О нас
                                    </a>
                                </li>
                                <li>
                                <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                                        <img src="./wp-content/themes/Avrora/img/line.png" alt="" class="line">
                                        <img src="./wp-content/themes/Avrora/img/arrow.png" alt="" class="arrow"> Каталог
                                    </a>
                                </li>
                                <li>
                                <a href=<?php echo get_home_url() . "/kontakty"; ?>>                                        <img src="./wp-content/themes/Avrora/img/line.png" alt="" class="line">
                                        <img src="./wp-content/themes/Avrora/img/arrow.png" alt="" class="arrow"> Контакты
                                    </a>
                                </li>
                            </ul>
                        </menu>
                        <div class="header__bottom__scroll_down">
                            <a href="#services">
                            Листать Вниз
                          </a>
                        </div>
                    </div>
                    <div class="header__bottom__advantages">
                        <div class="header__bottom__advantages__piece">
                            <div class="header__bottom__advantages__piece__img">
                                <img src="./wp-content/themes/Avrora/img/quality.png" alt="">
                            </div>
                            <div class="header__bottom__advantages__piece__text">
                                <p>
                                    отвечаем за качество
                                </p>
                                <p>
                                    выполняемых работ
                                </p>

                            </div>
                        </div>
                        <div class="header__bottom__advantages__piece">
                            <div class="header__bottom__advantages__piece__img">
                                <img src="./wp-content/themes/Avrora/img/quality.png" alt="">
                            </div>
                            <div class="header__bottom__advantages__piece__text">
                                <p>
                                    Ценим пунктуальность </p>
                                <p>
                                    во времени исполнения </p>

                            </div>
                        </div>
                        <div class="header__bottom__advantages__piece">
                            <div class="header__bottom__advantages__piece__img">
                                <img src="./wp-content/themes/Avrora/img/quality.png" alt="">
                            </div>
                            <div class="header__bottom__advantages__piece__text">
                                <p>
                                    Комплексные решения </p>
                                <p>
                                    строительных задач </p>

                            </div>
                        </div>
                        <div class="header__bottom__advantages__piece">
                            <div class="header__bottom__advantages__piece__img">
                                <img src="./wp-content/themes/Avrora/img/quality.png" alt="">
                            </div>
                            <div class="header__bottom__advantages__piece__text">
                                <p>
                                    Индивидуальный подход </p>
                                <p>
                                    каждому клиенту </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <section id="services" class="services">
            <p>
                Мы предлагаем
            </p>
            <p>
                Наши услуги
            </p>
            <div class="services__description">
                <h2 class="services__description__text">
                    Современные высокопрочные промышленные бетонные полы сочетают в себе высокую функциональность и эстетическую привлекательность. Такие полы служат долго и не требуют ремонта.
                </h2>
                <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                    <button class="services__description__button">
                        <span>                        Смотреть все услуги
                        </span>
                            <img src="./wp-content/themes/Avrora/img/white_arrow.png" alt="" class="white_arrow">
                    </button>
                </a>
            </div>
            <div class="services__slider">
                <?php
                    $new_query = new WP_Query( array('posts_per_page' => -1, 'category_name' => 'services', 'orderby' => 'date', 'order' => 'ASC')); 
                ?>
                <?php 
                    $id = 0;
                    if ( $new_query->have_posts() ) : 
                ?> 
                    <div class="owl-carousel">
                        <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                        <div class="owl-carousel__item">
                            <img id=<?php echo $id . "owl-carousel__item__img"; ?> src="<?php the_field("main_image");?>" alt="<?php the_title();?>">
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
                                <h3 class="services__slider__description"><span><?php the_field("service_name");?></span></h3>
                            </a>
                            <div class="services__slider__additional_pics">
                                <img id=<?php echo $id . "additional_image1"; ?> src="<?php the_field("additional_image1");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id . "additional_image2"; ?> src="<?php the_field("additional_image2");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id . "additional_image3"; ?> src="<?php the_field("additional_image3");?>" alt="<?php the_title();?>">
                                <img id=<?php echo $id . "additional_image4"; ?> src="<?php the_field("additional_image4");?>" alt="<?php the_title();?>">
                            </div>
                            <?php                                 
                                $id++;
                            ?>
                            <p><?php the_field("price");?></p>
                            <div class="services__slider__price__button_container">
                                <button class="services__slider__price__button">
                                    <a>                                    Задать вопрос
                                    </a>
                                    <img src="./wp-content/themes/Avrora/img/orange_arrow.png" alt="" class="orange_arrow">
                                    <img src="./wp-content/themes/Avrora/img/green_arrow.png" alt="" class="green_arrow">
                                </button>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile; 
            ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
         <!-- No posts found -->
    <?php endif;
    ?>            
                <div class="services__slider__range">
                    <input type="range" min="1" max="100" step="2" value="1" oninput="CheckRange()" id="myRange">
                </div>
            </div>
        </section>
        <section class="about">
            <div class="about__square1">
                <div class="about__square1__inner"></div>
            </div>
            <div class="about__square2"></div>
            <div class="about__photo_and_text">
                <div class="about__photo_and_text__text">
                    <p>Информация</p>
                    <p>О нашей компании</p>
                    <p>ООО «АВРОРА» основана в 2016 году, на сегодняшний день являемся активно развивающимся предприятием. Наша строительная компания применяет в строительстве самые современные технологии и использует современные материалы. </p>
                    <p>Это позволяет экономить Ваше время и средства, добиваясь при этом хороших результатов. Все услуги по строительству, монтажу и ремонту сдаются в срок и с получением требуемого результата.</p>
                </div>
                <div class="about__photo_and_text__photo">
                    <img src="./wp-content/themes/Avrora/img/beautiful_woman_builder.png" alt="">
                </div>
            </div>
            <div class="about__details">
            <a href=<?php echo get_home_url() . "/о-нас"; ?>>
<span>Подробнее о компании</span></a>
            </div>
        </section>
        <section class="contacts">
            <div class="contacts__inner">
                <p id="where_to_find">Где нас найти</p>
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
                        <a href="tel:+79969627330">
                            +7 (996) 962-73-30
                        </a>
                    </div>
                    <a href="tel:+79969627330">
                        <div class="bottom__info call_button">
                            <button>
                            <img src="./wp-content/themes/Avrora/img/phone_icon.png">
                            Позвонить
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img class="modal_img" src="" alt="">
        </div>
    </div>
    <div id="contact_form" class="modal">
        <div class="modal-content contact">
            <span class="close contact">&times;</span>
            <?php
    echo do_shortcode('[contact-form-7 id="123" title="задать вопрос"]');
    ?>
        </div>
    </div>
    </main>
    <?php
        get_footer();