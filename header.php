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
    <header class="limited__header__container">
        <div class="limited__header">
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
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_line.png"; ?> alt="" class="line">
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_arrow.png"; ?> alt="" class="arrow"> Главная
                        </a>
                    </li>
                    <li>
                    <a href=<?php echo get_home_url() . "/o-nas"; ?>>
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_line.png"; ?> alt="" class="line">
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_arrow.png"; ?> alt="" class="arrow"> О нас
                        </a>
                    </li>
                    <li>
                        <a href=<?php echo get_home_url() . "/uslugi"; ?>>
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_line.png"; ?> alt="" class="line">
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_arrow.png"; ?> alt="" class="arrow"> Каталог
                        </a>
                    </li>
                    <li>
                    <a href=<?php echo get_home_url() . "/kontakty"; ?>>
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_line.png"; ?> alt="" class="line">
                            <img src=<?php echo get_home_url() . "./wp-content/themes/Avrora/img/black_arrow.png"; ?> alt="" class="arrow"> Контакты
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
                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/phone_icon.png";?>>
                    Позвонить
                </button></a>
            </div>
        </div>
            <!--header_top mobile-->
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
                            <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/phone_icon.png"; ?>>
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
                                        <a href=<?php echo get_home_url(); ?>>Главная</a>
                                    </li>
                                    <li>
                                    <a href=<?php echo get_home_url() . "/o-nas"; ?>>
О нас</a>
                                    </li>
                                    <li>
                                        <a href=<?php echo get_home_url() . "/uslugi"; ?>>Каталог</a>
                                    </li>
                                    <li>
                                    <a href=<?php echo get_home_url() . "/kontakty"; ?>>
Контакты</a>
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
                                <?php the_field('schedule', 8)?>
                                </p>
                            </div>
                        </div>
                        <div class="header__top__mobile__bottom_right">
                            <div class="header__top__info phone__mobile">
                                <a href="tel:+79969627330">
                            8 (996) 962-73-30
                        </a>
                            </div>
                        </div>
                    </div>
                </div>               
    </header>