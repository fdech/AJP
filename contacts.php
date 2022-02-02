<?php

/*
Template Name: Контакты
*/

?>

<?php get_header() ?>
<main class="page-body">
    <section class="contacts">
        <div class="container">
            <h2 class="title">Контактная информация</h2>
            <div class="contacts--wrapper">
                <div class="contacts--text-block">
                    <div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_1'); ?></h3>
                        <p><?php the_field('contacts_descr_1'); ?></p>
                    </div>
                    <div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_2'); ?></h3>
                        <p><?php the_field('contacts_descr_2'); ?></p>
                    </div>
                    <div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_3'); ?></h3>
                        <p><?php the_field('contacts_descr_3'); ?></p>
                    </div>
					<div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_4'); ?></h3>
                        <p><?php the_field('contacts_descr_4'); ?></p>
                    </div>
					<div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_5'); ?></h3>
                        <p><?php the_field('contacts_descr_5'); ?></p>
                    </div>
					<div class="contacts--text-wrapper">
                        <h3 class='subtitle'><?php the_field('contacts_title_6'); ?></h3>
                        <p><?php the_field('contacts_descr_6'); ?></p>
                    </div>
                </div>
                <div class="contacts--map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1321.561851800872!2d135.07383788881745!3d48.51169326488429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5efac1dbb5d061a9%3A0x9ba035dc5e511884!2z0JDQu9GC0LDQudGB0LrQsNGPINGD0LsuLCAxOCwg0KXQsNCx0LDRgNC-0LLRgdC6LCDQpdCw0LHQsNGA0L7QstGB0LrQuNC5INC60YDQsNC5LCA2ODAwMjI!5e0!3m2!1sru!2sru!4v1638584857470!5m2!1sru!2sru"
                     style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
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