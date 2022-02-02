<?php
/* Template Name: Главная страница */
?>

<?php get_header(); ?>
    <header class="main-header">
        <div class="container">
            <div class="main-slider">
                <div class="swiper main-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper slider-list">
                     <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'main-slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <div class="swiper-slide slider-item">
                            <h2 class="slider-title"><?php the_field('title') ?></h2>
                            <p class="slider-subtitle"><?php the_field('subtitle') ?></p>
                            <a class="slider-btn ask-button" href="#">Оставить заявку</a> 
                        </div>
                        <!-- Slides -->

                    
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                    <!-- If we need navigation buttons -->
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>       
            </div>
        </div>
        <video class="main-header--video" width="100%" height="100%" playsinline autoplay muted loop>
            <source src="<?php echo bloginfo('template_url'); ?>/assets/video/video1.mp4"> 
        </video>  
    </header>
    <main class="page-body">
        <div class="container">
            <section class="delivery">
                <h2 class="title delivery-title">
                    <?php the_field('main_title_1'); ?>
                </h2>
                <ul class="delivery-list">
                    <li class="delivery-item">
                        <div class="delivery-item-wrapper">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/delivery-1.svg" width="40" height="40" alt="иконка">
                        </div>
                        <div class="delivery-item-wrapper">
                            <h3 class="subtitle">
                                <a><?php the_field('delivery_title_1'); ?></a>
                            </h3>
                            <p>
                                <?php the_field('delivery_descr_1'); ?>
                            </p>
                        </div>
                    </li>
                    <li class="delivery-item">
                        <div class="delivery-item-wrapper">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/delivery-2.svg" width="40" height="40"  alt="иконка">
                        </div>
                        <div class="delivery-item-wrapper">
                            <h3 class="subtitle">
                                <a><?php the_field('delivery_title_2'); ?></a>
                            </h3>
                            <p>
                                <?php the_field('delivery_descr_2'); ?>
                            </p>
                        </div>
                    </li>
                    <li class="delivery-item">
                        <div class="delivery-item-wrapper">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/delivery-3.svg" width="50" height="50" alt="иконка">
                        </div>
                        <div class="delivery-item-wrapper">
                            <h3 class="subtitle">
                                <a><?php the_field('delivery_title_3'); ?></a>
                            </h3>
                            <p>
                                <?php the_field('delivery_descr_3'); ?>
                            </p>
                        </div>     
                    </li>
                </ul>
            </section>
            <section class="extra">
                <h2 class="title"><?php the_field('main_title_2'); ?></h2>
                <ul class="delivery-list">
                    <li class="delivery-item">
                        <div class="delivery-item-wrapper">
                            <h3 class="subtitle">
                                <a href="#"><?php the_field('extra_title_1'); ?></a>
                            </h3>
                            <p>
                                <?php the_field('extra_descr_1'); ?>
                            </p>
                        </div>     
                    </li>
                    <li class="delivery-item">
                        <div class="delivery-item-wrapper">
                            <h3 class="subtitle">
                                <a href="#"><?php the_field('extra_title_2'); ?></a>
                            </h3>
                            <p>
                                <?php the_field('extra_descr_2'); ?>
                            </p>
                        </div>     
                    </li>
                    <li class="delivery-item">
                        <div class="extra-link">
                            <a href="<?php the_field('link_contract_1'); ?>" class="usually-button ask-button--alt">Образец договора</a>
                            <a href="<?php the_field('link_contract_2'); ?>" class="usually-button">Заполнение договора</a>
                        </div>
                        <p></p>
                    </li>
                </ul>
            </section>
            <section class="car-example">
                <h2 class="title"><?php the_field('main_title_3'); ?></h2>
                <p class="subtitle"><?php the_field('car-example_title'); ?></p>
                <div class="car-example-list">
					<?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'category_name'    => 'cars',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
							<li class='cars--item'>
								<div class='cars--img-wrapper'>
									<img class='cars--img' src='<?php the_field('img') ?>'>
								</div>
								<div class='cars--column cars--left-column'>
									<h2 class='cars--title'><?php the_field('title') ?></h2>
									<p class='cars--subtitle'>ПРОБЕГ: <?php the_field('mileage') ?> КМ</p>
									<p class='cars--subtitle'>Тип ввоза: <?php the_field('chooice') ?></p>
								</div>

								<div class='cars--column cars--right-column'>
									<p class='cars--title'>
										<?php the_field('price') ?> РУБ
									</p>
									<p class='cars--subtitle'>Оценка: <?php the_field('mark') ?></p>
									<p class='cars--subtitle'>Комплектация: <?php the_field('complect') ?></p>
								</div>
							</li>
                        <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
