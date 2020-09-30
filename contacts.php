<?php /* Template Name: Контакты */ ?>
<?php 
    get_header();
?>    
    <section class="contacts contacts">
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
                        <a href="tel:+79293970292">
                            +7 (929) 397-02-92
                        </a>
                    </div>
                    <a href="">
                        <div class="bottom__info call_button">
                            <button>
                            <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/phone_icon.png";?>>
                            Позвонить
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </section>
<?php
    get_footer();
    