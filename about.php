<?php
/*
    Template Name: О компании
*/
?>

<?php get_header(); ?>
<main class="page-body">
    <section class="about">
        <div class="container about--container">
        <?php
             // параметры по умолчанию
             $my_posts = get_posts( array(
                 'numberposts' => -1,
                 'category_name'    => 'company',
                 'orderby'     => 'date',
                 'order'       => 'ASC',
                 'post_type'   => 'post',
                 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
             ) );

             foreach( $my_posts as $post ){
                 setup_postdata( $post );
                 ?>
                <div class="about--wrapper">
                    <div class="about--text-wrapper">
                        <h2 class="title"> <?php the_field('title'); ?></h2>
                        <div class="about--text">
                            <?php the_field('descr'); ?>
                        </div>
                    </div>
                    <?php
                        $field = get_field('btn_img');
                        if ($field == 'on') {
                            ?>
                            <img class="img-full" src="<?php the_field('img'); ?>" alt="">
                            <?php

                            }
                            ?>
                </div>

            <?php
                 }

                wp_reset_postdata(); // сброс
            ?>
                   
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
<?php get_footer(); ?>