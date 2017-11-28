<?php
/**
 * The template for displaying Author bios
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>

<div class="titlecomment">
	<h4 class="author-title"><?php esc_html_e( 'Published by', 'maisha' ); ?></h4>
</div>
<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @since Maisha 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'maisha_author_bio_avatar_size', 56 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h3 class="author-title"><?php echo get_the_author(); ?></h3>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( esc_html__( 'View all posts by %s', 'maisha' ), get_the_author() ); ?>
			</a>
		</p><!-- .author-bio -->

	</div><!-- .author-description -->
</div><!-- .author-info -->