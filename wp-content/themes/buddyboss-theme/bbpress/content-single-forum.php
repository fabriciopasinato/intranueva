<?php

/**
 * Single Forum Content Part
 *
 * @package    bbPress
 * @subpackage Theme
 */

$class = '';

if ( bbp_is_single_forum() && bbp_has_forums() ) {
	$class = 'single-with-sub-forum ';
}
?>

<div id="bbpress-forums" class="<?php echo esc_attr( $class ); ?>">

	<?php
	if ( ! empty( $post->post_parent ) && bbp_is_single_forum() ) {
		$post_parent_title = '';
		if ( $post->post_parent !== $post->ID ) {
			$post_parent_title = sprintf( '<a href="%s" class="bbp-breadcrumb-forum">%s</a> <span class="bb-icon-l bb-icon-angle-right"></span> ', esc_url( get_the_permalink( $post->post_parent ) ), esc_html( get_the_title( $post->post_parent ) ) );
		}
		?>
		<div class="bbp-forum-child">
			<div class="bbp-breadcrumb">
				<?php
				if ( '' !== $post_parent_title ) {
					?>
					<p>
						<?php echo wp_kses_post( $post_parent_title ); ?>
						<span class="bbp-breadcrumb-current">
							<?php the_title(); ?>
						</span>
					</p>
					<?php
				} else {
					the_title( '<p>' . $post_parent_title, '</p>' );
				}
				?>
			</div>
		</div>
	<?php } ?>

    

	<?php do_action( 'bbp_template_before_single_forum' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php if ( bbp_has_forums() ) : ?>
			<?php if ( bp_is_group_single() || bbp_is_single_forum() ) { ?>
				<div class="bp-group-single-forums">
				<hr>
				<h3 class="bb-sub-forum-title"><?php esc_html_e( 'Sub Forums', 'buddyboss-theme' ); ?></h3>
			<?php } ?>

			<?php bbp_get_template_part( 'loop', 'forums' ); ?>

			<?php if ( bp_is_group_single() || bbp_is_single_forum() ) { ?>
				</div>
			<?php } ?>
		<?php endif; ?>

		<?php if ( ! bbp_is_forum_category() && bbp_has_topics() ) : ?>

			<?php bbp_get_template_part( 'loop', 'topics' ); ?>

			<?php bbp_get_template_part( 'pagination', 'topics' ); ?>

			<?php bbp_get_template_part( 'form', 'topic' ); ?>

		<?php elseif ( ! bbp_is_forum_category() ) : ?>

			<?php bbp_get_template_part( 'feedback', 'no-topics' ); ?>

			<?php bbp_get_template_part( 'form', 'topic' ); ?>

		<?php endif; ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_forum' ); ?>

</div>
