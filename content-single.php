<?php
/**
 * @package _spx
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(array(
	    'before' => '<p>' . __('Pages: ', 'logic'),
	    'after' => '</p>',
	    'next_or_number' => 'next_and_number', # activate parameter overloading
	    'nextpagelink' => __('Next ', 'logic'),
	    'previouspagelink' => __(' Previous', 'logic'),
	    'pagelink' => '%',
	    'echo' => 1 )
	); ?>
	<hr>
	<?php logic_post_tags(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'logic' ), '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
