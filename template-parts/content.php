<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

    <div class="service_title">
		<h1>
		    <?php 
	            the_title();
	        ?>
		</h1>
	</div>
	<div class="container__single">
    <div class="services__slider single">
            <div class="owl__carousel__not__slider"> 
                    <div class="owl-carousel__item">
                        <img id="owl-carousel__item__img" src="<?php the_field("main_image");?>" alt="<?php the_title();?>">
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
                                <img id="additional_image1" src="<?php the_field("additional_image1");?>" alt="<?php the_title();?>">
                                <img id="additional_image2" src="<?php the_field("additional_image2");?>" alt="<?php the_title();?>">
                                <img id="additional_image3" src="<?php the_field("additional_image3");?>" alt="<?php the_title();?>">
                                <img id="additional_image4" src="<?php the_field("additional_image4");?>" alt="<?php the_title();?>">
                            </div>
                            <?php
                            ?>
                            <p><?php the_field("price");?></p>
                            <div class="services__slider__price__button_container">
                                <button class="services__slider__price__button single">
                                    <span>                                    Заказать услугу
                                    </span>
                                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/orange_arrow.png"; ?> alt="" class="orange_arrow">
                                    <img src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/green_arrow.png"; ?> alt="" class="green_arrow">
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    //endwhile; 
                ?>
                </div>
			</div>     
			<div class="service__description__single">
			    <?php
					the_content();
				?>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>  
		</div>
	</div><!-- .entry-content -->
	<div id="contact_form" class="modal">
        <div class="modal-content contact">
            <span class="close contact">&times;</span>
            <?php
    echo do_shortcode('[contact-form-7 id="261" title="заказать услугу"]');
    ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
