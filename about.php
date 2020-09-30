<?php /* Template Name: О нас */ ?>
<?php 
    get_header();
?>    
    <main>
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
                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/beautiful_woman_builder.png"; ?> alt="">
                </div>
            </div>
            <div class="about__details">
            <a href=<?php echo get_home_url() . "/о-нас"; ?>>
<span>Подробнее о компании</span></a>
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
    