<?php

/**
 * Slider block
 */












// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Load values and assign defaults.
$quote             = '' !== get_field('quote') ? get_field('quote') : 'Your quote here...';
$author            = get_field('author');
$author_role       = get_field('role');
$image             = get_field('image');
$background_color  = get_field('background_color'); // ACF's color picker.
$text_color        = get_field('text_color'); // ACF's color picker.
$quote_attribution = '';

if ($author) {
	$quote_attribution .= '<footer class="example-1__attribution">';
	$quote_attribution .= '<cite class="example-1__author">' . $author . '</cite>';

	if ($author_role) {
		$quote_attribution .= '<span class="example-1__role">' . $author_role . '</span>';
	}

	$quote_attribution .= '</footer><!-- .example-1__attribution -->';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'example-1';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
if ($background_color || $text_color) {
	$class_name .= ' has-custom-acf-color';
}

// Build a valid style attribute for background and text colors.
$styles = array('background-color: ' . $background_color, 'color: ' . $text_color);
$style  = implode('; ', $styles);
?>

<div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>" style="<?php echo esc_attr($style); ?>">
	<div class="example-1__col">
		<blockquote class="example-1__blockquote">
			<?php echo esc_html($quote); ?>

			<?php if ('' !== $quote_attribution) : ?>
				<?php echo wp_kses_post($quote_attribution); ?>
			<?php endif; ?>
		</blockquote>
	</div>

	<?php if ($image) : ?>
		<div class="example-1__col">
			<figure class="example-1__image">
				<?php echo wp_get_attachment_image($image['ID'], 'full', '', array('class' => 'example-1__img')); ?>
			</figure>
		</div>
	<?php endif; ?>
</div>