<!--                     <div class="car-example-item">
                        <a href="#" class="car-example--link">
                            <div class="car-example--image">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/car/Toyota Ipsum.png" alt="">
                            </div>
                            <h3 class="car-example__title">Toyota Ipsum acm26w</h3>
                            <p class="car-example__subtitle">2004</p>
                        </a>
                        <ul class="car-example--add-list">
                            <li class="car-example--add-item">Бензин</li>
                            <li class="car-example--add-item">2400сс</li>
                            <li class="car-example--add-item">Передний</li>
                        </ul>
                        <div class="car-example--price">
                            <p class="price">335 500 рублей</p>
                            <p class="subprice">Полная пошлина</p>
                            <a href="#" class="ask-button ask-button--alt">Оставить заявку</a>
                        </div>
                    </div>
                    <div class="car-example-item">
                        <a href="#" class="car-example--link">
                            <div class="car-example--image">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/car/Toyota Ipsum.png" alt="">
                            </div>
                            <h3 class="car-example__title">Toyota Ipsum acm26w</h3>
                            <p class="car-example__subtitle">2004</p>
                        </a>
                        <ul class="car-example--add-list">
                            <li class="car-example--add-item">Бензин</li>
                            <li class="car-example--add-item">2400сс</li>
                            <li class="car-example--add-item">Передний</li>
                        </ul>
                        <div class="car-example--price">
                            <p class="price">335 500 рублей</p>
                            <p class="subprice">Полная пошлина</p>
                            <a href="#" class="ask-button ask-button--alt">Оставить заявку</a>
                        </div>
                    </div>
                    <div class="car-example-item">
                        <a href="#" class="car-example--link">
                            <div class="car-example--image">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/car/Toyota Ipsum.png" alt="">
                            </div>
                            <h3 class="car-example__title">Toyota Ipsum acm26w</h3>
                            <p class="car-example__subtitle">2004</p>
                        </a>
                        <ul class="car-example--add-list">
                            <li class="car-example--add-item">Бензин</li>
                            <li class="car-example--add-item">2400сс</li>
                            <li class="car-example--add-item">Передний</li>
                        </ul>
                        <div class="car-example--price">
                            <p class="price">335 500 рублей</p>
                            <p class="subprice">Полная пошлина</p>
                            <a href="#" class="ask-button ask-button--alt">Оставить заявку</a>
                        </div>
                    </div>
                    <div class="car-example-item">
                        <a href="#" class="car-example--link">
                            <div class="car-example--image">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/car/Toyota Ipsum.png" alt="">
                            </div>
                            <h3 class="car-example__title">Toyota Ipsum acm26w</h3>
                            <p class="car-example__subtitle">2004</p>
                        </a>
                        <ul class="car-example--add-list">
                            <li class="car-example--add-item">Бензин</li>
                            <li class="car-example--add-item">2400сс</li>
                            <li class="car-example--add-item">Передний</li>
                        </ul>
                        <div class="car-example--price">
                            <p class="price">335 500 рублей</p>
                            <p class="subprice">Полная пошлина</p>
                            <a href="#" class="ask-button ask-button--alt">Оставить заявку</a>
                        </div>
                    </div> -->
					
					
                </div>
				<div class='car-example--button'>
					<a href='http://alljp.ru/katalog-avtomobilej/' class='usually-button'><?php the_field('car-example_btn'); ?></a>
				</div>
            </section>
            <section class="advantages">
                <h2 class="title"><?php the_field('main_title_4'); ?></h2>
                <div class="advantages-wrapper">
                    <ul class="advantages-list advantages-list--left">
                        <li class="advantages-item advantages-item--title">
                            <h3><?php the_field('advantages_left_column_title'); ?></h3>
                            <p><?php the_field('advantages_left_column_subtitle'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_left_column_title_1'); ?></h3>
                            <p><?php the_field('advantages_left_column_descr_1'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_left_column_title_2'); ?></h3>
                            <p><?php the_field('advantages_left_column_descr_2'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_left_column_title_3'); ?></h3>
                            <p><?php the_field('advantages_left_column_descr_3'); ?></p>
                        </li>
                    </ul>
                    <ul class="advantages-list advantages-list--right">
                        <li class="advantages-item advantages-item--title">
                            <h3><?php the_field('advantages_right_column_title'); ?></h3>
                            <p><?php the_field('advantages_right_column_subtitle'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_right_column_title_1'); ?></h3>
                            <p><?php the_field('advantages_right_column_descr_1'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_right_column_title_2'); ?></h3>
                            <p><?php the_field('advantages_right_column_descr_2'); ?></p>
                        </li>
                        <li class="advantages-item">
                            <h3><?php the_field('advantages_right_column_title_3'); ?></h3>
                            <p><?php the_field('advantages_right_column_descr_3'); ?></p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="comeback">
                <h2 class="title"><?php the_field('main_title_5'); ?></h2>
                <ul class="comeback-slider">
                    <li class="comeback-slider-item comeback-slider-item--color-1">
                        <img width="110" height="110" src="<?php echo bloginfo('template_url'); ?>/assets/img/comeback-2.svg" alt="">
                        <h3><?php the_field('comeback_title_1'); ?></h3>
                        <p><?php the_field('comeback_descr_1'); ?></p>
                        <p class="comeback-adv"> <?php the_field('comeback_slogan_1'); ?></p>
                    </li>
                    <!-- <li class="comeback-slider-item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rect-1.svg" alt="">
                        <h3>Возврат гарантийного взноса</h3>
                        <p>Возвращаем 100% гарантийного взноса</p>
                        <p class="comeback-adv"> Возврат - 100%</p>
                    </li> -->
                    <li class="comeback-slider-item ">
                        <img width="110" height="110" src="<?php echo bloginfo('template_url'); ?>/assets/img/comeback-1.svg" alt="">
                        <h3><?php the_field('comeback_title_2'); ?></h3>
                        <p><?php the_field('comeback_descr_2'); ?></p>
                        <p class="comeback-adv"> <?php the_field('comeback_slogan_2'); ?></p>
                    </li>
                    <li class="comeback-slider-item comeback-slider-item--color-2">
                        <img width="110" height="110" src="<?php echo bloginfo('template_url'); ?>/assets/img/comeback-3.svg" alt="">
                        <h3><?php the_field('comeback_title_3'); ?></h3>
                        <p><?php the_field('comeback_descr_3'); ?></p>
                        <p class="comeback-adv"> <?php the_field('comeback_slogan_3'); ?></p>
                    </li>
                </ul>
            </section>

            <section class="main-faq">
                <div class="main-faq--title-wrapper">
                    <h2 class="title"><?php the_field('main_title_6'); ?></h2>
<!--                     <a href="questions.html" class="main-faq--all-link">Все вопросы ></a> -->
                </div> 
                <div class="main-faq--wrapper">
                <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'question',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <h3 class="main-faq--accordion"><?php the_field('question') ?><span></span></h3>
                        <div class="main-faq--panel">
                            <p>
                                <?php the_field('answer') ?>
                            </p>
                        </div>
                        <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                
                </div>
            </section>
        </div>
    </main>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?php echo bloginfo('template_url');?>/assets/js/slider.js"></script>
<?php
    get_footer();
?>