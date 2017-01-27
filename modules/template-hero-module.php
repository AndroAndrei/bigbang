<?php
/**
 * Module/Layout template.
 *
 * @package bigbang
 */

if ( get_sub_field( 'headline' ) ) {
	$headline = get_sub_field( 'headline' );
} else {
	$headline = get_the_title();
}

$tag = get_sub_field( 'headline_tag' );
$image = get_sub_field( 'image' );

$link_type = get_sub_field( 'button_type' );
if ( $link_type === 'internal' ) {
	$link = get_sub_field( 'button_internal_url' );
} elseif ( $link_type === 'external' ) {
	$link = get_sub_field( 'button_external_url' );
}
?>
<section class="module module-hero">
	<?php if ( $link ) : ?>
		<a href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $headline ); ?>">
	<?php endif; ?>
	<div class="item" style="background-image:url(<?php echo esc_url( $image['sizes']['custom-full'] ); ?>);">
		
		<?php if ( $tag !== 'disable' ) : ?>

			<div class="container">
				<div class="description">
					<?php echo wp_kses_post('<' . $tag . '>' . $headline . '</' . $tag . '>' );  ?>
				</div>
			</div>

		<?php endif; ?>
		
	</div>
	<?php if ( $link ) : ?>
		</a>
	<?php endif; ?>
</section>