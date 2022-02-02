<?php

/*
Template Name: Каталог автомобилей
*/

?>

<?php
	get_header();
?>

	<main class='page-body'>
		<section class='catalog'>
			<div class='container'>
				<h1 class='title'>
					Каталог автомобилей
				</h1>
				
				<div class='catalog--wrapper'>
					<ul class='cars--list'>
						<?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
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
					</ul> 	
				</div>
			</div>
		</section>
		<section class="feedback-form">
        <div class="container">
            <h2 class="title">У вас остались вопросы?</h2>
            <p class="modal--subtitle">Пожалуйста, заполните представленные ниже поля</p>
            <?php echo do_shortcode('[contact-form-7 id="252" class="form" title="Форма обратной связи"]') ?>
        </div>
    </section>
	</main>

<?php
	get_footer();
?>