</main>

<footer class="footer">
	<?php
		$tel = get_field( 'tel', 'options' );
		$email = get_field( 'email', 'options' );
		$address = get_field( 'address', 'options' );
		$img = get_field( 'footer_img', 'options' );
		$socials = get_field( 'socials', 'options' );
	?>

	<div class="container">
		<div class="footer__info">
			<div class="footer__logo">
				<a href="<?php bloginfo( 'url' ); ?>" class="footer__link">
					<svg width="680" height="80"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>
				</a>

				<div class="footer__about">Антикоррозийные составы для промышленности</div>
			</div>

			<div class="footer__contacts">
				<?php if ( $tel ) : ?>
					<a href="tel:<?php echo preg_replace('/[^0-9,+]/', '', $tel); ?>" class="footer__phone"><?php echo $tel; ?></a>
				<?php endif; ?>

				<?php if ( $address ) : ?>
					<address class="footer__address"><?php echo $address; ?></address>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<a href="mailto:<?php echo $email; ?>" class="footer__email"><?php echo $email; ?></a>
				<?php endif; ?>
			</div>

			<?php
				if ( $img ) {
					echo wp_get_attachment_image( $img, 'large', false, array(
						'class' => 'footer__img'
					) );
				}
			?>
		</div>

		<div class="footer__menu-wrapper">
			<?php wp_nav_menu(array(
                'theme_location' => 'menu_footer',
                'container' => '',
                'menu_id' => 'footer-menu',
                'menu_class' => 'reset-list footer__menu'
            ));	?>

			<form method="POST" class="footer__mailing" name="Рассылка">
				<?php
					if (is_archive()) {
						$pageTitle = get_the_archive_title();
					} else {
						$pageTitle = get_the_title();
					}

					wp_nonce_field( 'Рассылка', 'mailing_input' );
				?>

				<input type="text" class="hidden" name="page_request" value="<?php echo $pageTitle; ?>">

				<label for="footer_mailing">Подписаться на&nbsp;новостную рассылку</label>

				<div class="footer__mailing-input">
					<input class="input input--light" type="email" name="client_email" id="footer_mailing" placeholder="E - mail" required>

					<button class="footer__mailing-submit" type="submit">
						<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg>
					</button>
				</div>
			</form>
		</div>

		<div class="footer__bottom">
			<?php if ( $socials ) : ?>
				<div class="socials footer__socials">
					<?php foreach ( $socials as $social ) : ?>
						<a href="<?php echo $social['link'];?>" class="socials__link" aria-label="Ссылка на соцсеть <?php echo $social['social']['label']; ?>">
							<svg width="25" height="25"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite.svg#icon-' . $social['social']['value']; ?>"></use></svg>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<a href="<?php echo get_privacy_policy_url(); ?>" class="footer__policy">Политика конфиденциальности</a>
		</div>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
