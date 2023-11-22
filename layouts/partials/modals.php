<?php
    if (is_archive()) {
        $pageTitle = get_the_archive_title();
    } else {
        $pageTitle = get_the_title();
    }
?>
<div class="modal modal--success" id="success">
	<h2 class="modal__title">Спасибо!</h2>

	<div class="modal__text">Ваша заявка была успешно отправлена! Мы свяжемся с вами в ближайшее время.</div>
</div>

<div class="modal" id="callback">
	<h2 class="modal__title">Заявка на обратную связь</h2>

	<form method="POST" class="modal__form" name="Звонок">
		<?php wp_nonce_field( 'Звонок', 'callback_input' ); ?>

		<input type="text" class="hidden" name="page_request" value="<?php echo $pageTitle; ?>">

		<input class="input modal__input" type="text" name="client_name" placeholder="ФИО" autocompete="name" required>

		<input class="input modal__input" type="tel" name="client_tel" placeholder="Телефон" autocompete="off" required>

		<input class="input modal__input" type="email" name="client_email" placeholder="E - mail" autocompete="email">

		<label class="policy-check modal__policy">
			<input type="checkbox" name="policy" class="policy-check__input" required checked>
			<span class="policy-check__switcher"></span>
			<span class="policy-check__text">Нажимая кнопку вы даете согласие на обработку персональных данных в соответствии с <a href="<?php echo get_privacy_policy_url(); ?>" target="_blank">Политикой&nbsp;конфиденциальности</a></span>
		</label>

		<button class="btn contacts__submit" type="sumbit">Заказать звонок</button>
	</form>
</div>
