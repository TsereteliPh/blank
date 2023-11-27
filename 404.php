<?php get_header(); ?>

<section class="not-found">
	<div class="container not-found__container">
		<h1 class="not-found__title">404</h1>

		<div class="not-found__text">К сожалению такой страницы не существует. Возможно она была удалена или в запросе был указан неверный адрес. Чтобы вернуться на главную страницу, <a href="<?php echo bloginfo( 'url' ); ?>">нажмите здесь</a>.</div>
	</div>
</section>

<?php get_footer(); ?>
