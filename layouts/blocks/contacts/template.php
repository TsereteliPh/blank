<section class="contacts">
	<div class="container contacts__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'contacts__title',
			'title' => get_sub_field('title')
		)); ?>

		<div class="contacts__content">
			<?php
				$tel = get_field( 'tel', 'options' );
				$email = get_field( 'email', 'options' );
				$address = get_field( 'address', 'options' );
				$socials = get_field( 'socials', 'options' );
			?>

			<?php if ( $tel ) : ?>
				<a href="tel:<?php echo preg_replace('/[^0-9,+]/', '', $tel); ?>" class="contacts__link contacts__link--phone">
					<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite.svg#icon-phone'; ?>"></use></svg>

					<?php echo $tel; ?>
				</a>
			<?php endif; ?>

			<?php if ( $address ) : ?>
				<address class="contacts__link contacts__link--address">
					<svg width="22" height="24"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite.svg#icon-geo'; ?>"></use></svg>

					<?php echo $address; ?>
				</address>
			<?php endif; ?>

			<?php if ( $email ) : ?>
				<a href="mailto:<?php echo $email; ?>" class="contacts__link contacts__link--email">
					<svg width="22" height="18"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite.svg#icon-email'; ?>"></use></svg>

					<?php echo $email; ?>
				</a>
			<?php endif; ?>

			<?php if ( $socials ) : ?>
				<div class="socials contacts__socials">
					<?php foreach ( $socials as $social ) : ?>
						<a href="<?php echo $social['link'];?>" class="socials__link" aria-label="Ссылка на соцсеть <?php echo $social['social']['label']; ?>">
							<svg width="25" height="25"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite.svg#icon-' . $social['social']['value']; ?>"></use></svg>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<form method="POST" class="contacts__form">
			<div class="contacts__form-label">Свяжитесь с нами</div>

			<div class="contacts__form-wrapper">
				<input type="text" class="input contacts__input" name="client_name" placeholder="ФИО" required>

				<input type="email" class="input contacts__input" name="client_email" placeholder="E - mail" required>

				<textarea type="text" class="input contacts__input" name="client_message" placeholder="Текст вопроса" required></textarea>

				<label class="policy-check contacts__policy">
					<input type="checkbox" name="policy" class="policy-check__input" required checked>
					<span class="policy-check__switcher"></span>
					<span class="policy-check__text">Нажимая кнопку вы даете согласие на обработку персональных данных в соответствии с <a href="<?php echo get_privacy_policy_url(); ?>" target="_blank">Политикой&nbsp;конфиденциальности</a></span>
				</label>

				<button class="btn contacts__submit" type="sumbit">Заказать звонок</button>
			</div>
		</form>
	</div>
</section>
