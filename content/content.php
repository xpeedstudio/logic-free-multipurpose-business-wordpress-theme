<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
$display_settings = array();
if (defined('FW')) {
    $display_settings = fw_get_db_settings_option('blog_display_settings');
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Article header -->
    <header class="entry-header single-header">
        <?php if (has_post_thumbnail() && !post_password_required()) :
            ?>
            <figure class="entry-thumbnail">
                <?php the_post_thumbnail('blog-thumb'); ?>
            </figure>
        <?php endif;
        ?>

        <h1 class="blog-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php
        logic_post_meta();
        ?>
    </header> <!-- end entry-header -->

    <!-- Article content -->
    <div class="entry-content">
        <?php
        if (is_search()) {
            the_excerpt();
        } else {
            the_content(__('Continue Reading &rarr;', 'logic'));

            wp_link_pages();
        }
        ?>
    </div> <!-- end entry-content -->

</article>