<?php
 /*
    Template Name: Как купить
*/
?>

<?php
    get_header();
?>
<main class='page-body'>
	<section class='how-to-buy'>
		<div class='container'>
			<h1 class='title'>
			<?php the_field('how-to-buy--title') ?>
			</h1>
			<?php the_field('how-to-buy--text') ?>
		</div>
	</section>
</main>


<?php
    get_footer();
?>