<?php
if ( !empty( $args['title']['text'] ) && !empty( $args['title']['before'] ) ) {
	echo sprintf(
		'<div class="title %1$s">
			<div class="title__before">%2$s</div>
			<%3$s class="title__text">%4$s</%3$s>
		</div>',
		$args['class'],
		$args['title']['before'],
		$args['title']['type'],
		$args['title']['text']
	);
} else {
	echo sprintf(
        '<div class="title %1$s">
            <%2$s class="title__text">%3$s</%2$s>
        </div>',
        $args['class'],
        $args['title']['type'],
        $args['title']['text']
    );
}
