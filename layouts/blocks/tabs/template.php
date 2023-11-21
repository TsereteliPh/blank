<?php
	$tabs = get_sub_field( 'tabs' );
	if ( $tabs ) :
?>
	<section class="tabs">
		<div class="container">
			<ul class="reset-list tabs__controls js-tabs">
				<?php foreach ( $tabs as $key => $tab ) : ?>
					<li class="tabs__label<?php echo ($key == 0) ? ' active' : ''; ?>" data-tab="tab-item-<?php echo $key; ?>"><?php echo $tab['label']; ?></li>
				<?php endforeach; ?>
			</ul>

			<ul class="reset-list tabs__list">
				<?php foreach ( $tabs as $key => $tab ) : ?>
					<li class="tabs__item<?php echo ($key == 0) ? ' active' : ''; ?>" id="tab-item-<?php echo $key; ?>">
						<div class="tabs__content">
							<?php if ( $tab['text'] ) : ?>
								<div class="tabs__text"><?php echo $tab['text']; ?></div>
							<?php endif; ?>

							<?php if ( $tab['list'] ) : ?>
								<ul class="reset-list tabs__companies">
									<?php foreach ( $tab['list'] as $company ) : ?>
										<li class="tabs__company">
											<?php echo wp_get_attachment_image( $company['logo'], 'thumbnail', false ); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>

						<?php
							if ( $tab['background'] ) {
								echo wp_get_attachment_image( $tab['background'], 'full', false, array(
									'class' => 'tabs__background'
								));
							} else {
								echo '<img src="'. get_template_directory_uri(). '/assets/images/tabs-bg.jpg" class="tabs__background" alt="Изображение методов доставки компании Blank" width="" height="">';
							}
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
